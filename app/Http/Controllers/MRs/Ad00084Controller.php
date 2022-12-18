<?php

namespace App\Http\Controllers\MRs;

use Exception;
use App\Models\Customer;
use App\Models\MRs\Ad00084;
use Illuminate\Http\Request;
use App\Models\MRs\Ad00084Test;
use App\Models\MRs\Ad00084Finance;
use App\Http\Controllers\Controller;

class Ad00084Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-06-03-00084/22', ['only' => ['create']]);
    }

    public function index()
    {
        $ad00084s = Ad00084::with('customer')->get();
        return view('backend.labs.mrs.ad00084s.show',compact('ad00084s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.mrs.ad00084s.create',compact('customers'));
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
            $ad00084 = new Ad00084;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_ad00084s');
                $file->move($path, $filename);

                $ad00084->sign = $filename;
            }

            $ad00084->company_name = $request->company_name;
            $ad00084->address = $request->address;
            $ad00084->phone = $request->phone;
            $ad00084->lab_received_date = $request->lab_received_date;
            $ad00084->sample_number = $request->sample_number;
            $ad00084->product_name = $request->product_name;
            $ad00084->test_performed_date = $request->test_performed_date;
            $ad00084->test_type = $request->test_type;
            $ad00084->issue_date = $request->issue_date;
            $ad00084->results = $request->results;
            $ad00084->customer_id = $request->customer_id;
            $ad00084->method = $request->method;
            $ad00084->checked_name = $request->checked_name;
            $ad00084->save();

            if($ad00084)
            {
                for($i=0;$i<count($request['test_parameter']);$i++)
                {
                    $test_fill = new Ad00084Test;
                    $test_fill->ad00084_id = $ad00084->id;
                    $test_fill->test_parameter = $request['test_parameter'][$i];
                    $test_fill->test_method = $request['test_method'][$i];
                    $test_fill->result = $request['result'][$i];
                    $test_fill->range = $request['range'][$i];
                    $test_fill->standard = $request['standard'][$i];
                    $test_fill->save();
                }

                $ad_finance = new Ad00084Finance;
                $ad_finance->ad00084_id = $ad00084->id;
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
        $ad = Ad00084::with('customer')->find($id);
        $ad_tests = Ad00084Test::where('ad00084_id',$id)->get();
        return view('backend.labs.mrs.ad00084s.detail',compact('ad','ad_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad00084::find($id);
        $ad_tests = Ad00084Test::where('ad00084_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.mrs.ad00084s.edit',compact('ad','ad_tests','customers'));
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
            $ad00084 = Ad00084::find($id);

            if($ad00084->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/mr_ad00084s/'.$ad00084->sign))){

                    unlink('photos/mr_ad00084s/'.$ad00084->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_ad00084s');
                $file->move($path, $filename);

                $ad00084->sign = $filename;
            }

            $ad00084->company_name = $request->company_name;
            $ad00084->address = $request->address;
            $ad00084->phone = $request->phone;
            $ad00084->lab_received_date = $request->lab_received_date;
            $ad00084->sample_number = $request->sample_number;
            $ad00084->product_name = $request->product_name;
            $ad00084->test_performed_date = $request->test_performed_date;
            $ad00084->test_type = $request->test_type;
            $ad00084->issue_date = $request->issue_date;
            $ad00084->results = $request->results;
            $ad00084->customer_id = $request->customer_id;
            $ad00084->method = $request->method;
            $ad00084->checked_name = $request->checked_name;
            $ad00084->save();

            if($ad00084)
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
                                $additional['range'] = $request['range'][$i];
                                $additional['standard'] = $request['standard'][$i];
                                $update_additional = Ad00084Test::where('id',$request['ad_test_id'][$i])
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
        $ad = Ad00084::find($id);
        if($ad->sign != null){
            if(file_exists(public_path('photos/mr_ad00084s/'.$ad->sign))){

                unlink('photos/mr_ad00084s/'.$ad->sign);

            }
        }

        Ad00084::where('id',$id)->delete();

        Ad00084Test::where('ad00084_id',$id)->delete();

        Ad00084Finance::where('ad00084_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $ad = Ad00084::find($id);
        $ad_tests = Ad00084Test::where('ad00084_id',$id)->get();
        return view('backend.labs.mrs.ad00084s.print',compact('ad','ad_tests'));
    }
}
