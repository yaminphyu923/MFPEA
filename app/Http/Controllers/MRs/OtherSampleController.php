<?php

namespace App\Http\Controllers\MRs;

use Exception;
use Illuminate\Http\Request;
use App\Models\MRs\OtherSample;
use App\Http\Controllers\Controller;

class OtherSampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:other_sample_test_report', ['only' => ['create']]);
    }

    public function index()
    {
        $other_samples = OtherSample::get();
        return view('backend.labs.mrs.other_samples.index',compact('other_samples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.mrs.other_samples.create');
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
            $other_sample = new OtherSample;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_other_samples');
                $file->move($path, $filename);

                $other_sample->sign = $filename;
            }

            $other_sample->title = $request->title;
            $other_sample->company_name = $request->company_name;
            $other_sample->address = $request->address;
            $other_sample->phone = $request->phone;
            $other_sample->lab_received_date = $request->lab_received_date;
            $other_sample->sample_number = $request->sample_number;
            $other_sample->product_name = $request->product_name;
            $other_sample->test_performed_date = $request->test_performed_date;
            $other_sample->test_type = $request->test_type;
            $other_sample->issue_date = $request->issue_date;
            $other_sample->results = $request->results;
            $other_sample->apc_para = $request->apc_para;
            $other_sample->apc_method = $request->apc_method;
            $other_sample->apc_result = $request->apc_result;
            $other_sample->apc_before = $request->apc_before;
            $other_sample->apc_after = $request->apc_after;
            $other_sample->coliform_para = $request->coliform_para;
            $other_sample->coliform_method = $request->coliform_method;
            $other_sample->coliform_result = $request->coliform_result;
            $other_sample->coliform_before = $request->coliform_before;
            $other_sample->coliform_after = $request->coliform_after;
            $other_sample->coli_para = $request->coli_para;
            $other_sample->coli_method = $request->coli_method;
            $other_sample->coli_result = $request->coli_result;
            $other_sample->coli_before = $request->coli_before;
            $other_sample->coli_after = $request->coli_after;
            $other_sample->staphy_para = $request->staphy_para;
            $other_sample->staphy_method = $request->staphy_method;
            $other_sample->staphy_result = $request->staphy_result;
            $other_sample->staphy_before = $request->staphy_before;
            $other_sample->staphy_after = $request->staphy_after;
            $other_sample->salmo_para = $request->salmo_para;
            $other_sample->salmo_method = $request->salmo_method;
            $other_sample->salmo_result = $request->salmo_result;
            $other_sample->salmo_before = $request->salmo_before;
            $other_sample->salmo_after = $request->salmo_after;
            $other_sample->yeast_mould_para = $request->yeast_mould_para;
            $other_sample->yeast_mould_method = $request->yeast_mould_method;
            $other_sample->yeast_mould_result = $request->yeast_mould_result;
            $other_sample->yeast_mould_before = $request->yeast_mould_before;
            $other_sample->yeast_mould_after = $request->yeast_mould_after;
            $other_sample->method = $request->method;
            $other_sample->date = $request->date;
            $other_sample->checked_name = $request->checked_name;
            $other_sample->position = $request->position;
            $other_sample->save();

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
        $other_sample = OtherSample::find($id);
        return view('backend.labs.mrs.other_samples.detail',compact('other_sample'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $other_sample = OtherSample::find($id);
        return view('backend.labs.mrs.other_samples.edit',compact('other_sample'));
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
            $other_sample = OtherSample::find($id);

            if($other_sample->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/mr_other_samples/'.$other_sample->sign))){

                    unlink('photos/mr_other_samples/'.$other_sample->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_other_samples');
                $file->move($path, $filename);

                $other_sample->sign = $filename;
            }

            $other_sample->title = $request->title;
            $other_sample->company_name = $request->company_name;
            $other_sample->address = $request->address;
            $other_sample->phone = $request->phone;
            $other_sample->lab_received_date = $request->lab_received_date;
            $other_sample->sample_number = $request->sample_number;
            $other_sample->product_name = $request->product_name;
            $other_sample->test_performed_date = $request->test_performed_date;
            $other_sample->test_type = $request->test_type;
            $other_sample->issue_date = $request->issue_date;
            $other_sample->results = $request->results;
            $other_sample->apc_para = $request->apc_para;
            $other_sample->apc_method = $request->apc_method;
            $other_sample->apc_result = $request->apc_result;
            $other_sample->apc_before = $request->apc_before;
            $other_sample->apc_after = $request->apc_after;
            $other_sample->coliform_para = $request->coliform_para;
            $other_sample->coliform_method = $request->coliform_method;
            $other_sample->coliform_result = $request->coliform_result;
            $other_sample->coliform_before = $request->coliform_before;
            $other_sample->coliform_after = $request->coliform_after;
            $other_sample->coli_para = $request->coli_para;
            $other_sample->coli_method = $request->coli_method;
            $other_sample->coli_result = $request->coli_result;
            $other_sample->coli_before = $request->coli_before;
            $other_sample->coli_after = $request->coli_after;
            $other_sample->staphy_para = $request->staphy_para;
            $other_sample->staphy_method = $request->staphy_method;
            $other_sample->staphy_result = $request->staphy_result;
            $other_sample->staphy_before = $request->staphy_before;
            $other_sample->staphy_after = $request->staphy_after;
            $other_sample->salmo_para = $request->salmo_para;
            $other_sample->salmo_method = $request->salmo_method;
            $other_sample->salmo_result = $request->salmo_result;
            $other_sample->salmo_before = $request->salmo_before;
            $other_sample->salmo_after = $request->salmo_after;
            $other_sample->yeast_mould_para = $request->yeast_mould_para;
            $other_sample->yeast_mould_method = $request->yeast_mould_method;
            $other_sample->yeast_mould_result = $request->yeast_mould_result;
            $other_sample->yeast_mould_before = $request->yeast_mould_before;
            $other_sample->yeast_mould_after = $request->yeast_mould_after;
            $other_sample->method = $request->method;
            $other_sample->date = $request->date;
            $other_sample->checked_name = $request->checked_name;
            $other_sample->position = $request->position;
            $other_sample->save();

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
        $other_sample = OtherSample::find($id);
        if($other_sample->sign != null){
            if(file_exists(public_path('photos/mr_other_samples/'.$other_sample->sign))){

                unlink('photos/mr_other_samples/'.$other_sample->sign);

            }
        }

        OtherSample::where('id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $other_sample = OtherSample::find($id);
        return view('backend.labs.mrs.other_samples.print',compact('other_sample'));
    }
}
