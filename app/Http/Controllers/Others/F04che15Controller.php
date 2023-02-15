<?php

namespace App\Http\Controllers\Others;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Others\F04che15;
use App\Models\Others\F04che15Test;
use App\Http\Controllers\Controller;
use App\Models\Others\F04che15Finance;

class F04che15Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-04-Che/15', ['only' => ['create']]);
    }

    public function index()
    {
        $f04che15s = F04che15::all();
        return view('backend.labs.others.f04che15s.show',compact('f04che15s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.others.f04che15s.create',compact('customers'));
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
            $m = new F04che15;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_f04che15s/analysed_sign');
                $file->move($path, $filename);

                $m->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_f04che15s/checked_sign');
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
            $m->sample_preparation = $request->sample_preparation;
            $m->sample_weight = $request->sample_weight;
            $m->water_volume = $request->water_volume;
            $m->blending = $request->blending;
            $m->analysed_name = $request->analysed_name;
            $m->analysed_date = $request->analysed_date;
            $m->checked_name = $request->checked_name;
            $m->checked_date = $request->checked_date;
            $m->save();

            if($m)
            {
                for($i=0;$i<count($request['data']);$i++)
                {
                    $fagar = new F04che15Test;
                    $fagar->f04che15_id = $m->id;
                    $fagar->data = $request['data'][$i];
                    $fagar->test1 = $request['test1'][$i];
                    $fagar->test2 = $request['test2'][$i];
                    $fagar->save();
                }

                $m_finance = new F04che15Finance;
                $m_finance->f04che15_id = $m->id;
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
        $f04che15 = F04che15::with('customer')->find($id);
        $fts = F04che15Test::where('f04che15_id',$id)->get();
        return view('backend.labs.others.f04che15s.detail',compact('f04che15','fts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $f04che15 = F04che15::find($id);
        $fts = F04che15Test::where('f04che15_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.others.f04che15s.edit',compact('f04che15','fts','customers'));
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
            $m = F04che15::find($id);

            if($m->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/other_f04che15s/analysed_sign/'.$m->analysed_sign))){

                    unlink('photos/other_f04che15s/analysed_sign/'.$m->analysed_sign);

                }
            }

            if($m->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/other_f04che15s/checked_sign/'.$m->checked_sign))){

                    unlink('photos/other_f04che15s/checked_sign/'.$m->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_f04che15s/analysed_sign');
                $file->move($path, $filename);

                $m->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_f04che15s/checked_sign');
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
            $m->sample_preparation = $request->sample_preparation;
            $m->sample_weight = $request->sample_weight;
            $m->water_volume = $request->water_volume;
            $m->blending = $request->blending;
            $m->analysed_name = $request->analysed_name;
            $m->analysed_date = $request->analysed_date;
            $m->checked_name = $request->checked_name;
            $m->checked_date = $request->checked_date;
            $m->save();

            if($m)
            {
                if(isset($request['data']))
                {
                    if(count($request['data']) > 0)
                    {
                        for($i=0;$i<count($request['data']);$i++)
                        {
                            if(isset($request['ft_id'][$i]))
                            {
                                $additional['data'] = $request['data'][$i];
                                $additional['test1'] = $request['test1'][$i];
                                $additional['test2'] = $request['test2'][$i];
                                $update_additional = F04che15Test::where('id',$request['ft_id'][$i])
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
        $m = F04che15::find($id);

        if($m->analysed_sign != null){
            if(file_exists(public_path('photos/other_f04che15s/analysed_sign/'.$m->analysed_sign))){

                unlink('photos/other_f04che15s/analysed_sign/'.$m->analysed_sign);

            }
        }

        if($m->checked_sign != null){
            if(file_exists(public_path('photos/other_f04che15s/checked_sign/'.$m->checked_sign))){

                unlink('photos/other_f04che15s/checked_sign/'.$m->checked_sign);

            }
        }

        F04che15::where('id',$id)->delete();
        F04che15Test::where('f04che15_id',$id)->delete();
        F04che15Finance::where('f04che15_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $f04che15 = F04che15::find($id);
        $fts = F04che15Test::where('f04che15_id',$id)->get();
        return view('backend.labs.others.f04che15s.print',compact('f04che15','fts'));
    }
}
