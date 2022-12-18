<?php

namespace App\Http\Controllers\ChemicalReports;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChemicalReports\Ad01341;
use App\Models\ChemicalReports\Ad01341Test;
use App\Models\ChemicalReports\Ad01341Finance;

class Ad01341Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-06-03-01341/22', ['only' => ['create']]);
    }

    public function index()
    {
        $ad01341s = Ad01341::with('customer')->get();
        return view('backend.labs.chemical_reports.ad01341s.show',compact('ad01341s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.chemical_reports.ad01341s.create',compact('customers'));
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
            $ad01341 = new Ad01341;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_ad01341s');
                $file->move($path, $filename);

                $ad01341->sign = $filename;
            }

            $ad01341->company_name = $request->company_name;
            $ad01341->address = $request->address;
            $ad01341->phone = $request->phone;
            $ad01341->lab_received_date = $request->lab_received_date;
            $ad01341->sample_number = $request->sample_number;
            $ad01341->product_name = $request->product_name;
            $ad01341->test_performed_date = $request->test_performed_date;
            $ad01341->test_type = $request->test_type;
            $ad01341->issue_date = $request->issue_date;
            $ad01341->results = $request->results;
            $ad01341->customer_id = $request->customer_id;
            $ad01341->method = $request->method;
            $ad01341->checked_name = $request->checked_name;
            $ad01341->save();

            if($ad01341)
            {
                for($i=0;$i<count($request['test_parameter']);$i++)
                {
                    $test_fill = new Ad01341Test;
                    $test_fill->ad01341_id = $ad01341->id;
                    $test_fill->test_parameter = $request['test_parameter'][$i];
                    $test_fill->test_method = $request['test_method'][$i];
                    $test_fill->result = $request['result'][$i];
                    $test_fill->save();
                }

                $ad_finance = new Ad01341Finance;
                $ad_finance->ad01341_id = $ad01341->id;
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
        $ad = Ad01341::find($id);
        $ad_tests = Ad01341Test::where('ad01341_id',$id)->get();
        return view('backend.labs.chemical_reports.ad01341s.detail',compact('ad','ad_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad01341::find($id);
        $ad_tests = Ad01341Test::where('ad01341_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.chemical_reports.ad01341s.edit',compact('ad','ad_tests','customers'));
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
            $ad01341 = Ad01341::find($id);

            if($ad01341->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/cr_ad01341s/'.$ad01341->sign))){

                    unlink('photos/cr_ad01341s/'.$ad01341->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_ad01341s');
                $file->move($path, $filename);

                $ad01341->sign = $filename;
            }

            $ad01341->company_name = $request->company_name;
            $ad01341->address = $request->address;
            $ad01341->phone = $request->phone;
            $ad01341->lab_received_date = $request->lab_received_date;
            $ad01341->sample_number = $request->sample_number;
            $ad01341->product_name = $request->product_name;
            $ad01341->test_performed_date = $request->test_performed_date;
            $ad01341->test_type = $request->test_type;
            $ad01341->issue_date = $request->issue_date;
            $ad01341->results = $request->results;
            $ad01341->customer_id = $request->customer_id;
            $ad01341->method = $request->method;
            $ad01341->checked_name = $request->checked_name;
            $ad01341->save();

            if($ad01341)
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
                                $update_additional = Ad01341Test::where('id',$request['ad_test_id'][$i])
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
    public function destroy($id)
    {
        $ad = Ad01341::find($id);
        if($ad->sign != null){
            if(file_exists(public_path('photos/cr_ad01341s/'.$ad->sign))){

                unlink('photos/cr_ad01341s/'.$ad->sign);

            }
        }

        Ad01341::where('id',$id)->delete();

        Ad01341Test::where('ad01341_id',$id)->delete();

        Ad01341Finance::where('ad01341_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $ad = Ad01341::find($id);
        $ad_tests = Ad01341Test::where('ad01341_id',$id)->get();
        return view('backend.labs.chemical_reports.ad01341s.print',compact('ad','ad_tests'));
    }
}
