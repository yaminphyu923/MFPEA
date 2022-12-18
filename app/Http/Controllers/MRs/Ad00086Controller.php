<?php

namespace App\Http\Controllers\MRs;

use Exception;
use App\Models\Customer;
use App\Models\MRs\Ad00086;
use Illuminate\Http\Request;
use App\Models\MRs\Ad00086Test;
use App\Models\MRs\Ad00086Finance;
use App\Http\Controllers\Controller;

class Ad00086Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-06-03-00086/22', ['only' => ['create']]);
    }

    public function index()
    {
        $ad00086s = Ad00086::with('customer')->get();
        return view('backend.labs.mrs.ad00086s.show',compact('ad00086s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.mrs.ad00086s.create',compact('customers'));
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
            $ad00086 = new Ad00086;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_ad00086s');
                $file->move($path, $filename);

                $ad00086->sign = $filename;
            }

            $ad00086->company_name = $request->company_name;
            $ad00086->address = $request->address;
            $ad00086->phone = $request->phone;
            $ad00086->lab_received_date = $request->lab_received_date;
            $ad00086->sample_number = $request->sample_number;
            $ad00086->product_name = $request->product_name;
            $ad00086->test_performed_date = $request->test_performed_date;
            $ad00086->test_type = $request->test_type;
            $ad00086->issue_date = $request->issue_date;
            $ad00086->results = $request->results;
            $ad00086->customer_id = $request->customer_id;
            $ad00086->method = $request->method;
            $ad00086->checked_name = $request->checked_name;
            $ad00086->save();

            if($ad00086)
            {
                for($i=0;$i<count($request['test_parameter']);$i++)
                {
                    $test_fill = new Ad00086Test;
                    $test_fill->ad00086_id = $ad00086->id;
                    $test_fill->test_parameter = $request['test_parameter'][$i];
                    $test_fill->test_method = $request['test_method'][$i];
                    $test_fill->result = $request['result'][$i];
                    $test_fill->range = $request['range'][$i];
                    $test_fill->standard = $request['standard'][$i];
                    $test_fill->save();
                }

                $ad_finance = new Ad00086Finance;
                $ad_finance->ad00086_id = $ad00086->id;
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
        $ad = Ad00086::with('customer')->find($id);
        $ad_tests = Ad00086Test::where('ad00086_id',$id)->get();
        return view('backend.labs.mrs.ad00086s.detail',compact('ad','ad_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad00086::find($id);
        $ad_tests = Ad00086Test::where('ad00086_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.mrs.ad00086s.edit',compact('ad','ad_tests','customers'));
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
            $ad00086 = Ad00086::find($id);

            if($ad00086->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/mr_ad00086s/'.$ad00086->sign))){

                    unlink('photos/mr_ad00086s/'.$ad00086->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_ad00086s');
                $file->move($path, $filename);

                $ad00086->sign = $filename;
            }

            $ad00086->company_name = $request->company_name;
            $ad00086->address = $request->address;
            $ad00086->phone = $request->phone;
            $ad00086->lab_received_date = $request->lab_received_date;
            $ad00086->sample_number = $request->sample_number;
            $ad00086->product_name = $request->product_name;
            $ad00086->test_performed_date = $request->test_performed_date;
            $ad00086->test_type = $request->test_type;
            $ad00086->issue_date = $request->issue_date;
            $ad00086->results = $request->results;
            $ad00086->customer_id = $request->customer_id;
            $ad00086->method = $request->method;
            $ad00086->checked_name = $request->checked_name;
            $ad00086->save();

            if($ad00086)
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
                                $update_additional = Ad00086Test::where('id',$request['ad_test_id'][$i])
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
        $ad = Ad00086::find($id);
        if($ad->sign != null){
            if(file_exists(public_path('photos/mr_ad00086s/'.$ad->sign))){

                unlink('photos/mr_ad00086s/'.$ad->sign);

            }
        }

        Ad00086::where('id',$id)->delete();

        Ad00086Test::where('ad00086_id',$id)->delete();

        Ad00086Finance::where('ad00086_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $ad = Ad00086::find($id);
        $ad_tests = Ad00086Test::where('ad00086_id',$id)->get();
        return view('backend.labs.mrs.ad00086s.print',compact('ad','ad_tests'));
    }
}
