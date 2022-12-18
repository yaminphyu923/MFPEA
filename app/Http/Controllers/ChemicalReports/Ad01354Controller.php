<?php

namespace App\Http\Controllers\ChemicalReports;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChemicalReports\Ad01354;
use App\Models\ChemicalReports\Ad01354Test;
use App\Models\ChemicalReports\Ad01354Finance;

class Ad01354Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-06-03-01354/22', ['only' => ['create']]);
    }

    public function index()
    {
        $ad01354s = Ad01354::with('customer')->get();
        return view('backend.labs.chemical_reports.ad01354s.show',compact('ad01354s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.chemical_reports.ad01354s.create',compact('customers'));
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
            $ad01354 = new Ad01354;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_ad01354s');
                $file->move($path, $filename);

                $ad01354->sign = $filename;
            }

            $ad01354->company_name = $request->company_name;
            $ad01354->address = $request->address;
            $ad01354->phone = $request->phone;
            $ad01354->lab_received_date = $request->lab_received_date;
            $ad01354->sample_number = $request->sample_number;
            $ad01354->product_name = $request->product_name;
            $ad01354->test_performed_date = $request->test_performed_date;
            $ad01354->test_type = $request->test_type;
            $ad01354->issue_date = $request->issue_date;
            $ad01354->results = $request->results;
            $ad01354->customer_id = $request->customer_id;
            $ad01354->method = $request->method;
            $ad01354->checked_name = $request->checked_name;
            $ad01354->save();

            if($ad01354)
            {
                for($i=0;$i<count($request['test_parameter']);$i++)
                {
                    $test_fill = new Ad01354Test;
                    $test_fill->ad01354_id = $ad01354->id;
                    $test_fill->test_parameter = $request['test_parameter'][$i];
                    $test_fill->test_method = $request['test_method'][$i];
                    $test_fill->result = $request['result'][$i];
                    $test_fill->unit = $request['unit'][$i];
                    $test_fill->detection = $request['detection'][$i];
                    $test_fill->save();
                }

                $ad_finance = new Ad01354Finance;
                $ad_finance->ad01354_id = $ad01354->id;
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
        $ad = Ad01354::with('customer')->find($id);
        $ad_tests = Ad01354Test::where('ad01354_id',$id)->get();
        return view('backend.labs.chemical_reports.ad01354s.detail',compact('ad','ad_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad01354::with('customer')->find($id);
        $customers = Customer::all();
        $ad_tests = Ad01354Test::where('ad01354_id',$id)->get();
        return view('backend.labs.chemical_reports.ad01354s.edit',compact('ad','customers','ad_tests'));
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
            $ad01354 = Ad01354::find($id);

            if($ad01354->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/cr_ad01354s/'.$ad01354->sign))){

                    unlink('photos/cr_ad01354s/'.$ad01354->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_ad01354s');
                $file->move($path, $filename);

                $ad01354->sign = $filename;
            }

            $ad01354->company_name = $request->company_name;
            $ad01354->address = $request->address;
            $ad01354->phone = $request->phone;
            $ad01354->lab_received_date = $request->lab_received_date;
            $ad01354->sample_number = $request->sample_number;
            $ad01354->product_name = $request->product_name;
            $ad01354->test_performed_date = $request->test_performed_date;
            $ad01354->test_type = $request->test_type;
            $ad01354->issue_date = $request->issue_date;
            $ad01354->results = $request->results;
            $ad01354->customer_id = $request->customer_id;
            $ad01354->method = $request->method;
            $ad01354->checked_name = $request->checked_name;
            $ad01354->save();

            if($ad01354)
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
                                $additional['unit'] = $request['unit'][$i];
                                $additional['detection'] = $request['detection'][$i];
                                $update_additional = Ad01354Test::where('id',$request['ad_test_id'][$i])
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
        $ad = Ad01354::find($id);
        if($ad->sign != null){
            if(file_exists(public_path('photos/cr_ad01354s/'.$ad->sign))){

                unlink('photos/cr_ad01354s/'.$ad->sign);

            }
        }

        Ad01354::where('id',$id)->delete();

        Ad01354Test::where('ad01354_id',$id)->delete();

        Ad01354Finance::where('ad01354_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $ad = Ad01354::find($id);
        $ad_tests = Ad01354Test::where('ad01354_id',$id)->get();
        return view('backend.labs.chemical_reports.ad01354s.print',compact('ad','ad_tests'));
    }
}
