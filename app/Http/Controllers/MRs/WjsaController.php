<?php

namespace App\Http\Controllers\MRs;

use Exception;
use App\Models\MRs\Wjsas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WjsaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:water_juice_swab_air_test_report', ['only' => ['create']]);
    }

    public function index()
    {
        $wjsas = Wjsas::get();
        return view('backend.labs.mrs.wjsas.index',compact('wjsas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.mrs.wjsas.create');
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
            $wjsa = new Wjsas;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_wjsas');
                $file->move($path, $filename);

                $wjsa->sign = $filename;
            }

            $wjsa->title = $request->title;
            $wjsa->company_name = $request->company_name;
            $wjsa->address = $request->address;
            $wjsa->phone = $request->phone;
            $wjsa->lab_received_date = $request->lab_received_date;
            $wjsa->sample_number = $request->sample_number;
            $wjsa->product_name = $request->product_name;
            $wjsa->test_performed_date = $request->test_performed_date;
            $wjsa->test_type = $request->test_type;
            $wjsa->issue_date = $request->issue_date;
            $wjsa->results = $request->results;
            $wjsa->apc_para = $request->apc_para;
            $wjsa->apc_method = $request->apc_method;
            $wjsa->apc_result = $request->apc_result;
            $wjsa->apc_before = $request->apc_before;
            $wjsa->apc_after = $request->apc_after;
            $wjsa->coliform_para = $request->coliform_para;
            $wjsa->coliform_method = $request->coliform_method;
            $wjsa->coliform_result = $request->coliform_result;
            $wjsa->coliform_before = $request->coliform_before;
            $wjsa->coliform_after = $request->coliform_after;
            $wjsa->coli_para = $request->coli_para;
            $wjsa->coli_method = $request->coli_method;
            $wjsa->coli_result = $request->coli_result;
            $wjsa->coli_before = $request->coli_before;
            $wjsa->coli_after = $request->coli_after;
            $wjsa->staphy_para = $request->staphy_para;
            $wjsa->staphy_method = $request->staphy_method;
            $wjsa->staphy_result = $request->staphy_result;
            $wjsa->staphy_before = $request->staphy_before;
            $wjsa->staphy_after = $request->staphy_after;
            $wjsa->salmo_para = $request->salmo_para;
            $wjsa->salmo_method = $request->salmo_method;
            $wjsa->salmo_result = $request->salmo_result;
            $wjsa->salmo_before = $request->salmo_before;
            $wjsa->salmo_after = $request->salmo_after;
            $wjsa->yeast_mould_para = $request->yeast_mould_para;
            $wjsa->yeast_mould_method = $request->yeast_mould_method;
            $wjsa->yeast_mould_result = $request->yeast_mould_result;
            $wjsa->yeast_mould_before = $request->yeast_mould_before;
            $wjsa->yeast_mould_after = $request->yeast_mould_after;
            $wjsa->method = $request->method;
            $wjsa->date = $request->date;
            $wjsa->checked_name = $request->checked_name;
            $wjsa->position = $request->position;
            $wjsa->save();

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
        $wjsa = Wjsas::find($id);
        return view('backend.labs.mrs.wjsas.detail',compact('wjsa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wjsa = Wjsas::find($id);
        return view('backend.labs.mrs.wjsas.edit',compact('wjsa'));
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
            $wjsa = Wjsas::find($id);

            if($wjsa->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/mr_wjsas/'.$wjsa->sign))){

                    unlink('photos/mr_wjsas/'.$wjsa->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mr_wjsas');
                $file->move($path, $filename);

                $wjsa->sign = $filename;
            }

            $wjsa->title = $request->title;
            $wjsa->company_name = $request->company_name;
            $wjsa->address = $request->address;
            $wjsa->phone = $request->phone;
            $wjsa->lab_received_date = $request->lab_received_date;
            $wjsa->sample_number = $request->sample_number;
            $wjsa->product_name = $request->product_name;
            $wjsa->test_performed_date = $request->test_performed_date;
            $wjsa->test_type = $request->test_type;
            $wjsa->issue_date = $request->issue_date;
            $wjsa->results = $request->results;
            $wjsa->apc_para = $request->apc_para;
            $wjsa->apc_method = $request->apc_method;
            $wjsa->apc_result = $request->apc_result;
            $wjsa->apc_before = $request->apc_before;
            $wjsa->apc_after = $request->apc_after;
            $wjsa->coliform_para = $request->coliform_para;
            $wjsa->coliform_method = $request->coliform_method;
            $wjsa->coliform_result = $request->coliform_result;
            $wjsa->coliform_before = $request->coliform_before;
            $wjsa->coliform_after = $request->coliform_after;
            $wjsa->coli_para = $request->coli_para;
            $wjsa->coli_method = $request->coli_method;
            $wjsa->coli_result = $request->coli_result;
            $wjsa->coli_before = $request->coli_before;
            $wjsa->coli_after = $request->coli_after;
            $wjsa->staphy_para = $request->staphy_para;
            $wjsa->staphy_method = $request->staphy_method;
            $wjsa->staphy_result = $request->staphy_result;
            $wjsa->staphy_before = $request->staphy_before;
            $wjsa->staphy_after = $request->staphy_after;
            $wjsa->salmo_para = $request->salmo_para;
            $wjsa->salmo_method = $request->salmo_method;
            $wjsa->salmo_result = $request->salmo_result;
            $wjsa->salmo_before = $request->salmo_before;
            $wjsa->salmo_after = $request->salmo_after;
            $wjsa->yeast_mould_para = $request->yeast_mould_para;
            $wjsa->yeast_mould_method = $request->yeast_mould_method;
            $wjsa->yeast_mould_result = $request->yeast_mould_result;
            $wjsa->yeast_mould_before = $request->yeast_mould_before;
            $wjsa->yeast_mould_after = $request->yeast_mould_after;
            $wjsa->method = $request->method;
            $wjsa->date = $request->date;
            $wjsa->checked_name = $request->checked_name;
            $wjsa->position = $request->position;
            $wjsa->save();

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
        $wjsa = Wjsas::find($id);
        if($wjsa->sign != null){
            if(file_exists(public_path('photos/mr_wjsas/'.$wjsa->sign))){

                unlink('photos/mr_wjsas/'.$wjsa->sign);

            }
        }

        Wjsas::where('id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $wjsa = Wjsas::find($id);
        return view('backend.labs.mrs.wjsas.print',compact('wjsa'));
    }
}
