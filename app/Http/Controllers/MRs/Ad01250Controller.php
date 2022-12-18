<?php

namespace App\Http\Controllers\MRs;

use Exception;
use App\Models\Customer;
use App\Models\MRs\Ad01250;
use Illuminate\Http\Request;
use App\Models\MRs\Ad01250Test;
use App\Models\MRs\Ad01250Finance;
use App\Http\Controllers\Controller;

class Ad01250Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-06-03-01250/22', ['only' => ['create']]);
    }

    public function index()
    {
        $ad01250s = Ad01250::with('customer')->get();
        return view('backend.labs.mrs.ad01250s.show',compact('ad01250s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.mrs.ad01250s.create',compact('customers'));
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
            $ad01250 = new Ad01250;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_ad01250s');
                $file->move($path, $filename);

                $ad01250->sign = $filename;
            }

            $ad01250->company_name = $request->company_name;
            $ad01250->address = $request->address;
            $ad01250->phone = $request->phone;
            $ad01250->lab_received_date = $request->lab_received_date;
            $ad01250->sample_number = $request->sample_number;
            $ad01250->product_name = $request->product_name;
            $ad01250->test_performed_date = $request->test_performed_date;
            $ad01250->test_type = $request->test_type;
            $ad01250->issue_date = $request->issue_date;
            $ad01250->results = $request->results;
            $ad01250->customer_id = $request->customer_id;
            $ad01250->method = $request->method;
            $ad01250->checked_name = $request->checked_name;
            $ad01250->save();

            if($ad01250)
            {
                for($i=0;$i<count($request['test_parameter']);$i++)
                {
                    $test_fill = new Ad01250Test;
                    $test_fill->ad01250_id = $ad01250->id;
                    $test_fill->test_parameter = $request['test_parameter'][$i];
                    $test_fill->test_method = $request['test_method'][$i];
                    $test_fill->result = $request['result'][$i];
                    $test_fill->save();
                }

                $ad_finance = new Ad01250Finance;
                $ad_finance->ad01250_id = $ad01250->id;
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
        $ad = Ad01250::with('customer')->find($id);
        $ad_tests = Ad01250Test::where('ad01250_id',$id)->get();
        return view('backend.labs.mrs.ad01250s.detail',compact('ad','ad_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad01250::find($id);
        $ad_tests = Ad01250Test::where('ad01250_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.mrs.ad01250s.edit',compact('ad','ad_tests','customers'));
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
            $ad01250 = Ad01250::find($id);

            if($ad01250->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/mr_ad01250s/'.$ad01250->sign))){

                    unlink('photos/mr_ad01250s/'.$ad01250->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_ad01250s');
                $file->move($path, $filename);

                $ad01250->sign = $filename;
            }

            $ad01250->company_name = $request->company_name;
            $ad01250->address = $request->address;
            $ad01250->phone = $request->phone;
            $ad01250->lab_received_date = $request->lab_received_date;
            $ad01250->sample_number = $request->sample_number;
            $ad01250->product_name = $request->product_name;
            $ad01250->test_performed_date = $request->test_performed_date;
            $ad01250->test_type = $request->test_type;
            $ad01250->issue_date = $request->issue_date;
            $ad01250->results = $request->results;
            $ad01250->customer_id = $request->customer_id;
            $ad01250->method = $request->method;
            $ad01250->checked_name = $request->checked_name;
            $ad01250->save();

            if($ad01250)
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
                                $update_additional = Ad01250Test::where('id',$request['ad_test_id'][$i])
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
        $ad = Ad01250::find($id);
        if($ad->sign != null){
            if(file_exists(public_path('photos/mr_ad01250s/'.$ad->sign))){

                unlink('photos/mr_ad01250s/'.$ad->sign);

            }
        }

        Ad01250::where('id',$id)->delete();

        Ad01250Test::where('ad01250_id',$id)->delete();

        Ad01250Finance::where('ad01250_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $ad = Ad01250::find($id);
        $ad_tests = Ad01250Test::where('ad01250_id',$id)->get();
        return view('backend.labs.mrs.ad01250s.print',compact('ad','ad_tests'));
    }
}
