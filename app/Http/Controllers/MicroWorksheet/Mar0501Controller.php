<?php

namespace App\Http\Controllers\MicroWorksheet;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MicroWorksheets\FMar0501;
use App\Models\MicroWorksheets\FMar0501Test;
use App\Models\MicroWorksheets\FMar0501Finance;

class Mar0501Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:F-MAR-05-01', ['only' => ['create']]);
    }
    public function index()
    {
        $fmar0501s = FMar0501::all();
        return view('backend.labs.micro_worksheets.mar0501s.show',compact('fmar0501s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.labs.micro_worksheets.mar0501s.create');
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
            $mar = new FMar0501;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_mar0501s/sign');
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
            $mar->apc_test = $request->apc_test;
            $mar->apc_method = $request->apc_method;
            $mar->apc_result = $request->apc_result;
            $mar->coliform_test = $request->coliform_test;
            $mar->coliform_method = $request->coliform_method;
            $mar->coliform_result = $request->coliform_result;
            $mar->ecoli_test = $request->ecoli_test;
            $mar->ecoli_method = $request->ecoli_method;
            $mar->ecoli_result = $request->ecoli_result;
            $mar->sta_test = $request->sta_test;
            $mar->sta_method = $request->sta_method;
            $mar->sta_result = $request->sta_result;
            $mar->sal_test = $request->sal_test;
            $mar->sal_method = $request->sal_method;
            $mar->sal_result = $request->sal_result;
            $mar->yeast_test = $request->yeast_test;
            $mar->yeast_method = $request->yeast_method;
            $mar->yeast_result = $request->yeast_result;
            $mar->name = $request->name;
            $mar->position = $request->position;
            $mar->checkby1 = $request->checkby1;
            $mar->checkby2 = $request->checkby2;
            $mar->save();

            if($mar)
            {
                $mar_finance = new FMar0501Finance;
                $mar_finance->f_mar0501_id = $mar->id;
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
        $fmar0501 = FMar0501::find($id);
        return view('backend.labs.micro_worksheets.mar0501s.detail',compact('fmar0501'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fmar0501 = FMar0501::find($id);
        return view('backend.labs.micro_worksheets.mar0501s.edit',compact('fmar0501'));
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
            $mar = FMar0501::find($id);

            if($mar->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/mw_mar0501s/sign/'.$mar->sign))){

                    unlink('photos/mw_mar0501s/sign/'.$mar->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_mar0501s/sign');
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
            $mar->apc_test = $request->apc_test;
            $mar->apc_method = $request->apc_method;
            $mar->apc_result = $request->apc_result;
            $mar->coliform_test = $request->coliform_test;
            $mar->coliform_method = $request->coliform_method;
            $mar->coliform_result = $request->coliform_result;
            $mar->ecoli_test = $request->ecoli_test;
            $mar->ecoli_method = $request->ecoli_method;
            $mar->ecoli_result = $request->ecoli_result;
            $mar->sta_test = $request->sta_test;
            $mar->sta_method = $request->sta_method;
            $mar->sta_result = $request->sta_result;
            $mar->sal_test = $request->sal_test;
            $mar->sal_method = $request->sal_method;
            $mar->sal_result = $request->sal_result;
            $mar->yeast_test = $request->yeast_test;
            $mar->yeast_method = $request->yeast_method;
            $mar->yeast_result = $request->yeast_result;
            $mar->name = $request->name;
            $mar->position = $request->position;
            $mar->checkby1 = $request->checkby1;
            $mar->checkby2 = $request->checkby2;
            $mar->save();

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
    public function destroy($id,Request $request)
    {
        $mar = FMar0501::find($id);

        if($mar->sign != null){
            if(file_exists(public_path('photos/mw_mar0501s/sign/'.$mar->sign))){

                unlink('photos/mw_mar0501s/sign/'.$mar->sign);

            }
        }

        FMar0501::where('id',$id)->delete();
        FMar0501Finance::where('f_mar0501_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $fmar0501 = FMar0501::find($id);
        return view('backend.labs.micro_worksheets.mar0501s.print',compact('fmar0501'));
    }
}
