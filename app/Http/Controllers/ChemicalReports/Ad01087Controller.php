<?php

namespace App\Http\Controllers\ChemicalReports;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChemicalReports\Ad01087;
use App\Models\ChemicalReports\Ad01087Test;
use App\Models\ChemicalReports\Ad01087Finance;

class Ad01087Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-06-03-01087/22', ['only' => ['create']]);
    }

    public function index()
    {
        $ad01087s = Ad01087::with('customer')->get();
        return view('backend.labs.chemical_reports.ad01087s.show',compact('ad01087s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.chemical_reports.ad01087s.create',compact('customers'));
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
            $ad01087 = new Ad01087;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_ad01087s');
                $file->move($path, $filename);

                $ad01087->sign = $filename;
            }

            $ad01087->company_name = $request->company_name;
            $ad01087->address = $request->address;
            $ad01087->phone = $request->phone;
            $ad01087->lab_received_date = $request->lab_received_date;
            $ad01087->sample_number = $request->sample_number;
            $ad01087->product_name = $request->product_name;
            $ad01087->test_performed_date = $request->test_performed_date;
            $ad01087->test_type = $request->test_type;
            $ad01087->issue_date = $request->issue_date;
            $ad01087->results = $request->results;
            $ad01087->customer_id = $request->customer_id;
            $ad01087->method = $request->method;
            $ad01087->checked_name = $request->checked_name;
            $ad01087->save();

            if($ad01087)
            {
                for($i=0;$i<count($request['test_parameter']);$i++)
                {
                    $test_fill = new Ad01087Test;
                    $test_fill->ad01087_id = $ad01087->id;
                    $test_fill->test_parameter = $request['test_parameter'][$i];
                    $test_fill->test_method = $request['test_method'][$i];
                    $test_fill->result = $request['result'][$i];
                    $test_fill->save();
                }

                $ad_finance = new Ad01087Finance;
                $ad_finance->ad01087_id = $ad01087->id;
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
        $ad = Ad01087::with('customer')->find($id);
        $ad_tests = Ad01087Test::where('ad01087_id',$id)->get();
        return view('backend.labs.chemical_reports.ad01087s.detail',compact('ad','ad_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad01087::with('customer')->find($id);
        $customers = Customer::all();
        $ad_tests = Ad01087Test::where('ad01087_id',$id)->get();
        return view('backend.labs.chemical_reports.ad01087s.edit',compact('ad','customers','ad_tests'));
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
            $ad01087 = Ad01087::find($id);

            if($ad01087->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/cr_ad01087s/'.$ad01087->sign))){

                    unlink('photos/cr_ad01087s/'.$ad01087->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_ad01087s');
                $file->move($path, $filename);

                $ad01087->sign = $filename;
            }

            $ad01087->company_name = $request->company_name;
            $ad01087->address = $request->address;
            $ad01087->phone = $request->phone;
            $ad01087->lab_received_date = $request->lab_received_date;
            $ad01087->sample_number = $request->sample_number;
            $ad01087->product_name = $request->product_name;
            $ad01087->test_performed_date = $request->test_performed_date;
            $ad01087->test_type = $request->test_type;
            $ad01087->issue_date = $request->issue_date;
            $ad01087->results = $request->results;
            $ad01087->customer_id = $request->customer_id;
            $ad01087->method = $request->method;
            $ad01087->checked_name = $request->checked_name;
            $ad01087->save();

            if($ad01087)
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
                                $update_additional = Ad01087Test::where('id',$request['ad_test_id'][$i])
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
        $ad = Ad01087::find($id);
        if($ad->sign != null){
            if(file_exists(public_path('photos/cr_ad01087s/'.$ad->sign))){

                unlink('photos/cr_ad01087s/'.$ad->sign);

            }
        }

        Ad01087::where('id',$id)->delete();

        Ad01087Test::where('ad01087_id',$id)->delete();

        Ad01087Finance::where('ad01087_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $ad = Ad01087::find($id);
        $ad_tests = Ad01087Test::where('ad01087_id',$id)->get();
        return view('backend.labs.chemical_reports.ad01087s.print',compact('ad','ad_tests'));
    }
}
