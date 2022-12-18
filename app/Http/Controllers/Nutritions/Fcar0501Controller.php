<?php

namespace App\Http\Controllers\Nutritions;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Nutritions\Fcar0501;
use App\Http\Controllers\Controller;
use App\Models\Nutritions\Fcar0501Test;
use App\Models\Nutritions\Fcar0501Finance;

class Fcar0501Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-CAR-05-01', ['only' => ['create']]);
    }

    public function index()
    {
        $fcars = Fcar0501::all();
        return view('backend.labs.nutritions.fcar0501s.show',compact('fcars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.nutritions.fcar0501s.create',compact('customers'));
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
            $mar = new Fcar0501;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fcar0501s');
                $file->move($path, $filename);

                $mar->sign = $filename;
            }

            $mar->job_number = $request->job_number;
            $mar->report_no = $request->report_no;
            $mar->sample_name = $request->sample_name;
            $mar->received_date = $request->received_date;
            $mar->analysis_date = $request->analysis_date;
            $mar->issue_date = $request->issue_date;
            $mar->results = $request->results;
            $mar->customer_id = $request->customer_id;
            $mar->remark = $request->remark;
            $mar->name = $request->name;
            $mar->position = $request->position;
            $mar->check1 = $request->check1;
            $mar->check2 = $request->check2;

            $mar->save();

            if($mar)
            {
                // for($i=0;$i<count($request['test_parameter']);$i++)
                // {
                //     $test = new Fcar0501Test;
                //     $test->fcar0501_id = $mar->id;
                //     $test->test_parameter = $request['test_parameter'][$i];
                //     $test->method = $request['method'][$i];
                //     $test->result = $request['result'][$i];
                //     $test->save();
                // }

                $mar_finance = new Fcar0501Finance;
                $mar_finance->fcar0501_id = $mar->id;
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
        $car = Fcar0501::with('customer')->find($id);
        $car_tests = FCar0501Test::where('fcar0501_id',$id)->get();
        return view('backend.labs.nutritions.fcar0501s.detail',compact('car','car_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Fcar0501::find($id);
        $car_tests = Fcar0501Test::where('fcar0501_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.nutritions.fcar0501s.edit',compact('car','car_tests','customers'));
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
            $mar = Fcar0501::find($id);

            if($mar->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/na_fcar0501s/'.$mar->sign))){

                    unlink('photos/na_fcar0501s/'.$mar->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fcar0501s');
                $file->move($path, $filename);

                $mar->sign = $filename;
            }

            $mar->job_number = $request->job_number;
            $mar->report_no = $request->report_no;
            $mar->sample_name = $request->sample_name;
            $mar->received_date = $request->received_date;
            $mar->analysis_date = $request->analysis_date;
            $mar->issue_date = $request->issue_date;
            $mar->results = $request->results;
            $mar->customer_id = $request->customer_id;
            $mar->name = $request->name;
            $mar->position = $request->position;
            $mar->check1 = $request->check1;
            $mar->check2 = $request->check2;
            $mar->remark = $request->remark;
            $mar->save();

            if($mar)
            {
                if(isset($request['test_parameter']))
                {
                    if(count($request['test_parameter']) > 0)
                    {
                        for($i=0;$i<count($request['test_parameter']);$i++)
                        {
                            if(isset($request['mar_test_id'][$i]))
                            {
                                $additional['test_parameter'] = $request['test_parameter'][$i];
                                $additional['method'] = $request['method'][$i];
                                $additional['result'] = $request['result'][$i];
                                $update_additional = Fcar0501Test::where('id',$request['mar_test_id'][$i])
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
        $mar = Fcar0501::find($id);

        if($mar->sign != null){
            if(file_exists(public_path('photos/na_fcar0501s/'.$mar->sign))){

                unlink('photos/na_fcar0501s/'.$mar->sign);

            }
        }

        Fcar0501Test::where('fcar0501_id',$id)->delete();
        Fcar0501::where('id',$id)->delete();
        Fcar0501Finance::where('fcar0501_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $car = Fcar0501::find($id);
        $car_tests = Fcar0501Test::where('fcar0501_id',$id)->get();
        return view('backend.labs.nutritions.fcar0501s.print',compact('car','car_tests'));
    }
}
