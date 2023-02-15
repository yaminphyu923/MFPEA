<?php

namespace App\Http\Controllers\MRs;

use Exception;
use App\Models\MRs\Export;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:export_test_report', ['only' => ['create']]);
    }

    public function index()
    {
        $exports = Export::get();
        return view('backend.labs.mrs.exports.index',compact('exports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.mrs.exports.create');
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
            $export = new export;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_exports');
                $file->move($path, $filename);

                $export->sign = $filename;
            }

            $export->title = $request->title;
            $export->company_name = $request->company_name;
            $export->address = $request->address;
            $export->phone = $request->phone;
            $export->lab_received_date = $request->lab_received_date;
            $export->sample_number = $request->sample_number;
            $export->product_name = $request->product_name;
            $export->test_performed_date = $request->test_performed_date;
            $export->quantity = $request->quantity;
            $export->packing = $request->packing;
            $export->loading = $request->loading;
            $export->discharge = $request->discharge;
            $export->vessle_name = $request->vessle_name;
            $export->po_number = $request->po_number;
            $export->eori_number = $request->eori_number;
            $export->rex_no = $request->rex_no;
            $export->hs_code = $request->hs_code;
            $export->test_type = $request->test_type;
            $export->issue_date = $request->issue_date;
            $export->results = $request->results;
            $export->apc_para = $request->apc_para;
            $export->apc_method = $request->apc_method;
            $export->apc_result = $request->apc_result;
            $export->apc_before = $request->apc_before;
            $export->apc_after = $request->apc_after;
            $export->coliform_para = $request->coliform_para;
            $export->coliform_method = $request->coliform_method;
            $export->coliform_result = $request->coliform_result;
            $export->coliform_before = $request->coliform_before;
            $export->coliform_after = $request->coliform_after;
            $export->coli_para = $request->coli_para;
            $export->coli_method = $request->coli_method;
            $export->coli_result = $request->coli_result;
            $export->coli_before = $request->coli_before;
            $export->coli_after = $request->coli_after;
            $export->staphy_para = $request->staphy_para;
            $export->staphy_method = $request->staphy_method;
            $export->staphy_result = $request->staphy_result;
            $export->staphy_before = $request->staphy_before;
            $export->staphy_after = $request->staphy_after;
            $export->salmo_para = $request->salmo_para;
            $export->salmo_method = $request->salmo_method;
            $export->salmo_result = $request->salmo_result;
            $export->salmo_before = $request->salmo_before;
            $export->salmo_after = $request->salmo_after;
            $export->yeast_mould_para = $request->yeast_mould_para;
            $export->yeast_mould_method = $request->yeast_mould_method;
            $export->yeast_mould_result = $request->yeast_mould_result;
            $export->yeast_mould_before = $request->yeast_mould_before;
            $export->yeast_mould_after = $request->yeast_mould_after;
            $export->method = $request->method;
            $export->date = $request->date;
            $export->checked_name = $request->checked_name;
            $export->position = $request->position;
            $export->save();

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
        $export = export::find($id);
        return view('backend.labs.mrs.exports.detail',compact('export'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $export = export::find($id);
        return view('backend.labs.mrs.exports.edit',compact('export'));
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
            $export = export::find($id);

            if($export->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/mr_exports/'.$export->sign))){

                    unlink('photos/mr_exports/'.$export->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_exports');
                $file->move($path, $filename);

                $export->sign = $filename;
            }

            $export->title = $request->title;
            $export->company_name = $request->company_name;
            $export->address = $request->address;
            $export->phone = $request->phone;
            $export->lab_received_date = $request->lab_received_date;
            $export->sample_number = $request->sample_number;
            $export->product_name = $request->product_name;
            $export->test_performed_date = $request->test_performed_date;
            $export->quantity = $request->quantity;
            $export->packing = $request->packing;
            $export->loading = $request->loading;
            $export->discharge = $request->discharge;
            $export->vessle_name = $request->vessle_name;
            $export->po_number = $request->po_number;
            $export->eori_number = $request->eori_number;
            $export->rex_no = $request->rex_no;
            $export->hs_code = $request->hs_code;
            $export->test_type = $request->test_type;
            $export->issue_date = $request->issue_date;
            $export->results = $request->results;
            $export->apc_para = $request->apc_para;
            $export->apc_method = $request->apc_method;
            $export->apc_result = $request->apc_result;
            $export->apc_before = $request->apc_before;
            $export->apc_after = $request->apc_after;
            $export->coliform_para = $request->coliform_para;
            $export->coliform_method = $request->coliform_method;
            $export->coliform_result = $request->coliform_result;
            $export->coliform_before = $request->coliform_before;
            $export->coliform_after = $request->coliform_after;
            $export->coli_para = $request->coli_para;
            $export->coli_method = $request->coli_method;
            $export->coli_result = $request->coli_result;
            $export->coli_before = $request->coli_before;
            $export->coli_after = $request->coli_after;
            $export->staphy_para = $request->staphy_para;
            $export->staphy_method = $request->staphy_method;
            $export->staphy_result = $request->staphy_result;
            $export->staphy_before = $request->staphy_before;
            $export->staphy_after = $request->staphy_after;
            $export->salmo_para = $request->salmo_para;
            $export->salmo_method = $request->salmo_method;
            $export->salmo_result = $request->salmo_result;
            $export->salmo_before = $request->salmo_before;
            $export->salmo_after = $request->salmo_after;
            $export->yeast_mould_para = $request->yeast_mould_para;
            $export->yeast_mould_method = $request->yeast_mould_method;
            $export->yeast_mould_result = $request->yeast_mould_result;
            $export->yeast_mould_before = $request->yeast_mould_before;
            $export->yeast_mould_after = $request->yeast_mould_after;
            $export->method = $request->method;
            $export->date = $request->date;
            $export->checked_name = $request->checked_name;
            $export->position = $request->position;
            $export->save();

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
        $export = export::find($id);
        if($export->sign != null){
            if(file_exists(public_path('photos/mr_exports/'.$export->sign))){

                unlink('photos/mr_exports/'.$export->sign);

            }
        }

        export::where('id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $export = export::find($id);
        return view('backend.labs.mrs.exports.print',compact('export'));
    }
}
