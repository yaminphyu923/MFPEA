<?php

namespace App\Http\Controllers\MRs;

use Exception;
use App\Models\Customer;
use App\Models\MRs\Ad01357;
use Illuminate\Http\Request;
use App\Models\MRs\Ad01357Test;
use App\Models\MRs\Ad01357Finance;
use App\Http\Controllers\Controller;

class Ad01357Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-06-03-01357/22', ['only' => ['create']]);
    }

    public function index()
    {
        $ad01357s = Ad01357::with('customer')->get();
        return view('backend.labs.mrs.ad01357s.show',compact('ad01357s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.mrs.ad01357s.create',compact('customers'));
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
            $ad01357 = new Ad01357;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_ad01357s');
                $file->move($path, $filename);

                $ad01357->sign = $filename;
            }

            $ad01357->company_name = $request->company_name;
            $ad01357->address = $request->address;
            $ad01357->phone = $request->phone;
            $ad01357->lab_received_date = $request->lab_received_date;
            $ad01357->sample_number = $request->sample_number;
            $ad01357->product_name = $request->product_name;
            $ad01357->test_performed_date = $request->test_performed_date;
            $ad01357->consignee = $request->consignee;
            $ad01357->quantity = $request->quantity;
            $ad01357->packing = $request->packing;
            $ad01357->loading = $request->loading;
            $ad01357->discharge = $request->discharge;
            $ad01357->vessel_name = $request->vessel_name;
            $ad01357->eori = $request->eori;
            $ad01357->hscode = $request->hscode;
            $ad01357->ponumber = $request->ponumber;
            $ad01357->sample_taken = $request->sample_taken;
            $ad01357->test_type = $request->test_type;
            $ad01357->issue_date = $request->issue_date;
            $ad01357->results = $request->results;
            $ad01357->customer_id = $request->customer_id;
            $ad01357->method = $request->method;
            $ad01357->checked_name = $request->checked_name;
            $ad01357->save();

            if($ad01357)
            {
                for($i=0;$i<count($request['test_parameter']);$i++)
                {
                    $test_fill = new Ad01357Test;
                    $test_fill->ad01357_id = $ad01357->id;
                    $test_fill->test_parameter = $request['test_parameter'][$i];
                    $test_fill->test_method = $request['test_method'][$i];
                    $test_fill->result = $request['result'][$i];
                    $test_fill->range = $request['range'][$i];
                    $test_fill->standard = $request['standard'][$i];
                    $test_fill->save();
                }

                $ad_finance = new Ad01357Finance;
                $ad_finance->ad01357_id = $ad01357->id;
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
        $ad = Ad01357::with('customer')->find($id);
        $ad_tests = Ad01357Test::where('ad01357_id',$id)->get();
        return view('backend.labs.mrs.ad01357s.detail',compact('ad','ad_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad01357::find($id);
        $ad_tests = Ad01357Test::where('ad01357_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.mrs.ad01357s.edit',compact('ad','ad_tests','customers'));
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
            $ad01357 = Ad01357::find($id);

            if($ad01357->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/mr_ad01357s/'.$ad01357->sign))){

                    unlink('photos/mr_ad01357s/'.$ad01357->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_ad01357s');
                $file->move($path, $filename);

                $ad01357->sign = $filename;
            }

            $ad01357->company_name = $request->company_name;
            $ad01357->address = $request->address;
            $ad01357->phone = $request->phone;
            $ad01357->lab_received_date = $request->lab_received_date;
            $ad01357->sample_number = $request->sample_number;
            $ad01357->product_name = $request->product_name;
            $ad01357->test_performed_date = $request->test_performed_date;
            $ad01357->consignee = $request->consignee;
            $ad01357->quantity = $request->quantity;
            $ad01357->packing = $request->packing;
            $ad01357->loading = $request->loading;
            $ad01357->discharge = $request->discharge;
            $ad01357->vessel_name = $request->vessel_name;
            $ad01357->eori = $request->eori;
            $ad01357->hscode = $request->hscode;
            $ad01357->ponumber = $request->ponumber;
            $ad01357->sample_taken = $request->sample_taken;
            $ad01357->test_type = $request->test_type;
            $ad01357->issue_date = $request->issue_date;
            $ad01357->results = $request->results;
            $ad01357->customer_id = $request->customer_id;
            $ad01357->method = $request->method;
            $ad01357->checked_name = $request->checked_name;
            $ad01357->save();

            if($ad01357)
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
                                $update_additional = Ad01357Test::where('id',$request['ad_test_id'][$i])
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
        $ad = Ad01357::find($id);
        if($ad->sign != null){
            if(file_exists(public_path('photos/mr_ad01357s/'.$ad->sign))){

                unlink('photos/mr_ad01357s/'.$ad->sign);

            }
        }

        Ad01357::where('id',$id)->delete();

        Ad01357Test::where('ad01357_id',$id)->delete();

        Ad01357Finance::where('ad01357_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $ad = Ad01357::find($id);
        $ad_tests = Ad01357Test::where('ad01357_id',$id)->get();
        return view('backend.labs.mrs.ad01357s.print',compact('ad','ad_tests'));
    }
}
