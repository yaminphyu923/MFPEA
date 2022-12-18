<?php

namespace App\Http\Controllers\GCAnalysis;

use Exception;
use App\Models\Car0501;
use App\Models\Customer;
use App\Models\Car0501Test;
use Illuminate\Http\Request;
use App\Models\Car0501Finance;
use App\Models\Car0501TestFill;
use App\Http\Controllers\Controller;

class Car0501Controller extends Controller
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
        $car0501s = Car0501::where('status',0)->get();
        return view('backend.labs.gc_analyses.car0501s.show',compact('car0501s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car_tests = Car0501Test::all();
        $customers = Customer::all();
        return view('backend.labs.gc_analyses.car0501s.create',compact('car_tests','customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'academic_year_id' => 'required',
        //     'password' => 'required|required_with:confirm_password|same:confirm_password',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->with('errorForm', $validator->errors()->getMessages())
        //         ->withInput();
        // }

        try {
            $car0501 = new Car0501;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/gc_car0501s');
                $file->move($path, $filename);

                $car0501->sign = $filename;
            }

            $car0501->job_number = $request->job_number;
            $car0501->report_number = $request->report_number;
            $car0501->customer_id = $request->customer_id;
            $car0501->sample_name = $request->sample_name;
            $car0501->received_date = $request->received_date;
            $car0501->analysis_date = $request->analysis_date;
            $car0501->issue_date = $request->issue_date;
            $car0501->result = $request->result;
            $car0501->lauric_12_0_para = $request->lauric_12_0_para;
            $car0501->lauric_12_0_method = $request->lauric_12_0_method;
            $car0501->lauric_12_0_result = $request->lauric_12_0_result;
            $car0501->myristic_14_0_para = $request->myristic_14_0_para;
            $car0501->myristic_14_0_method = $request->myristic_14_0_method;
            $car0501->myristic_14_0_result = $request->myristic_14_0_result;
            $car0501->myristoleic_14_1_para = $request->myristoleic_14_1_para;
            $car0501->myristoleic_14_1_method = $request->myristoleic_14_1_method;
            $car0501->myristoleic_14_1_result = $request->myristoleic_14_1_result;
            $car0501->palmitic_16_0_para = $request->palmitic_16_0_para;
            $car0501->palmitic_16_0_method = $request->palmitic_16_0_method;
            $car0501->palmitic_16_0_result = $request->palmitic_16_0_result;
            $car0501->palmitoleic_16_1_para = $request->palmitoleic_16_1_para;
            $car0501->palmitoleic_16_1_method = $request->palmitoleic_16_1_method;
            $car0501->palmitoleic_16_1_result = $request->palmitoleic_16_1_result;
            $car0501->stearic_18_0_para = $request->stearic_18_0_para;
            $car0501->stearic_18_0_method = $request->stearic_18_0_method;
            $car0501->stearic_18_0_result = $request->stearic_18_0_result;
            $car0501->oleictrans_18_1_para = $request->oleictrans_18_1_para;
            $car0501->oleictrans_18_1_method = $request->oleictrans_18_1_method;
            $car0501->oleictrans_18_1_result = $request->oleictrans_18_1_result;
            $car0501->oleic_18_1_para = $request->oleic_18_1_para;
            $car0501->oleic_18_1_method = $request->oleic_18_1_method;
            $car0501->oleic_18_1_result = $request->oleic_18_1_result;
            $car0501->linoleictrans_18_2_para = $request->linoleictrans_18_2_para;
            $car0501->linoleictrans_18_2_method = $request->linoleictrans_18_2_method;
            $car0501->linoleictrans_18_2_result = $request->linoleictrans_18_2_result;
            $car0501->linoleic_18_2_para = $request->linoleic_18_2_para;
            $car0501->linoleic_18_2_method = $request->linoleic_18_2_method;
            $car0501->linoleic_18_2_result = $request->linoleic_18_2_result;
            $car0501->linoleic_18_3_para = $request->linoleic_18_3_para;
            $car0501->linoleic_18_3_method = $request->linoleic_18_3_method;
            $car0501->linoleic_18_3_result = $request->linoleic_18_3_result;
            $car0501->arachidic_20_0_para = $request->arachidic_20_0_para;
            $car0501->arachidic_20_0_method = $request->arachidic_20_0_method;
            $car0501->arachidic_20_0_result = $request->arachidic_20_0_result;
            $car0501->paullinic_20_1_para = $request->paullinic_20_1_para;
            $car0501->paullinic_20_1_method = $request->paullinic_20_1_method;
            $car0501->paullinic_20_1_result = $request->paullinic_20_1_result;
            $car0501->arachidonic_20_4_para = $request->arachidonic_20_4_para;
            $car0501->arachidonic_20_4_method = $request->arachidonic_20_4_method;
            $car0501->arachidonic_20_4_result = $request->arachidonic_20_4_result;
            $car0501->bchenic_22_0_para = $request->bchenic_22_0_para;
            $car0501->bchenic_22_0_method = $request->bchenic_22_0_method;
            $car0501->bchenic_22_0_result = $request->bchenic_22_0_result;
            $car0501->erucic_22_1_para = $request->erucic_22_1_para;
            $car0501->erucic_22_1_method = $request->erucic_22_1_method;
            $car0501->erucic_22_1_result = $request->erucic_22_1_result;
            $car0501->lignoceric_24_0_para = $request->lignoceric_24_0_para;
            $car0501->lignoceric_24_0_method = $request->lignoceric_24_0_method;
            $car0501->lignoceric_24_0_result = $request->lignoceric_24_0_result;
            $car0501->remark = $request->remark;
            $car0501->name = $request->name;
            $car0501->position = $request->position;
            $car0501->checkby1 = $request->checkby1;
            $car0501->checkby2 = $request->checkby2;
            $car0501->status = $request->status;
            $car0501->save();

            if($car0501)
            {
                // for($i=0;$i<count($request['test_parameter']);$i++)
                // {
                //     $test_fill = new Car0501TestFill;
                //     $test_fill->car0501_id = $car0501->id;
                //     $test_fill->test_parameter = $request['test_parameter'][$i];
                //     $test_fill->test_method = $request['test_method'][$i];
                //     $test_fill->test_result = $request['test_result'][$i];
                //     $test_fill->save();
                // }

                $car_finance = new Car0501Finance;
                $car_finance->car0501_id = $car0501->id;
                $car_finance->status = $request->status;
                $car_finance->save();

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
        $car = Car0501::find($id);
        $car_test_fills = Car0501TestFill::where('car0501_id',$id)->get();
        return view('backend.labs.gc_analyses.car0501s.detail',compact('car','car_test_fills'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car0501::find($id);
        $car_test_fills = Car0501TestFill::where('car0501_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.gc_analyses.car0501s.edit',compact('car','car_test_fills','customers'));
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
            $car0501 = Car0501::find($id);

            if($car0501->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/gc_car0501s/'.$car0501->sign))){

                    unlink('photos/gc_car0501s/'.$car0501->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/gc_car0501s');
                $file->move($path, $filename);

                $car0501->sign = $filename;
            }

            $car0501->job_number = $request->job_number;
            $car0501->report_number = $request->report_number;
            $car0501->customer_id = $request->customer_id;
            $car0501->sample_name = $request->sample_name;
            $car0501->received_date = $request->received_date;
            $car0501->analysis_date = $request->analysis_date;
            $car0501->issue_date = $request->issue_date;
            $car0501->result = $request->result;
            $car0501->lauric_12_0_para = $request->lauric_12_0_para;
            $car0501->lauric_12_0_method = $request->lauric_12_0_method;
            $car0501->lauric_12_0_result = $request->lauric_12_0_result;
            $car0501->myristic_14_0_para = $request->myristic_14_0_para;
            $car0501->myristic_14_0_method = $request->myristic_14_0_method;
            $car0501->myristic_14_0_result = $request->myristic_14_0_result;
            $car0501->myristoleic_14_1_para = $request->myristoleic_14_1_para;
            $car0501->myristoleic_14_1_method = $request->myristoleic_14_1_method;
            $car0501->myristoleic_14_1_result = $request->myristoleic_14_1_result;
            $car0501->palmitic_16_0_para = $request->palmitic_16_0_para;
            $car0501->palmitic_16_0_method = $request->palmitic_16_0_method;
            $car0501->palmitic_16_0_result = $request->palmitic_16_0_result;
            $car0501->palmitoleic_16_1_para = $request->palmitoleic_16_1_para;
            $car0501->palmitoleic_16_1_method = $request->palmitoleic_16_1_method;
            $car0501->palmitoleic_16_1_result = $request->palmitoleic_16_1_result;
            $car0501->stearic_18_0_para = $request->stearic_18_0_para;
            $car0501->stearic_18_0_method = $request->stearic_18_0_method;
            $car0501->stearic_18_0_result = $request->stearic_18_0_result;
            $car0501->oleictrans_18_1_para = $request->oleictrans_18_1_para;
            $car0501->oleictrans_18_1_method = $request->oleictrans_18_1_method;
            $car0501->oleictrans_18_1_result = $request->oleictrans_18_1_result;
            $car0501->oleic_18_1_para = $request->oleic_18_1_para;
            $car0501->oleic_18_1_method = $request->oleic_18_1_method;
            $car0501->oleic_18_1_result = $request->oleic_18_1_result;
            $car0501->linoleictrans_18_2_para = $request->linoleictrans_18_2_para;
            $car0501->linoleictrans_18_2_method = $request->linoleictrans_18_2_method;
            $car0501->linoleictrans_18_2_result = $request->linoleictrans_18_2_result;
            $car0501->linoleic_18_2_para = $request->linoleic_18_2_para;
            $car0501->linoleic_18_2_method = $request->linoleic_18_2_method;
            $car0501->linoleic_18_2_result = $request->linoleic_18_2_result;
            $car0501->linoleic_18_3_para = $request->linoleic_18_3_para;
            $car0501->linoleic_18_3_method = $request->linoleic_18_3_method;
            $car0501->linoleic_18_3_result = $request->linoleic_18_3_result;
            $car0501->arachidic_20_0_para = $request->arachidic_20_0_para;
            $car0501->arachidic_20_0_method = $request->arachidic_20_0_method;
            $car0501->arachidic_20_0_result = $request->arachidic_20_0_result;
            $car0501->paullinic_20_1_para = $request->paullinic_20_1_para;
            $car0501->paullinic_20_1_method = $request->paullinic_20_1_method;
            $car0501->paullinic_20_1_result = $request->paullinic_20_1_result;
            $car0501->arachidonic_20_4_para = $request->arachidonic_20_4_para;
            $car0501->arachidonic_20_4_method = $request->arachidonic_20_4_method;
            $car0501->arachidonic_20_4_result = $request->arachidonic_20_4_result;
            $car0501->bchenic_22_0_para = $request->bchenic_22_0_para;
            $car0501->bchenic_22_0_method = $request->bchenic_22_0_method;
            $car0501->bchenic_22_0_result = $request->bchenic_22_0_result;
            $car0501->erucic_22_1_para = $request->erucic_22_1_para;
            $car0501->erucic_22_1_method = $request->erucic_22_1_method;
            $car0501->erucic_22_1_result = $request->erucic_22_1_result;
            $car0501->lignoceric_24_0_para = $request->lignoceric_24_0_para;
            $car0501->lignoceric_24_0_method = $request->lignoceric_24_0_method;
            $car0501->lignoceric_24_0_result = $request->lignoceric_24_0_result;
            $car0501->remark = $request->remark;
            $car0501->name = $request->name;
            $car0501->position = $request->position;
            $car0501->checkby1 = $request->checkby1;
            $car0501->checkby2 = $request->checkby2;
            $car0501->status = $request->status;
            $car0501->save();

            // if($car0501)
            // {
            //     if(isset($request['test_parameter']))
            //     {
            //         if(count($request['test_parameter']) > 0)
            //         {
            //             for($i=0;$i<count($request['test_parameter']);$i++)
            //             {
            //                 if(isset($request['test_fill_id'][$i]))
            //                 {
            //                     $additional['test_parameter'] = $request['test_parameter'][$i];
            //                     $additional['test_method'] = $request['test_method'][$i];
            //                     $additional['test_result'] = $request['test_result'][$i];
            //                     $update_additional = Car0501TestFill::where('id',$request['test_fill_id'][$i])
            //                                         ->update($additional);
            //                 }

            //             }
            //         }
            //     }


            // }
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
        $car = Car0501::find($id);
        if($car->sign != null){
            if(file_exists(public_path('photos/gc_car0501s/'.$car->sign))){

                unlink('photos/gc_car0501s/'.$car->sign);

            }
        }

        Car0501::where('id',$id)->delete();

        Car0501TestFill::where('car0501_id',$id)->delete();
        Car0501Finance::where('car0501_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function testIncrease()
    {
        $tests = Car0501Test::select('id','test_parameter as test')->get();
        return response()->json([
            'status' => 'success',
            'tests' => $tests,
        ]);
    }

    public function print($id)
    {
        $car = Car0501::find($id);
        $car_test_fills = Car0501TestFill::where('car0501_id',$id)->get();
        return view('backend.labs.gc_analyses.car0501s.print',compact('car','car_test_fills'));
    }

    public function index17()
    {
        $car0501s = Car0501::where('status',1)->get();
        return view('backend.labs.gc_analyses.car0501s_17.show',compact('car0501s'));
    }

    public function create17()
    {
        $car_tests = Car0501Test::all();
        $customers = Customer::all();
        return view('backend.labs.gc_analyses.car0501s_17.create',compact('car_tests','customers'));
    }

    public function show17($id)
    {
        $car = Car0501::find($id);
        $car_test_fills = Car0501TestFill::where('car0501_id',$id)->get();
        return view('backend.labs.gc_analyses.car0501s_17.detail',compact('car','car_test_fills'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit17($id)
    {
        $car = Car0501::find($id);
        $car_test_fills = Car0501TestFill::where('car0501_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.gc_analyses.car0501s_17.edit',compact('car','car_test_fills','customers'));
    }

    public function print17($id)
    {
        $car = Car0501::find($id);
        $car_test_fills = Car0501TestFill::where('car0501_id',$id)->get();
        return view('backend.labs.gc_analyses.car0501s_17.print',compact('car','car_test_fills'));
    }
}
