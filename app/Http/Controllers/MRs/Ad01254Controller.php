<?php

namespace App\Http\Controllers\MRs;

use Exception;
use App\Models\Customer;
use App\Models\MRs\Ad01254;
use Illuminate\Http\Request;
use App\Models\MRs\Ad01254Test;
use App\Models\MRs\Ad01254Finance;
use App\Http\Controllers\Controller;

class Ad01254Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-06-03-01254/22', ['only' => ['create']]);
    }

    public function index()
    {
        $ad01254s = Ad01254::with('customer')->get();
        return view('backend.labs.mrs.ad01254s.show',compact('ad01254s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.mrs.ad01254s.create',compact('customers'));
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
            $ad01254 = new Ad01254;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_ad01254s');
                $file->move($path, $filename);

                $ad01254->sign = $filename;
            }

            $ad01254->company_name = $request->company_name;
            $ad01254->address = $request->address;
            $ad01254->phone = $request->phone;
            $ad01254->lab_received_date = $request->lab_received_date;
            $ad01254->sample_number = $request->sample_number;
            $ad01254->product_name = $request->product_name;
            $ad01254->test_performed_date = $request->test_performed_date;
            $ad01254->test_type = $request->test_type;
            $ad01254->issue_date = $request->issue_date;
            $ad01254->results = $request->results;
            $ad01254->customer_id = $request->customer_id;
            $ad01254->method = $request->method;
            $ad01254->checked_name = $request->checked_name;
            $ad01254->save();

            if($ad01254)
            {
                for($i=0;$i<count($request['test_parameter']);$i++)
                {
                    $test_fill = new Ad01254Test;
                    $test_fill->ad01254_id = $ad01254->id;
                    $test_fill->test_parameter = $request['test_parameter'][$i];
                    $test_fill->test_method = $request['test_method'][$i];
                    $test_fill->before_result = $request['before_result'][$i];
                    $test_fill->after_result = $request['after_result'][$i];
                    $test_fill->save();
                }

                $ad_finance = new Ad01254Finance;
                $ad_finance->ad01254_id = $ad01254->id;
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
        $ad = Ad01254::with('customer')->find($id);
        $ad_tests = Ad01254Test::where('ad01254_id',$id)->get();
        return view('backend.labs.mrs.ad01254s.detail',compact('ad','ad_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad01254::find($id);
        $ad_tests = Ad01254Test::where('ad01254_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.mrs.ad01254s.edit',compact('ad','ad_tests','customers'));
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
            $ad01254 = Ad01254::find($id);

            if($ad01254->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/mr_ad01254s/'.$ad01254->sign))){

                    unlink('photos/mr_ad01254s/'.$ad01254->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_ad01254s');
                $file->move($path, $filename);

                $ad01254->sign = $filename;
            }

            $ad01254->company_name = $request->company_name;
            $ad01254->address = $request->address;
            $ad01254->phone = $request->phone;
            $ad01254->lab_received_date = $request->lab_received_date;
            $ad01254->sample_number = $request->sample_number;
            $ad01254->product_name = $request->product_name;
            $ad01254->test_performed_date = $request->test_performed_date;
            $ad01254->test_type = $request->test_type;
            $ad01254->issue_date = $request->issue_date;
            $ad01254->results = $request->results;
            $ad01254->customer_id = $request->customer_id;
            $ad01254->method = $request->method;
            $ad01254->checked_name = $request->checked_name;
            $ad01254->save();

            if($ad01254)
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
                                $additional['before_result'] = $request['before_result'][$i];
                                $additional['after_result'] = $request['after_result'][$i];
                                $update_additional = Ad01254Test::where('id',$request['ad_test_id'][$i])
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
        $ad = Ad01254::find($id);
        if($ad->sign != null){
            if(file_exists(public_path('photos/mr_ad01254s/'.$ad->sign))){

                unlink('photos/mr_ad01254s/'.$ad->sign);

            }
        }

        Ad01254::where('id',$id)->delete();

        Ad01254Test::where('ad01254_id',$id)->delete();

        Ad01254Finance::where('ad01254_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $ad = Ad01254::find($id);
        $ad_tests = Ad01254Test::where('ad01254_id',$id)->get();
        return view('backend.labs.mrs.ad01254s.print',compact('ad','ad_tests'));
    }
}
