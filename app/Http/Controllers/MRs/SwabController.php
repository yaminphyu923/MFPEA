<?php

namespace App\Http\Controllers\MRs;

use Exception;
use App\Models\MRs\Swab;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SwabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:swab_test_report', ['only' => ['create']]);
    }

    public function index()
    {
        $swabs = Swab::get();
        return view('backend.labs.mrs.swabs.index',compact('swabs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.mrs.swabs.create');
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
            $swab = new Swab;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_swabs');
                $file->move($path, $filename);

                $swab->sign = $filename;
            }

            $swab->title = $request->title;
            $swab->company_name = $request->company_name;
            $swab->address = $request->address;
            $swab->phone = $request->phone;
            $swab->lab_received_date = $request->lab_received_date;
            $swab->sample_number = $request->sample_number;
            $swab->product_name = $request->product_name;
            $swab->test_performed_date = $request->test_performed_date;
            $swab->test_type = $request->test_type;
            $swab->issue_date = $request->issue_date;
            $swab->results = $request->results;
            $swab->apc_para = $request->apc_para;
            $swab->apc_method = $request->apc_method;
            $swab->apc_result = $request->apc_result;
            $swab->apc_before = $request->apc_before;
            $swab->apc_after = $request->apc_after;
            $swab->coliform_para = $request->coliform_para;
            $swab->coliform_method = $request->coliform_method;
            $swab->coliform_result = $request->coliform_result;
            $swab->coliform_before = $request->coliform_before;
            $swab->coliform_after = $request->coliform_after;
            $swab->coli_para = $request->coli_para;
            $swab->coli_method = $request->coli_method;
            $swab->coli_result = $request->coli_result;
            $swab->coli_before = $request->coli_before;
            $swab->coli_after = $request->coli_after;
            $swab->staphy_para = $request->staphy_para;
            $swab->staphy_method = $request->staphy_method;
            $swab->staphy_result = $request->staphy_result;
            $swab->staphy_before = $request->staphy_before;
            $swab->staphy_after = $request->staphy_after;
            $swab->salmo_para = $request->salmo_para;
            $swab->salmo_method = $request->salmo_method;
            $swab->salmo_result = $request->salmo_result;
            $swab->salmo_before = $request->salmo_before;
            $swab->salmo_after = $request->salmo_after;
            $swab->yeast_mould_para = $request->yeast_mould_para;
            $swab->yeast_mould_method = $request->yeast_mould_method;
            $swab->yeast_mould_result = $request->yeast_mould_result;
            $swab->yeast_mould_before = $request->yeast_mould_before;
            $swab->yeast_mould_after = $request->yeast_mould_after;
            $swab->method = $request->method;
            $swab->date = $request->date;
            $swab->checked_name = $request->checked_name;
            $swab->position = $request->position;
            $swab->save();

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
        $swab = Swab::find($id);
        return view('backend.labs.mrs.swabs.detail',compact('swab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $swab = Swab::find($id);
        return view('backend.labs.mrs.swabs.edit',compact('swab'));
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
            $swab = Swab::find($id);

            if($swab->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/mr_swabs/'.$swab->sign))){

                    unlink('photos/mr_swabs/'.$swab->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_swabs');
                $file->move($path, $filename);

                $swab->sign = $filename;
            }

            $swab->title = $request->title;
            $swab->company_name = $request->company_name;
            $swab->address = $request->address;
            $swab->phone = $request->phone;
            $swab->lab_received_date = $request->lab_received_date;
            $swab->sample_number = $request->sample_number;
            $swab->product_name = $request->product_name;
            $swab->test_performed_date = $request->test_performed_date;
            $swab->test_type = $request->test_type;
            $swab->issue_date = $request->issue_date;
            $swab->results = $request->results;
            $swab->apc_para = $request->apc_para;
            $swab->apc_method = $request->apc_method;
            $swab->apc_result = $request->apc_result;
            $swab->apc_before = $request->apc_before;
            $swab->apc_after = $request->apc_after;
            $swab->coliform_para = $request->coliform_para;
            $swab->coliform_method = $request->coliform_method;
            $swab->coliform_result = $request->coliform_result;
            $swab->coliform_before = $request->coliform_before;
            $swab->coliform_after = $request->coliform_after;
            $swab->coli_para = $request->coli_para;
            $swab->coli_method = $request->coli_method;
            $swab->coli_result = $request->coli_result;
            $swab->coli_before = $request->coli_before;
            $swab->coli_after = $request->coli_after;
            $swab->staphy_para = $request->staphy_para;
            $swab->staphy_method = $request->staphy_method;
            $swab->staphy_result = $request->staphy_result;
            $swab->staphy_before = $request->staphy_before;
            $swab->staphy_after = $request->staphy_after;
            $swab->salmo_para = $request->salmo_para;
            $swab->salmo_method = $request->salmo_method;
            $swab->salmo_result = $request->salmo_result;
            $swab->salmo_before = $request->salmo_before;
            $swab->salmo_after = $request->salmo_after;
            $swab->yeast_mould_para = $request->yeast_mould_para;
            $swab->yeast_mould_method = $request->yeast_mould_method;
            $swab->yeast_mould_result = $request->yeast_mould_result;
            $swab->yeast_mould_before = $request->yeast_mould_before;
            $swab->yeast_mould_after = $request->yeast_mould_after;
            $swab->method = $request->method;
            $swab->date = $request->date;
            $swab->checked_name = $request->checked_name;
            $swab->position = $request->position;
            $swab->save();

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
        $swab = Swab::find($id);
        if($swab->sign != null){
            if(file_exists(public_path('photos/mr_swabs/'.$swab->sign))){

                unlink('photos/mr_swabs/'.$swab->sign);

            }
        }

        Swab::where('id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $swab = Swab::find($id);
        return view('backend.labs.mrs.swabs.print',compact('swab'));
    }
}
