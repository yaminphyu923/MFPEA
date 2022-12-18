<?php

namespace App\Http\Controllers\HMMineral;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\HMMCar0500Test;
use App\Models\HMMineralCar0500;
use App\Http\Controllers\Controller;
use App\Models\Finances\HMMCar0500Finance;

class Car0500Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-CAR-05-00', ['only' => ['create']]);
    }

    public function index()
    {
        $car0500s = HMMineralCar0500::all();
        return view('backend.labs.hmminerals.car0500s.show',compact('car0500s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.hmminerals.car0500s.create');
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
            $car0500 = new HMMineralCar0500;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/hmm_car0500s');
                $file->move($path, $filename);

                $car0500->sign = $filename;
            }

            $car0500->job_number = $request->job_number;
            $car0500->report_number = $request->report_number;
            $car0500->customer_id = $request->customer_id;
            $car0500->sample_name = $request->sample_name;
            $car0500->received_date = $request->received_date;
            $car0500->analysis_date = $request->analysis_date;
            $car0500->issue_date = $request->issue_date;
            $car0500->result = $request->result;
            $car0500->as_para = $request->as_para;
            $car0500->as_method = $request->as_method;
            $car0500->as_result = $request->as_result;
            $car0500->as_unit = $request->as_unit;
            $car0500->as_limit = $request->as_limit;
            $car0500->ca_para = $request->ca_para;
            $car0500->ca_method = $request->ca_method;
            $car0500->ca_result = $request->ca_result;
            $car0500->ca_unit = $request->ca_unit;
            $car0500->ca_limit = $request->ca_limit;
            $car0500->cd_para = $request->cd_para;
            $car0500->cd_method = $request->cd_method;
            $car0500->cd_result = $request->cd_result;
            $car0500->cd_unit = $request->cd_unit;
            $car0500->cd_limit = $request->cd_limit;
            $car0500->cr_para = $request->cr_para;
            $car0500->cr_method = $request->cr_method;
            $car0500->cr_result = $request->cr_result;
            $car0500->cr_unit = $request->cr_unit;
            $car0500->cr_limit = $request->cr_limit;
            $car0500->cu_para = $request->cu_para;
            $car0500->cu_method = $request->cu_method;
            $car0500->cu_result = $request->cu_result;
            $car0500->cu_unit = $request->cu_unit;
            $car0500->cu_limit = $request->cu_limit;
            $car0500->fe_para = $request->fe_para;
            $car0500->fe_method = $request->fe_method;
            $car0500->fe_result = $request->fe_result;
            $car0500->fe_unit = $request->fe_unit;
            $car0500->fe_limit = $request->fe_limit;
            $car0500->pb_para = $request->pb_para;
            $car0500->pb_method = $request->pb_method;
            $car0500->pb_result = $request->pb_result;
            $car0500->pb_unit = $request->pb_unit;
            $car0500->pb_limit = $request->pb_limit;
            $car0500->mg_para = $request->mg_para;
            $car0500->mg_method = $request->mg_method;
            $car0500->mg_result = $request->mg_result;
            $car0500->mg_unit = $request->mg_unit;
            $car0500->mg_limit = $request->mg_limit;
            $car0500->hg_para = $request->hg_para;
            $car0500->hg_method = $request->hg_method;
            $car0500->hg_result = $request->hg_result;
            $car0500->hg_unit = $request->hg_unit;
            $car0500->hg_limit = $request->hg_limit;
            $car0500->k_para = $request->k_para;
            $car0500->k_method = $request->k_method;
            $car0500->k_result = $request->k_result;
            $car0500->k_unit = $request->k_unit;
            $car0500->k_limit = $request->k_limit;
            $car0500->se_para = $request->se_para;
            $car0500->se_method = $request->se_method;
            $car0500->se_result = $request->se_result;
            $car0500->se_unit = $request->se_unit;
            $car0500->se_limit = $request->se_limit;
            $car0500->na_para = $request->na_para;
            $car0500->na_method = $request->na_method;
            $car0500->na_result = $request->na_result;
            $car0500->na_unit = $request->na_unit;
            $car0500->na_limit = $request->na_limit;
            $car0500->zn_para = $request->zn_para;
            $car0500->zn_method = $request->zn_method;
            $car0500->zn_result = $request->zn_result;
            $car0500->zn_unit = $request->zn_unit;
            $car0500->zn_limit = $request->zn_limit;
            $car0500->remark = $request->remark;
            $car0500->name = $request->name;
            $car0500->position = $request->position;
            $car0500->checkby1 = $request->checkby1;
            $car0500->checkby2 = $request->checkby2;
            $car0500->save();

            if($car0500)
            {
                // for($i=0;$i<count($request['test_parameter']);$i++)
                // {
                //     $test = new HMMCar0500Test;
                //     $test->hmm_car0500_id = $car0500->id;
                //     $test->test_parameter = $request['test_parameter'][$i];
                //     $test->test_method = $request['test_method'][$i];
                //     $test->test_result = $request['test_result'][$i];
                //     $test->unit = $request['unit'][$i];
                //     $test->detection_limit = $request['detection_limit'][$i];
                //     $test->save();
                // }

                $car_finance = new HMMCar0500Finance;
                $car_finance->hmm_car0500_id = $car0500->id;
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
        $car = HMMineralCar0500::find($id);
        return view('backend.labs.hmminerals.car0500s.detail',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = HMMineralCar0500::find($id);
        return view('backend.labs.hmminerals.car0500s.edit',compact('car'));
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
            $car0500 = HMMineralCar0500::find($id);

            if($car0500->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/hmm_car0500s/'.$car0500->sign))){

                    unlink('photos/hmm_car0500s/'.$car0500->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/hmm_car0500s');
                $file->move($path, $filename);

                $car0500->sign = $filename;
            }

            $car0500->job_number = $request->job_number;
            $car0500->report_number = $request->report_number;
            $car0500->customer_id = $request->customer_id;
            $car0500->sample_name = $request->sample_name;
            $car0500->received_date = $request->received_date;
            $car0500->analysis_date = $request->analysis_date;
            $car0500->issue_date = $request->issue_date;
            $car0500->result = $request->result;
            $car0500->as_para = $request->as_para;
            $car0500->as_method = $request->as_method;
            $car0500->as_result = $request->as_result;
            $car0500->as_unit = $request->as_unit;
            $car0500->as_limit = $request->as_limit;
            $car0500->ca_para = $request->ca_para;
            $car0500->ca_method = $request->ca_method;
            $car0500->ca_result = $request->ca_result;
            $car0500->ca_unit = $request->ca_unit;
            $car0500->ca_limit = $request->ca_limit;
            $car0500->cd_para = $request->cd_para;
            $car0500->cd_method = $request->cd_method;
            $car0500->cd_result = $request->cd_result;
            $car0500->cd_unit = $request->cd_unit;
            $car0500->cd_limit = $request->cd_limit;
            $car0500->cr_para = $request->cr_para;
            $car0500->cr_method = $request->cr_method;
            $car0500->cr_result = $request->cr_result;
            $car0500->cr_unit = $request->cr_unit;
            $car0500->cr_limit = $request->cr_limit;
            $car0500->cu_para = $request->cu_para;
            $car0500->cu_method = $request->cu_method;
            $car0500->cu_result = $request->cu_result;
            $car0500->cu_unit = $request->cu_unit;
            $car0500->cu_limit = $request->cu_limit;
            $car0500->fe_para = $request->fe_para;
            $car0500->fe_method = $request->fe_method;
            $car0500->fe_result = $request->fe_result;
            $car0500->fe_unit = $request->fe_unit;
            $car0500->fe_limit = $request->fe_limit;
            $car0500->pb_para = $request->pb_para;
            $car0500->pb_method = $request->pb_method;
            $car0500->pb_result = $request->pb_result;
            $car0500->pb_unit = $request->pb_unit;
            $car0500->pb_limit = $request->pb_limit;
            $car0500->mg_para = $request->mg_para;
            $car0500->mg_method = $request->mg_method;
            $car0500->mg_result = $request->mg_result;
            $car0500->mg_unit = $request->mg_unit;
            $car0500->mg_limit = $request->mg_limit;
            $car0500->hg_para = $request->hg_para;
            $car0500->hg_method = $request->hg_method;
            $car0500->hg_result = $request->hg_result;
            $car0500->hg_unit = $request->hg_unit;
            $car0500->hg_limit = $request->hg_limit;
            $car0500->k_para = $request->k_para;
            $car0500->k_method = $request->k_method;
            $car0500->k_result = $request->k_result;
            $car0500->k_unit = $request->k_unit;
            $car0500->k_limit = $request->k_limit;
            $car0500->se_para = $request->se_para;
            $car0500->se_method = $request->se_method;
            $car0500->se_result = $request->se_result;
            $car0500->se_unit = $request->se_unit;
            $car0500->se_limit = $request->se_limit;
            $car0500->na_para = $request->na_para;
            $car0500->na_method = $request->na_method;
            $car0500->na_result = $request->na_result;
            $car0500->na_unit = $request->na_unit;
            $car0500->na_limit = $request->na_limit;
            $car0500->zn_para = $request->zn_para;
            $car0500->zn_method = $request->zn_method;
            $car0500->zn_result = $request->zn_result;
            $car0500->zn_unit = $request->zn_unit;
            $car0500->zn_limit = $request->zn_limit;
            $car0500->remark = $request->remark;
            $car0500->name = $request->name;
            $car0500->position = $request->position;
            $car0500->checkby1 = $request->checkby1;
            $car0500->checkby2 = $request->checkby2;
            $car0500->save();

            // if($car0500)
            // {
            //     if(isset($request['test_parameter']))
            //     {
            //         if(count($request['test_parameter']) > 0)
            //         {
            //             for($i=0;$i<count($request['test_parameter']);$i++)
            //             {
            //                 if(isset($request['car_test_id'][$i]))
            //                 {
            //                     $additional['test_parameter'] = $request['test_parameter'][$i];
            //                     $additional['test_method'] = $request['test_method'][$i];
            //                     $additional['test_result'] = $request['test_result'][$i];
            //                     $additional['unit'] = $request['unit'][$i];
            //                     $additional['detection_limit'] = $request['detection_limit'][$i];
            //                     $update_additional = HMMCar0500Test::where('id',$request['car_test_id'][$i])
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
        $car = HMMineralCar0500::find($id);
        if($car->sign != null){
            if(file_exists(public_path('photos/hmm_car0500s/'.$car->sign))){

                unlink('photos/hmm_car0500s/'.$car->sign);

            }
        }

        HMMineralCar0500::where('id',$id)->delete();

        // HMMCar0500Test::where('hmm_car0500_id',$id)->delete();

        HMMCar0500Finance::where('hmm_car0500_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $car = HMMineralCar0500::find($id);
        // $car_tests = HMMCar0500Test::where('hmm_car0500_id',$id)->get();
        return view('backend.labs.hmminerals.car0500s.print',compact('car'));
    }
}
