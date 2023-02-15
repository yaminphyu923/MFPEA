<?php

namespace App\Http\Controllers\Nutritions;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Nutritions\F04che02;
use App\Http\Controllers\Controller;
use App\Models\Nutritions\F04che02Test;
use App\Models\Nutritions\F04che02Finance;

class F04che02Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-04-Che/02', ['only' => ['create']]);
    }

    public function index()
    {
        $fches = F04che02::all();
        return view('backend.labs.nutritions.f04che02s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.nutritions.f04che02s.create',compact('customers'));
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
            $m = new F04che02;

            if($request->file("analyzed_sign")) {
                $file=$request->file("analyzed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_f04che02s/analyzed_sign');
                $file->move($path, $filename);

                $m->analyzed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_f04che02s/checked_sign');
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
            $m->analyzed_by = $request->analyzed_by;
            $m->analyzed_date = $request->analyzed_date;
            $m->checked_by = $request->checked_by;
            $m->checked_date = $request->checked_date;
            $m->save();

            if($m)
            {
                for($i=0;$i<count($request['data']);$i++)
                {
                    $fagar = new F04che02Test;
                    $fagar->f04che02_id = $m->id;
                    $fagar->data = $request['data'][$i];
                    $fagar->test1 = $request['test1'][$i];
                    $fagar->test2 = $request['test2'][$i];
                    $fagar->save();
                }

                $m_finance = new F04che02Finance;
                $m_finance->f04che02_id = $m->id;
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
        $che = F04che02::with('customer')->find($id);
        $che_tests = F04che02Test::where('f04che02_id',$id)->get();
        return view('backend.labs.nutritions.f04che02s.detail',compact('che','che_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = F04che02::find($id);
        $che_tests = F04che02Test::where('f04che02_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.nutritions.f04che02s.edit',compact('che','che_tests','customers'));
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
            $che = F04che02::find($id);
            if($che->analyzed_sign != null && $request->file("analyzed_sign")){
                if(file_exists(public_path('photos/na_f04che02s/analyzed_sign/'.$che->analyzed_sign))){

                    unlink('photos/na_f04che02s/analyzed_sign/'.$che->analyzed_sign);

                }
            }

            if($che->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/na_f04che02s/checked_sign/'.$che->checked_sign))){

                    unlink('photos/na_f04che02s/checked_sign/'.$che->checked_sign);

                }
            }

            if($request->file("analyzed_sign")) {
                $file=$request->file("analyzed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_f04che02s/analyzed_sign');
                $file->move($path, $filename);

                $che->analyzed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_f04che02s/checked_sign');
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
            $che->analyzed_by = $request->analyzed_by;
            $che->analyzed_date = $request->analyzed_date;
            $che->checked_by = $request->checked_by;
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
                                $update_additional = F04che02Test::where('id',$request['che_test_id'][$i])
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
        $che = F04che02::find($id);

        if($che->analyzed_sign != null){
            if(file_exists(public_path('photos/na_f04che02s/analyzed_sign/'.$che->analyzed_sign))){

                unlink('photos/na_f04che02s/analyzed_sign/'.$che->analyzed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/na_f04che02s/checked_sign/'.$che->checked_sign))){

                unlink('photos/na_f04che02s/checked_sign/'.$che->checked_sign);

            }
        }

        F04che02::where('id',$id)->delete();
        F04che02Test::where('f04che02_id',$id)->delete();
        F04che02Finance::where('f04che02_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = F04che02::find($id);
        $che_tests = F04che02Test::where('f04che02_id',$id)->get();
        return view('backend.labs.nutritions.f04che02s.print',compact('che','che_tests'));
    }
}
