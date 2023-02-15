<?php

namespace App\Http\Controllers\Oils;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Oils\F04che07;
use App\Models\Oils\F04che07Test;
use App\Http\Controllers\Controller;
use App\Models\Oils\F04che07Finance;

class F04che07Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-04-Che/07', ['only' => ['create']]);
    }

    public function index()
    {
        $fches = F04che07::all();
        return view('backend.labs.oils.f04che07s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.oils.f04che07s.create',compact('customers'));
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
            $che = new F04che07;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/oil_f04che07s/analysed_sign');
                $file->move($path, $filename);

                $che->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/oil_f04che07s/checked_sign');
                $file->move($path, $filename);

                $che->checked_sign = $filename;
            }

            $che->job_number = $request->job_number;
            $che->product_name = $request->product_name;
            $che->customer_id = $request->customer_id;
            $che->received_date = $request->received_date;
            $che->initiated_date = $request->initiated_date;
            $che->reported_date = $request->reported_date;
            $che->method = $request->method;
            $che->analysed_name  = $request->analysed_name;
            $che->analysed_date = $request->analysed_date;
            $che->checked_name = $request->checked_name;
            $che->checked_date = $request->checked_date;
            $che->save();

            if($che)
            {
                for($i=0;$i<count($request['data']);$i++)
                {
                    $ftest = new F04che07Test;
                    $ftest->f04che07_id = $che->id;
                    $ftest->data = $request['data'][$i];
                    $ftest->test1 = $request['test1'][$i];
                    $ftest->test2 = $request['test2'][$i];
                    $ftest->save();
                }

                $m_finance = new F04che07Finance;
                $m_finance->f04che07_id = $che->id;
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
        $che = F04che07::with('customer')->find($id);
        $che_tests = F04che07Test::where('f04che07_id',$id)->get();
        return view('backend.labs.oils.f04che07s.detail',compact('che','che_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = F04che07::find($id);
        $che_tests = F04che07Test::where('f04che07_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.oils.f04che07s.edit',compact('che','che_tests','customers'));
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
            $che = F04che07::find($id);
            if($che->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/oil_f04che07s/analysed_sign/'.$che->analysed_sign))){

                    unlink('photos/oil_f04che07s/analysed_sign/'.$che->analysed_sign);

                }
            }

            if($che->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/oil_f04che07s/checked_sign/'.$che->checked_sign))){

                    unlink('photos/oil_f04che07s/checked_sign/'.$che->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/oil_f04che07s/analysed_sign');
                $file->move($path, $filename);

                $che->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/oil_f04che07s/checked_sign');
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
                                $update_additional = F04che07Test::where('id',$request['che_test_id'][$i])
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
        $che = F04che07::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/oil_f04che07s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/oil_f04che07s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/oil_f04che07s/checked_sign/'.$che->checked_sign))){

                unlink('photos/oil_f04che07s/checked_sign/'.$che->checked_sign);

            }
        }

        F04che07::where('id',$id)->delete();
        F04che07Test::where('f04che07_id',$id)->delete();
        F04che07Finance::where('f04che07_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = F04che07::find($id);
        $che_tests = F04che07Test::where('f04che07_id',$id)->get();
        return view('backend.labs.oils.f04che07s.print',compact('che','che_tests'));
    }
}
