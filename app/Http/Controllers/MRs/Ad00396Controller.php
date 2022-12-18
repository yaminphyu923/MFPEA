<?php

namespace App\Http\Controllers\MRs;

use Exception;
use App\Models\Customer;
use App\Models\MRs\Ad00396;
use Illuminate\Http\Request;
use App\Models\MRs\Ad00396Test;
use App\Models\MRs\Ad00396Finance;
use App\Http\Controllers\Controller;

class Ad00396Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-06-03-00396/22', ['only' => ['create']]);
    }

    public function index()
    {
        $ad00396s = Ad00396::with('customer')->get();
        return view('backend.labs.mrs.ad00396s.show',compact('ad00396s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.mrs.ad00396s.create',compact('customers'));
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
            $ad00396 = new Ad00396;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_ad00396s');
                $file->move($path, $filename);

                $ad00396->sign = $filename;
            }

            $ad00396->company_name = $request->company_name;
            $ad00396->address = $request->address;
            $ad00396->phone = $request->phone;
            $ad00396->lab_received_date = $request->lab_received_date;
            $ad00396->sample_number = $request->sample_number;
            $ad00396->product_name = $request->product_name;
            $ad00396->test_performed_date = $request->test_performed_date;
            $ad00396->test_type = $request->test_type;
            $ad00396->issue_date = $request->issue_date;
            $ad00396->results = $request->results;
            $ad00396->customer_id = $request->customer_id;
            $ad00396->method = $request->method;
            $ad00396->checked_name = $request->checked_name;
            $ad00396->save();

            if($ad00396)
            {
                for($i=0;$i<count($request['test_parameter']);$i++)
                {
                    $test_fill = new Ad00396Test;
                    $test_fill->ad00396_id = $ad00396->id;
                    $test_fill->test_parameter = $request['test_parameter'][$i];
                    $test_fill->test_method = $request['test_method'][$i];
                    $test_fill->result = $request['result'][$i];
                    $test_fill->range = $request['range'][$i];
                    $test_fill->standard = $request['standard'][$i];
                    $test_fill->save();
                }

                $ad_finance = new Ad00396Finance;
                $ad_finance->ad00396_id = $ad00396->id;
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
        $ad = Ad00396::with('customer')->find($id);
        $ad_tests = Ad00396Test::where('ad00396_id',$id)->get();
        return view('backend.labs.mrs.ad00396s.detail',compact('ad','ad_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad00396::find($id);
        $ad_tests = Ad00396Test::where('ad00396_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.mrs.ad00396s.edit',compact('ad','ad_tests','customers'));
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
            $ad00396 = Ad00396::find($id);

            if($ad00396->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/mr_ad00396s/'.$ad00396->sign))){

                    unlink('photos/mr_ad00396s/'.$ad00396->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_ad00396s');
                $file->move($path, $filename);

                $ad00396->sign = $filename;
            }

            $ad00396->company_name = $request->company_name;
            $ad00396->address = $request->address;
            $ad00396->phone = $request->phone;
            $ad00396->lab_received_date = $request->lab_received_date;
            $ad00396->sample_number = $request->sample_number;
            $ad00396->product_name = $request->product_name;
            $ad00396->test_performed_date = $request->test_performed_date;
            $ad00396->test_type = $request->test_type;
            $ad00396->issue_date = $request->issue_date;
            $ad00396->results = $request->results;
            $ad00396->customer_id = $request->customer_id;
            $ad00396->method = $request->method;
            $ad00396->checked_name = $request->checked_name;
            $ad00396->save();

            if($ad00396)
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
                                $update_additional = Ad00396Test::where('id',$request['ad_test_id'][$i])
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
        $ad = Ad00396::find($id);
        if($ad->sign != null){
            if(file_exists(public_path('photos/mr_ad00396s/'.$ad->sign))){

                unlink('photos/mr_ad00396s/'.$ad->sign);

            }
        }

        Ad00396::where('id',$id)->delete();

        Ad00396Test::where('ad00396_id',$id)->delete();

        Ad00396Finance::where('ad00396_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $ad = Ad00396::find($id);
        $ad_tests = Ad00396Test::where('ad00396_id',$id)->get();
        return view('backend.labs.mrs.ad00396s.print',compact('ad','ad_tests'));
    }
}
