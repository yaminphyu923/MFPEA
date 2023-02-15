<?php

namespace App\Http\Controllers\MRs;

use Exception;
use App\Models\MRs\Sac;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:sac_test_report', ['only' => ['create']]);
    }

    public function index()
    {
        $sacs = Sac::get();
        return view('backend.labs.mrs.sacs.index',compact('sacs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.mrs.sacs.create');
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
            $sac = new Sac;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_sacs');
                $file->move($path, $filename);

                $sac->sign = $filename;
            }

            $sac->title = $request->title;
            $sac->company_name = $request->company_name;
            $sac->address = $request->address;
            $sac->phone = $request->phone;
            $sac->lab_received_date = $request->lab_received_date;
            $sac->sample_number = $request->sample_number;
            $sac->product_name = $request->product_name;
            $sac->test_performed_date = $request->test_performed_date;
            $sac->test_type = $request->test_type;
            $sac->issue_date = $request->issue_date;
            $sac->results = $request->results;
            $sac->apc_para = $request->apc_para;
            $sac->apc_method = $request->apc_method;
            $sac->apc_result = $request->apc_result;
            $sac->apc_before = $request->apc_before;
            $sac->apc_after = $request->apc_after;
            $sac->coliform_para = $request->coliform_para;
            $sac->coliform_method = $request->coliform_method;
            $sac->coliform_result = $request->coliform_result;
            $sac->coliform_before = $request->coliform_before;
            $sac->coliform_after = $request->coliform_after;
            $sac->coli_para = $request->coli_para;
            $sac->coli_method = $request->coli_method;
            $sac->coli_result = $request->coli_result;
            $sac->coli_before = $request->coli_before;
            $sac->coli_after = $request->coli_after;
            $sac->staphy_para = $request->staphy_para;
            $sac->staphy_method = $request->staphy_method;
            $sac->staphy_result = $request->staphy_result;
            $sac->staphy_before = $request->staphy_before;
            $sac->staphy_after = $request->staphy_after;
            $sac->salmo_para = $request->salmo_para;
            $sac->salmo_method = $request->salmo_method;
            $sac->salmo_result = $request->salmo_result;
            $sac->salmo_before = $request->salmo_before;
            $sac->salmo_after = $request->salmo_after;
            $sac->yeast_mould_para = $request->yeast_mould_para;
            $sac->yeast_mould_method = $request->yeast_mould_method;
            $sac->yeast_mould_result = $request->yeast_mould_result;
            $sac->yeast_mould_before = $request->yeast_mould_before;
            $sac->yeast_mould_after = $request->yeast_mould_after;
            $sac->method = $request->method;
            $sac->date = $request->date;
            $sac->checked_name = $request->checked_name;
            $sac->position = $request->position;
            $sac->save();

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
        $sac = Sac::find($id);
        return view('backend.labs.mrs.sacs.detail',compact('sac'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sac = Sac::find($id);
        return view('backend.labs.mrs.sacs.edit',compact('sac'));
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
            $sac = Sac::find($id);

            if($sac->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/mr_sacs/'.$sac->sign))){

                    unlink('photos/mr_sacs/'.$sac->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_sacs');
                $file->move($path, $filename);

                $sac->sign = $filename;
            }

            $sac->title = $request->title;
            $sac->company_name = $request->company_name;
            $sac->address = $request->address;
            $sac->phone = $request->phone;
            $sac->lab_received_date = $request->lab_received_date;
            $sac->sample_number = $request->sample_number;
            $sac->product_name = $request->product_name;
            $sac->test_performed_date = $request->test_performed_date;
            $sac->test_type = $request->test_type;
            $sac->issue_date = $request->issue_date;
            $sac->results = $request->results;
            $sac->apc_para = $request->apc_para;
            $sac->apc_method = $request->apc_method;
            $sac->apc_result = $request->apc_result;
            $sac->apc_before = $request->apc_before;
            $sac->apc_after = $request->apc_after;
            $sac->coliform_para = $request->coliform_para;
            $sac->coliform_method = $request->coliform_method;
            $sac->coliform_result = $request->coliform_result;
            $sac->coliform_before = $request->coliform_before;
            $sac->coliform_after = $request->coliform_after;
            $sac->coli_para = $request->coli_para;
            $sac->coli_method = $request->coli_method;
            $sac->coli_result = $request->coli_result;
            $sac->coli_before = $request->coli_before;
            $sac->coli_after = $request->coli_after;
            $sac->staphy_para = $request->staphy_para;
            $sac->staphy_method = $request->staphy_method;
            $sac->staphy_result = $request->staphy_result;
            $sac->staphy_before = $request->staphy_before;
            $sac->staphy_after = $request->staphy_after;
            $sac->salmo_para = $request->salmo_para;
            $sac->salmo_method = $request->salmo_method;
            $sac->salmo_result = $request->salmo_result;
            $sac->salmo_before = $request->salmo_before;
            $sac->salmo_after = $request->salmo_after;
            $sac->yeast_mould_para = $request->yeast_mould_para;
            $sac->yeast_mould_method = $request->yeast_mould_method;
            $sac->yeast_mould_result = $request->yeast_mould_result;
            $sac->yeast_mould_before = $request->yeast_mould_before;
            $sac->yeast_mould_after = $request->yeast_mould_after;
            $sac->method = $request->method;
            $sac->date = $request->date;
            $sac->checked_name = $request->checked_name;
            $sac->position = $request->position;
            $sac->save();

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
        $sac = Sac::find($id);
        if($sac->sign != null){
            if(file_exists(public_path('photos/mr_sacs/'.$sac->sign))){

                unlink('photos/mr_sacs/'.$sac->sign);

            }
        }

        Sac::where('id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $sac = Sac::find($id);
        return view('backend.labs.mrs.sacs.print',compact('sac'));
    }
}
