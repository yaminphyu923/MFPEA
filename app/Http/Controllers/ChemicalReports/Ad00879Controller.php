<?php

namespace App\Http\Controllers\ChemicalReports;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChemicalReports\Ad00879;
use App\Models\ChemicalReports\Ad00879Test;
use App\Models\ChemicalReports\Ad00879Finance;

class Ad00879Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-06-03-00879/22', ['only' => ['create']]);
    }

    public function index()
    {
        $ad00879s = Ad00879::with('customer')->get();
        return view('backend.labs.chemical_reports.ad00879s.show',compact('ad00879s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.chemical_reports.ad00879s.create',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $ad00879 = new Ad00879;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_ad00879s');
                $file->move($path, $filename);

                $ad00879->sign = $filename;
            }

            $ad00879->company_name = $request->company_name;
            $ad00879->address = $request->address;
            $ad00879->phone = $request->phone;
            $ad00879->lab_received_date = $request->lab_received_date;
            $ad00879->sample_number = $request->sample_number;
            $ad00879->product_name = $request->product_name;
            $ad00879->test_performed_date = $request->test_performed_date;
            $ad00879->test_type = $request->test_type;
            $ad00879->issue_date = $request->issue_date;
            $ad00879->results = $request->results;
            $ad00879->customer_id = $request->customer_id;
            $ad00879->method = $request->method;
            $ad00879->checked_name = $request->checked_name;
            $ad00879->save();

            if($ad00879)
            {
                for($i=0;$i<count($request['test_parameter']);$i++)
                {
                    $test_fill = new Ad00879Test;
                    $test_fill->ad00879_id = $ad00879->id;
                    $test_fill->test_parameter = $request['test_parameter'][$i];
                    $test_fill->test_method = $request['test_method'][$i];
                    $test_fill->result = $request['result'][$i];
                    $test_fill->save();
                }

                $ad_finance = new Ad00879Finance;
                $ad_finance->ad00879_id = $ad00879->id;
                $ad_finance->save();

            }
            return redirect()->back()
                ->with('success', 'Created successfully!');
        } catch (Exception $e){
            return redirect()->back()
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad = Ad00879::with('customer')->find($id);
        $ad_tests = Ad00879Test::where('ad00879_id',$id)->get();
        return view('backend.labs.chemical_reports.ad00879s.detail',compact('ad','ad_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad00879::with('customer')->find($id);
        $customers = Customer::all();
        $ad_tests = Ad00879Test::where('ad00879_id',$id)->get();
        return view('backend.labs.chemical_reports.ad00879s.edit',compact('ad','customers','ad_tests'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $ad00879 = Ad00879::find($id);

            if($ad00879->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/cr_ad00879s/'.$ad00879->sign))){

                    unlink('photos/cr_ad00879s/'.$ad00879->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_ad00879s');
                $file->move($path, $filename);

                $ad00879->sign = $filename;
            }

            $ad00879->company_name = $request->company_name;
            $ad00879->address = $request->address;
            $ad00879->phone = $request->phone;
            $ad00879->lab_received_date = $request->lab_received_date;
            $ad00879->sample_number = $request->sample_number;
            $ad00879->product_name = $request->product_name;
            $ad00879->test_performed_date = $request->test_performed_date;
            $ad00879->test_type = $request->test_type;
            $ad00879->issue_date = $request->issue_date;
            $ad00879->results = $request->results;
            $ad00879->customer_id = $request->customer_id;
            $ad00879->method = $request->method;
            $ad00879->checked_name = $request->checked_name;
            $ad00879->save();

            if($ad00879)
            {
                if(isset($request['test_parameter']))
                {
                    if(count($request['test_parameter']) > 0)
                    {
                        for($i=0;$i<count($request['test_parameter']);$i++)
                        {
                            if(isset($request['ad_test_id'][$i]))
                            {
                                $additional['test_parameter'] = $request['test_parameter'][$i];
                                $additional['test_method'] = $request['test_method'][$i];
                                $additional['result'] = $request['result'][$i];
                                $update_additional = Ad00879Test::where('id',$request['ad_test_id'][$i])
                                                    ->update($additional);
                            }

                        }
                    }
                }


            }

            return redirect()->back()
                ->with('success', 'Updated successfully!');
        } catch (Exception $e){
            return redirect()->back()
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $ad = Ad00879::find($id);
        if($ad->sign != null){
            if(file_exists(public_path('photos/cr_ad00879s/'.$ad->sign))){

                unlink('photos/cr_ad00879s/'.$ad->sign);

            }
        }

        Ad00879::where('id',$id)->delete();

        Ad00879Test::where('ad00879_id',$id)->delete();

        Ad00879Finance::where('ad00879_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $ad = Ad00879::find($id);
        $ad_tests = Ad00879Test::where('ad00879_id',$id)->get();
        return view('backend.labs.chemical_reports.ad00879s.print',compact('ad','ad_tests'));
    }
}
