<?php

namespace App\Http\Controllers\WaterTests;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\WaterTests\F04che28;
use App\Http\Controllers\Controller;
use App\Models\WaterTests\F04che28Test;
use App\Models\WaterTests\F04che28Finance;

class F04che28Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-04-Che/28', ['only' => ['create']]);
    }

    public function index()
    {
        $fches = F04che28::all();
        return view('backend.labs.water_tests.f04che28s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.water_tests.f04che28s.create',compact('customers'));
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
            $m = new F04che28;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/wt_f04che28s/analysed_sign');
                $file->move($path, $filename);

                $m->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/wt_f04che28s/checked_sign');
                $file->move($path, $filename);

                $m->checked_sign = $filename;
            }

            $m->job_number = $request->job_number;
            $m->product_name = $request->product_name;
            $m->customer_id = $request->customer_id;
            $m->received_date = $request->received_date;
            $m->initiated_date = $request->initiated_date;
            $m->reported_date = $request->reported_date;
            $m->method = $request->method;
            $m->analysed_name  = $request->analysed_name;
            $m->analysed_date = $request->analysed_date;
            $m->checked_name= $request->checked_name;
            $m->checked_date = $request->checked_date;
            $m->save();

            if($m)
            {
                for($i=0;$i<count($request['data']);$i++)
                {
                    $fagar = new F04che28Test;
                    $fagar->f04che28_id = $m->id;
                    $fagar->data = $request['data'][$i];
                    $fagar->test1 = $request['test1'][$i];
                    $fagar->test2 = $request['test2'][$i];
                    $fagar->save();
                }

                $m_finance = new F04che28Finance;
                $m_finance->f04che28_id = $m->id;
                $m_finance->save();

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
        $che = F04che28::with('customer')->find($id);
        $che_tests = F04che28Test::where('f04che28_id',$id)->get();
        return view('backend.labs.water_tests.f04che28s.detail',compact('che','che_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = F04che28::find($id);
        $che_tests = F04che28Test::where('f04che28_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.water_tests.f04che28s.edit',compact('che','che_tests','customers'));
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
            $che = F04che28::find($id);
            if($che->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/wt_f04che28s/analysed_sign/'.$che->analysed_sign))){

                    unlink('photos/wt_f04che28s/analysed_sign/'.$che->analysed_sign);

                }
            }

            if($che->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/wt_f04che28s/checked_sign/'.$che->checked_sign))){

                    unlink('photos/wt_f04che28s/checked_sign/'.$che->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/wt_f04che28s/analysed_sign');
                $file->move($path, $filename);

                $che->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/wt_f04che28s/checked_sign');
                $file->move($path, $filename);

                $che->checked_sign = $filename;
            }

            $che->job_number = $request->job_number;
            $che->product_name = $request->product_name;
            $che->received_date = $request->received_date;
            $che->initiated_date = $request->initiated_date;
            $che->reported_date = $request->reported_date;
            $che->method = $request->method;
            $che->customer_id = $request->customer_id;
            $che->analysed_name = $request->analysed_name;
            $che->analysed_date = $request->analysed_date;
            $che->checked_name = $request->checked_name;
            $che->checked_date = $request->checked_date;

            $che->save();

            if($che)
            {
                if(isset($request['data']))
                {
                    if(count($request['data']) > 0)
                    {
                        for($i=0;$i<count($request['data']);$i++)
                        {
                            if(isset($request['che_test_id'][$i]))
                            {
                                $additional['data'] = $request['data'][$i];
                                $additional['test1'] = $request['test1'][$i];
                                $additional['test2'] = $request['test2'][$i];
                                $update_additional = F04che28Test::where('id',$request['che_test_id'][$i])
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
        $che = F04che28::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/wt_f04che28s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/wt_f04che28s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/wt_f04che28s/checked_sign/'.$che->checked_sign))){

                unlink('photos/wt_f04che28s/checked_sign/'.$che->checked_sign);

            }
        }

        F04che28::where('id',$id)->delete();
        F04che28Test::where('f04che28_id',$id)->delete();
        F04che28Finance::where('f04che28_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = F04che28::find($id);
        $che_tests = F04che28Test::where('f04che28_id',$id)->get();
        return view('backend.labs.water_tests.f04che28s.print',compact('che','che_tests'));
    }
}
