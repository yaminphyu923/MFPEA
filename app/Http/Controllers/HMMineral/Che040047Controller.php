<?php

namespace App\Http\Controllers\HMMineral;

use Exception;
use App\Models\Customer;
use App\Models\HMMChe040047;
use Illuminate\Http\Request;
use App\Models\HMMineralMethod;
use App\Models\HMMChe040047Test;
use App\Http\Controllers\Controller;
use App\Models\Finances\HMMChe040047Finance;

class Che040047Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/47', ['only' => ['create']]);
    }

    public function index()
    {
        $ches = HMMChe040047::with('method')->get();
        return view('backend.labs.hmminerals.che040047s.show',compact('ches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $methods = HMMineralMethod::all();
        $customers = Customer::all();
        return view('backend.labs.hmminerals.che040047s.create',compact('methods','customers'));
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
            $che = new HMMChe040047;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/hmm_che040047s/analysed_sign');
                $file->move($path, $filename);

                $che->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/hmm_che040047s/checked_sign');
                $file->move($path, $filename);

                $che->checked_sign = $filename;
            }

            $che->job_number = $request->job_number;
            $che->sample_name = $request->sample_name;
            $che->customer_id = $request->customer_id;
            $che->received_date = $request->received_date;
            $che->initiated_date = $request->initiated_date;
            $che->reported_date = $request->reported_date;
            $che->method_id = $request->method_id;
            $che->weight = $request->weight;
            $che->weight_1 = $request->weight_1;
            $che->weight_2 = $request->weight_2;
            $che->nitric_volume = $request->nitric_volume;
            $che->nitric_volume_1 = $request->nitric_volume_1;
            $che->nitric_volume_2 = $request->nitric_volume_2;
            $che->hydrogen_volume = $request->hydrogen_volume;
            $che->hydrogen_volume_1 = $request->hydrogen_volume_1;
            $che->hydrogen_volume_2 = $request->hydrogen_volume_2;
            $che->volume = $request->volume;
            $che->volume_1 = $request->volume_1;
            $che->volume_2 = $request->volume_2;
            $che->df = $request->df;
            $che->df_1 = $request->df_1;
            $che->df_2 = $request->df_2;
            $che->sd = $request->sd;
            $che->sd_1 = $request->sd_1;
            $che->sd_2 = $request->sd_2;
            $che->concentration = $request->concentration;
            $che->concentration_1 = $request->concentration_1;
            $che->concentration_2 = $request->concentration_2;
            $che->reagent = $request->reagent;
            $che->reagent_1 = $request->reagent_1;
            $che->reagent_2 = $request->reagent_2;
            $che->real_concentration = $request->real_concentration;
            $che->real_concentration_1 = $request->real_concentration_1;
            $che->real_concentration_2 = $request->real_concentration_2;
            $che->hg = $request->hg;
            $che->hg_1 = $request->hg_1;
            $che->hg_2 = $request->hg_2;
            // $che->remark = $request->remark;
            $che->analysed_date = $request->analysed_date;
            $che->analysed_name = $request->analysed_name;
            $che->checked_date = $request->checked_date;
            $che->checked_name = $request->checked_name;
            $che->save();

            if($che)
            {
                // for($i=0;$i<count($request['test_parameter']);$i++)
                // {
                //     $test = new HMMChe040047Test;
                //     $test->hmm_che040047_id = $che->id;
                //     $test->test_parameter = $request['test_parameter'][$i];
                //     $test->first_test = $request['first_test'][$i];
                //     $test->sec_test = $request['sec_test'][$i];
                //     $test->save();
                // }

                $che_finance = new HMMChe040047Finance;
                $che_finance->hmm_che040047_id = $che->id;
                $che_finance->save();

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
        $che = HMMChe040047::with('method','customer')->find($id);
        $methods = HMMineralMethod::all();
        $che_tests = HMMChe040047Test::where('hmm_che040047_id',$id)->get();
        return view('backend.labs.hmminerals.che040047s.detail',compact('che','methods','che_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = HMMChe040047::with('method')->find($id);
        $methods = HMMineralMethod::all();
        $che_tests = HMMChe040047Test::where('hmm_che040047_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.hmminerals.che040047s.edit',compact('che','methods','che_tests','customers'));
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
            $che = HMMChe040047::find($id);
            if($che->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/hmm_che040047s/analysed_sign/'.$che->analysed_sign))){

                    unlink('photos/hmm_che040047s/analysed_sign/'.$che->analysed_sign);

                }
            }

            if($che->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/hmm_che040047s/checked_sign/'.$che->checked_sign))){

                    unlink('photos/hmm_che040047s/checked_sign/'.$che->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/hmm_che040047s/analysed_sign');
                $file->move($path, $filename);

                $che->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/hmm_che040047s/checked_sign');
                $file->move($path, $filename);

                $che->checked_sign = $filename;
            }

            $che->job_number = $request->job_number;
            $che->sample_name = $request->sample_name;
            // $che->customer_id = $request->customer_id;
            $che->received_date = $request->received_date;
            $che->initiated_date = $request->initiated_date;
            $che->reported_date = $request->reported_date;
            $che->method_id = $request->method_id;
            $che->weight = $request->weight;
            $che->weight_1 = $request->weight_1;
            $che->weight_2 = $request->weight_2;
            $che->nitric_volume = $request->nitric_volume;
            $che->nitric_volume_1 = $request->nitric_volume_1;
            $che->nitric_volume_2 = $request->nitric_volume_2;
            $che->hydrogen_volume = $request->hydrogen_volume;
            $che->hydrogen_volume_1 = $request->hydrogen_volume_1;
            $che->hydrogen_volume_2 = $request->hydrogen_volume_2;
            $che->volume = $request->volume;
            $che->volume_1 = $request->volume_1;
            $che->volume_2 = $request->volume_2;
            $che->df = $request->df;
            $che->df_1 = $request->df_1;
            $che->df_2 = $request->df_2;
            $che->sd = $request->sd;
            $che->sd_1 = $request->sd_1;
            $che->sd_2 = $request->sd_2;
            $che->concentration = $request->concentration;
            $che->concentration_1 = $request->concentration_1;
            $che->concentration_2 = $request->concentration_2;
            $che->reagent = $request->reagent;
            $che->reagent_1 = $request->reagent_1;
            $che->reagent_2 = $request->reagent_2;
            $che->real_concentration = $request->real_concentration;
            $che->real_concentration_1 = $request->real_concentration_1;
            $che->real_concentration_2 = $request->real_concentration_2;
            $che->hg = $request->hg;
            $che->hg_1 = $request->hg_1;
            $che->hg_2 = $request->hg_2;
            // $che->remark = $request->remark;
            $che->analysed_date = $request->analysed_date;
            $che->analysed_name = $request->analysed_name;
            $che->checked_date = $request->checked_date;
            $che->checked_name = $request->checked_name;
            $che->save();

            // if($che)
            // {
            //     if(isset($request['test_parameter']))
            //     {
            //         if(count($request['test_parameter']) > 0)
            //         {
            //             for($i=0;$i<count($request['test_parameter']);$i++)
            //             {
            //                 if(isset($request['che_test_id'][$i]))
            //                 {
            //                     $additional['test_parameter'] = $request['test_parameter'][$i];
            //                     $additional['first_test'] = $request['first_test'][$i];
            //                     $additional['sec_test'] = $request['sec_test'][$i];
            //                     $update_additional = HMMChe040047Test::where('id',$request['che_test_id'][$i])
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
        $che = HMMChe040047::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/hmm_che040047s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/hmm_che040047s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/hmm_che040047s/checked_sign/'.$che->checked_sign))){

                unlink('photos/hmm_che040047s/checked_sign/'.$che->checked_sign);

            }
        }

        HMMChe040047::where('id',$id)->delete();
        HMMChe040047Test::where('hmm_che040047_id',$id)->delete();
        HMMChe040047Finance::where('hmm_che040047_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = HMMChe040047::with('method')->find($id);
        $methods = HMMineralMethod::all();
        $che_tests = HMMChe040047Test::where('hmm_che040047_id',$id)->get();
        return view('backend.labs.hmminerals.che040047s.print',compact('che','methods','che_tests'));
    }
}
