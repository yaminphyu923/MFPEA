<?php

namespace App\Http\Controllers\Others;

use Exception;
use App\Models\Customer;
use App\Models\Others\F05;
use Illuminate\Http\Request;
use App\Models\Others\F05Test;
use App\Models\Others\F05Finance;
use App\Http\Controllers\Controller;

class F05Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-CAR-05-01(Other Test)', ['only' => ['create']]);
    }

    public function index()
    {
        $f05s = F05::all();
        return view('backend.labs.others.f05s.show',compact('f05s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.others.f05s.create',compact('customers'));
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
            $f05 = new F05;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_f05s');
                $file->move($path, $filename);

                $f05->sign = $filename;
            }

            $f05->job_number = $request->job_number;
            $f05->report_no = $request->report_no;
            $f05->issue_date = $request->issue_date;
            $f05->analysis_date = $request->analysis_date;
            $f05->results = $request->results;
            $f05->customer_id = $request->customer_id;
            $f05->remarks = $request->remarks;
            $f05->name = $request->name;
            $f05->position = $request->position;
            $f05->check1 = $request->check1;
            $f05->check2 = $request->check2;

            $f05->save();

            if($f05)
            {
                for($i=0;$i<count($request['test_parameter']);$i++)
                {
                    $test = new F05Test;
                    $test->f05_id = $f05->id;
                    $test->test_parameter = $request['test_parameter'][$i];
                    $test->method = $request['method'][$i];
                    $test->result = $request['result'][$i];
                    $test->save();
                }

                $mar_finance = new F05Finance;
                $mar_finance->f05_id = $f05->id;
                $mar_finance->save();

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
        $f05 = F05::with('customer')->find($id);
        $f05_tests = F05Test::where('f05_id',$id)->get();
        return view('backend.labs.others.f05s.detail',compact('f05','f05_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $f05 = F05::find($id);
        $f05_tests = F05Test::where('f05_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.others.f05s.edit',compact('f05','f05_tests','customers'));
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
            $f05 = F05::find($id);

            if($f05->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/other_f05s/'.$f05->sign))){

                    unlink('photos/other_f05s/'.$f05->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_f05s');
                $file->move($path, $filename);

                $f05->sign = $filename;
            }

            $f05->job_number = $request->job_number;
            $f05->report_no = $request->report_no;
            $f05->issue_date = $request->issue_date;
            $f05->analysis_date = $request->analysis_date;
            $f05->results = $request->results;
            $f05->customer_id = $request->customer_id;
            $f05->remarks = $request->remarks;
            $f05->name = $request->name;
            $f05->position = $request->position;
            $f05->check1 = $request->check1;
            $f05->check2 = $request->check2;
            $f05->save();

            if($f05)
            {
                if(isset($request['test_parameter']))
                {
                    if(count($request['test_parameter']) > 0)
                    {
                        for($i=0;$i<count($request['test_parameter']);$i++)
                        {
                            if(isset($request['f05_test_id'][$i]))
                            {
                                $additional['test_parameter'] = $request['test_parameter'][$i];
                                $additional['method'] = $request['method'][$i];
                                $additional['result'] = $request['result'][$i];
                                $update_additional = F05Test::where('id',$request['f05_test_id'][$i])
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
        $f05 = F05::find($id);

        if($f05->sign != null){
            if(file_exists(public_path('photos/other_f05s/'.$f05->sign))){

                unlink('photos/other_f05s/'.$f05->sign);

            }
        }

        F05Test::where('f05_id',$id)->delete();
        F05::where('id',$id)->delete();
        F05Finance::where('f05_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $f05 = F05::find($id);
        $f05_tests = F05Test::where('f05_id',$id)->get();
        return view('backend.labs.others.f05s.print',compact('f05','f05_tests'));
    }
}
