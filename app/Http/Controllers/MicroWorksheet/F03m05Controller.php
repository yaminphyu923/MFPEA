<?php

namespace App\Http\Controllers\MicroWorksheet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MicroWorksheets\F03m05;
use App\Models\MicroWorksheets\F03m05Finance;

class F03m05Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-03-M-05', ['only' => ['create']]);
    }
    public function index()
    {
        $f03m05s = F03m05::all();
        return view('backend.labs.micro_worksheets.f03m05s.show',compact('f03m05s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.micro_worksheets.f03m05s.create');
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
            $fche = new F03m05;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_f03m05s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_f03m05s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->product_name = $request->product_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->unit = $request->unit;
            $fche->pre_enrichment = $request->pre_enrichment;
            $fche->selective_enrichment = $request->selective_enrichment;
            $fche->xld1_slant_tsi = $request->xld1_slant_tsi;
            $fche->xld1_blank_tsi = $request->xld1_blank_tsi;
            $fche->xld1_butt_tsi = $request->xld1_butt_tsi;
            $fche->xld1_h2s_tsi = $request->xld1_h2s_tsi;
            $fche->xld1_gas_tsi = $request->xld1_gas_tsi;
            $fche->xld1_slant_li = $request->xld1_slant_li;
            $fche->xld1_butt_li = $request->xld1_butt_li;
            $fche->xld1_h2s_li = $request->xld1_h2s_li;
            $fche->xld1_gas_li = $request->xld1_gas_li;
            $fche->xld2_slant_tsi = $request->xld2_slant_tsi;
            $fche->xld2_blank_tsi = $request->xld2_blank_tsi;
            $fche->xld2_butt_tsi = $request->xld2_butt_tsi;
            $fche->xld2_h2s_tsi = $request->xld2_h2s_tsi;
            $fche->xld2_gas_tsi = $request->xld2_gas_tsi;
            $fche->xld2_slant_li = $request->xld2_slant_li;
            $fche->xld2_butt_li = $request->xld2_butt_li;
            $fche->xld2_h2s_li = $request->xld2_h2s_li;
            $fche->xld2_gas_li = $request->xld2_gas_li;
            $fche->he1_slant_tsi = $request->he1_slant_tsi;
            $fche->he1_blank_tsi = $request->he1_blank_tsi;
            $fche->he1_butt_tsi = $request->he1_butt_tsi;
            $fche->he1_h2s_tsi = $request->he1_h2s_tsi;
            $fche->he1_gas_tsi = $request->he1_gas_tsi;
            $fche->he1_slant_li = $request->he1_slant_li;
            $fche->he1_butt_li = $request->he1_butt_li;
            $fche->he1_h2s_li = $request->he1_h2s_li;
            $fche->he1_gas_li = $request->he1_gas_li;
            $fche->he2_slant_tsi = $request->he2_slant_tsi;
            $fche->he2_blank_tsi = $request->he2_blank_tsi;
            $fche->he2_butt_tsi = $request->he2_butt_tsi;
            $fche->he2_h2s_tsi = $request->he2_h2s_tsi;
            $fche->he2_gas_tsi = $request->he2_gas_tsi;
            $fche->he2_slant_li = $request->he2_slant_li;
            $fche->he2_butt_li = $request->he2_butt_li;
            $fche->he2_h2s_li = $request->he2_h2s_li;
            $fche->he2_gas_li = $request->he2_gas_li;
            $fche->lysine_slant_tsi = $request->lysine_slant_tsi;
            $fche->lysine_blank_tsi = $request->lysine_blank_tsi;
            $fche->lysine_butt_tsi = $request->lysine_butt_tsi;
            $fche->lysine_h2s_tsi = $request->lysine_h2s_tsi;
            $fche->lysine_gas_tsi = $request->lysine_gas_tsi;
            $fche->lysine_slant_li = $request->lysine_slant_li;
            $fche->lysine_butt_li = $request->lysine_butt_li;
            $fche->lysine_h2s_li = $request->lysine_h2s_li;
            $fche->lysine_gas_li = $request->lysine_gas_li;
            $fche->urease_slant_tsi = $request->urease_slant_tsi;
            $fche->urease_blank_tsi = $request->urease_blank_tsi;
            $fche->urease_butt_tsi = $request->urease_butt_tsi;
            $fche->urease_h2s_tsi = $request->urease_h2s_tsi;
            $fche->urease_gas_tsi = $request->urease_gas_tsi;
            $fche->urease_slant_li = $request->urease_slant_li;
            $fche->urease_butt_li = $request->urease_butt_li;
            $fche->urease_h2s_li = $request->urease_h2s_li;
            $fche->urease_gas_li = $request->urease_gas_li;
            $fche->dul_slant_tsi = $request->dul_slant_tsi;
            $fche->dul_blank_tsi = $request->dul_blank_tsi;
            $fche->dul_butt_tsi = $request->dul_butt_tsi;
            $fche->dul_h2s_tsi = $request->dul_h2s_tsi;
            $fche->dul_gas_tsi = $request->dul_gas_tsi;
            $fche->dul_slant_li = $request->dul_slant_li;
            $fche->dul_butt_li = $request->dul_butt_li;
            $fche->dul_h2s_li = $request->dul_h2s_li;
            $fche->dul_gas_li = $request->dul_gas_li;
            $fche->kcn_slant_tsi = $request->kcn_slant_tsi;
            $fche->kcn_blank_tsi = $request->kcn_blank_tsi;
            $fche->kcn_butt_tsi = $request->kcn_butt_tsi;
            $fche->kcn_h2s_tsi = $request->kcn_h2s_tsi;
            $fche->kcn_gas_tsi = $request->kcn_gas_tsi;
            $fche->kcn_slant_li = $request->kcn_slant_li;
            $fche->kcn_butt_li = $request->kcn_butt_li;
            $fche->kcn_h2s_li = $request->kcn_h2s_li;
            $fche->kcn_gas_li = $request->kcn_gas_li;
            $fche->malonate_slant_tsi = $request->malonate_slant_tsi;
            $fche->malonate_blank_tsi = $request->malonate_blank_tsi;
            $fche->malonate_butt_tsi = $request->malonate_butt_tsi;
            $fche->malonate_h2s_tsi = $request->malonate_h2s_tsi;
            $fche->malonate_gas_tsi = $request->malonate_gas_tsi;
            $fche->malonate_slant_li = $request->malonate_slant_li;
            $fche->malonate_butt_li = $request->malonate_butt_li;
            $fche->malonate_h2s_li = $request->malonate_h2s_li;
            $fche->malonate_gas_li = $request->malonate_gas_li;
            $fche->indole_slant_tsi = $request->indole_slant_tsi;
            $fche->indole_blank_tsi = $request->indole_blank_tsi;
            $fche->indole_butt_tsi = $request->indole_butt_tsi;
            $fche->indole_h2s_tsi = $request->indole_h2s_tsi;
            $fche->indole_gas_tsi = $request->indole_gas_tsi;
            $fche->indole_slant_li = $request->indole_slant_li;
            $fche->indole_butt_li = $request->indole_butt_li;
            $fche->indole_h2s_li = $request->indole_h2s_li;
            $fche->indole_gas_li = $request->indole_gas_li;
            $fche->red_slant_tsi = $request->red_slant_tsi;
            $fche->red_blank_tsi = $request->red_blank_tsi;
            $fche->red_butt_tsi = $request->red_butt_tsi;
            $fche->red_h2s_tsi = $request->red_h2s_tsi;
            $fche->red_gas_tsi = $request->red_gas_tsi;
            $fche->red_slant_li = $request->red_slant_li;
            $fche->red_butt_li = $request->red_butt_li;
            $fche->red_h2s_li = $request->red_h2s_li;
            $fche->red_gas_li = $request->red_gas_li;
            $fche->voges_slant_tsi = $request->voges_slant_tsi;
            $fche->voges_blank_tsi = $request->voges_blank_tsi;
            $fche->voges_butt_tsi = $request->voges_butt_tsi;
            $fche->voges_h2s_tsi = $request->voges_h2s_tsi;
            $fche->voges_gas_tsi = $request->voges_gas_tsi;
            $fche->voges_slant_li = $request->voges_slant_li;
            $fche->voges_butt_li = $request->voges_butt_li;
            $fche->voges_h2s_li = $request->voges_h2s_li;
            $fche->voges_gas_li = $request->voges_gas_li;
            $fche->citrate_slant_tsi = $request->citrate_slant_tsi;
            $fche->citrate_blank_tsi = $request->citrate_blank_tsi;
            $fche->citrate_butt_tsi = $request->citrate_butt_tsi;
            $fche->citrate_h2s_tsi = $request->citrate_h2s_tsi;
            $fche->citrate_gas_tsi = $request->citrate_gas_tsi;
            $fche->citrate_slant_li = $request->citrate_slant_li;
            $fche->citrate_butt_li = $request->citrate_butt_li;
            $fche->citrate_h2s_li = $request->citrate_h2s_li;
            $fche->citrate_gas_li = $request->citrate_gas_li;
            $fche->sucrose_slant_tsi = $request->sucrose_slant_tsi;
            $fche->sucrose_blank_tsi = $request->sucrose_blank_tsi;
            $fche->sucrose_butt_tsi = $request->sucrose_butt_tsi;
            $fche->sucrose_h2s_tsi = $request->sucrose_h2s_tsi;
            $fche->sucrose_gas_tsi = $request->sucrose_gas_tsi;
            $fche->sucrose_slant_li = $request->sucrose_slant_li;
            $fche->sucrose_butt_li = $request->sucrose_butt_li;
            $fche->sucrose_h2s_li = $request->sucrose_h2s_li;
            $fche->sucrose_gas_li = $request->sucrose_gas_li;
            $fche->sal = $request->sal;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->save();

            if($fche)
            {
                $fche_finance = new F03m05Finance;
                $fche_finance->f03m05_id = $fche->id;
                $fche_finance->save();

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
        $f03m05 = F03m05::find($id);
        return view('backend.labs.micro_worksheets.f03m05s.detail',compact('f03m05'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $f03m05 = F03m05::find($id);
        return view('backend.labs.micro_worksheets.f03m05s.edit',compact('f03m05'));
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
            $fche = F03m05::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/mw_f03m05s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/mw_f03m05s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/mw_f03m05s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/mw_f03m05s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_f03m05s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_f03m05s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->product_name = $request->product_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->unit = $request->unit;
            $fche->pre_enrichment = $request->pre_enrichment;
            $fche->selective_enrichment = $request->selective_enrichment;
            $fche->xld1_slant_tsi = $request->xld1_slant_tsi;
            $fche->xld1_blank_tsi = $request->xld1_blank_tsi;
            $fche->xld1_butt_tsi = $request->xld1_butt_tsi;
            $fche->xld1_h2s_tsi = $request->xld1_h2s_tsi;
            $fche->xld1_gas_tsi = $request->xld1_gas_tsi;
            $fche->xld1_slant_li = $request->xld1_slant_li;
            $fche->xld1_butt_li = $request->xld1_butt_li;
            $fche->xld1_h2s_li = $request->xld1_h2s_li;
            $fche->xld1_gas_li = $request->xld1_gas_li;
            $fche->xld2_slant_tsi = $request->xld2_slant_tsi;
            $fche->xld2_blank_tsi = $request->xld2_blank_tsi;
            $fche->xld2_butt_tsi = $request->xld2_butt_tsi;
            $fche->xld2_h2s_tsi = $request->xld2_h2s_tsi;
            $fche->xld2_gas_tsi = $request->xld2_gas_tsi;
            $fche->xld2_slant_li = $request->xld2_slant_li;
            $fche->xld2_butt_li = $request->xld2_butt_li;
            $fche->xld2_h2s_li = $request->xld2_h2s_li;
            $fche->xld2_gas_li = $request->xld2_gas_li;
            $fche->he1_slant_tsi = $request->he1_slant_tsi;
            $fche->he1_blank_tsi = $request->he1_blank_tsi;
            $fche->he1_butt_tsi = $request->he1_butt_tsi;
            $fche->he1_h2s_tsi = $request->he1_h2s_tsi;
            $fche->he1_gas_tsi = $request->he1_gas_tsi;
            $fche->he1_slant_li = $request->he1_slant_li;
            $fche->he1_butt_li = $request->he1_butt_li;
            $fche->he1_h2s_li = $request->he1_h2s_li;
            $fche->he1_gas_li = $request->he1_gas_li;
            $fche->he2_slant_tsi = $request->he2_slant_tsi;
            $fche->he2_blank_tsi = $request->he2_blank_tsi;
            $fche->he2_butt_tsi = $request->he2_butt_tsi;
            $fche->he2_h2s_tsi = $request->he2_h2s_tsi;
            $fche->he2_gas_tsi = $request->he2_gas_tsi;
            $fche->he2_slant_li = $request->he2_slant_li;
            $fche->he2_butt_li = $request->he2_butt_li;
            $fche->he2_h2s_li = $request->he2_h2s_li;
            $fche->he2_gas_li = $request->he2_gas_li;
            $fche->lysine_slant_tsi = $request->lysine_slant_tsi;
            $fche->lysine_blank_tsi = $request->lysine_blank_tsi;
            $fche->lysine_butt_tsi = $request->lysine_butt_tsi;
            $fche->lysine_h2s_tsi = $request->lysine_h2s_tsi;
            $fche->lysine_gas_tsi = $request->lysine_gas_tsi;
            $fche->lysine_slant_li = $request->lysine_slant_li;
            $fche->lysine_butt_li = $request->lysine_butt_li;
            $fche->lysine_h2s_li = $request->lysine_h2s_li;
            $fche->lysine_gas_li = $request->lysine_gas_li;
            $fche->urease_slant_tsi = $request->urease_slant_tsi;
            $fche->urease_blank_tsi = $request->urease_blank_tsi;
            $fche->urease_butt_tsi = $request->urease_butt_tsi;
            $fche->urease_h2s_tsi = $request->urease_h2s_tsi;
            $fche->urease_gas_tsi = $request->urease_gas_tsi;
            $fche->urease_slant_li = $request->urease_slant_li;
            $fche->urease_butt_li = $request->urease_butt_li;
            $fche->urease_h2s_li = $request->urease_h2s_li;
            $fche->urease_gas_li = $request->urease_gas_li;
            $fche->dul_slant_tsi = $request->dul_slant_tsi;
            $fche->dul_blank_tsi = $request->dul_blank_tsi;
            $fche->dul_butt_tsi = $request->dul_butt_tsi;
            $fche->dul_h2s_tsi = $request->dul_h2s_tsi;
            $fche->dul_gas_tsi = $request->dul_gas_tsi;
            $fche->dul_slant_li = $request->dul_slant_li;
            $fche->dul_butt_li = $request->dul_butt_li;
            $fche->dul_h2s_li = $request->dul_h2s_li;
            $fche->dul_gas_li = $request->dul_gas_li;
            $fche->kcn_slant_tsi = $request->kcn_slant_tsi;
            $fche->kcn_blank_tsi = $request->kcn_blank_tsi;
            $fche->kcn_butt_tsi = $request->kcn_butt_tsi;
            $fche->kcn_h2s_tsi = $request->kcn_h2s_tsi;
            $fche->kcn_gas_tsi = $request->kcn_gas_tsi;
            $fche->kcn_slant_li = $request->kcn_slant_li;
            $fche->kcn_butt_li = $request->kcn_butt_li;
            $fche->kcn_h2s_li = $request->kcn_h2s_li;
            $fche->kcn_gas_li = $request->kcn_gas_li;
            $fche->malonate_slant_tsi = $request->malonate_slant_tsi;
            $fche->malonate_blank_tsi = $request->malonate_blank_tsi;
            $fche->malonate_butt_tsi = $request->malonate_butt_tsi;
            $fche->malonate_h2s_tsi = $request->malonate_h2s_tsi;
            $fche->malonate_gas_tsi = $request->malonate_gas_tsi;
            $fche->malonate_slant_li = $request->malonate_slant_li;
            $fche->malonate_butt_li = $request->malonate_butt_li;
            $fche->malonate_h2s_li = $request->malonate_h2s_li;
            $fche->malonate_gas_li = $request->malonate_gas_li;
            $fche->indole_slant_tsi = $request->indole_slant_tsi;
            $fche->indole_blank_tsi = $request->indole_blank_tsi;
            $fche->indole_butt_tsi = $request->indole_butt_tsi;
            $fche->indole_h2s_tsi = $request->indole_h2s_tsi;
            $fche->indole_gas_tsi = $request->indole_gas_tsi;
            $fche->indole_slant_li = $request->indole_slant_li;
            $fche->indole_butt_li = $request->indole_butt_li;
            $fche->indole_h2s_li = $request->indole_h2s_li;
            $fche->indole_gas_li = $request->indole_gas_li;
            $fche->red_slant_tsi = $request->red_slant_tsi;
            $fche->red_blank_tsi = $request->red_blank_tsi;
            $fche->red_butt_tsi = $request->red_butt_tsi;
            $fche->red_h2s_tsi = $request->red_h2s_tsi;
            $fche->red_gas_tsi = $request->red_gas_tsi;
            $fche->red_slant_li = $request->red_slant_li;
            $fche->red_butt_li = $request->red_butt_li;
            $fche->red_h2s_li = $request->red_h2s_li;
            $fche->red_gas_li = $request->red_gas_li;
            $fche->voges_slant_tsi = $request->voges_slant_tsi;
            $fche->voges_blank_tsi = $request->voges_blank_tsi;
            $fche->voges_butt_tsi = $request->voges_butt_tsi;
            $fche->voges_h2s_tsi = $request->voges_h2s_tsi;
            $fche->voges_gas_tsi = $request->voges_gas_tsi;
            $fche->voges_slant_li = $request->voges_slant_li;
            $fche->voges_butt_li = $request->voges_butt_li;
            $fche->voges_h2s_li = $request->voges_h2s_li;
            $fche->voges_gas_li = $request->voges_gas_li;
            $fche->citrate_slant_tsi = $request->citrate_slant_tsi;
            $fche->citrate_blank_tsi = $request->citrate_blank_tsi;
            $fche->citrate_butt_tsi = $request->citrate_butt_tsi;
            $fche->citrate_h2s_tsi = $request->citrate_h2s_tsi;
            $fche->citrate_gas_tsi = $request->citrate_gas_tsi;
            $fche->citrate_slant_li = $request->citrate_slant_li;
            $fche->citrate_butt_li = $request->citrate_butt_li;
            $fche->citrate_h2s_li = $request->citrate_h2s_li;
            $fche->citrate_gas_li = $request->citrate_gas_li;
            $fche->sucrose_slant_tsi = $request->sucrose_slant_tsi;
            $fche->sucrose_blank_tsi = $request->sucrose_blank_tsi;
            $fche->sucrose_butt_tsi = $request->sucrose_butt_tsi;
            $fche->sucrose_h2s_tsi = $request->sucrose_h2s_tsi;
            $fche->sucrose_gas_tsi = $request->sucrose_gas_tsi;
            $fche->sucrose_slant_li = $request->sucrose_slant_li;
            $fche->sucrose_butt_li = $request->sucrose_butt_li;
            $fche->sucrose_h2s_li = $request->sucrose_h2s_li;
            $fche->sucrose_gas_li = $request->sucrose_gas_li;
            $fche->sal = $request->sal;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->save();

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
        $che = F03m05::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/mw_f03m05s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/mw_f03m05s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/mw_f03m05s/checked_sign/'.$che->checked_sign))){

                unlink('photos/mw_f03m05s/checked_sign/'.$che->checked_sign);

            }
        }

        F03m05::where('id',$id)->delete();
        F03m05Finance::where('f03m05_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $f03m05 = F03m05::find($id);
        return view('backend.labs.micro_worksheets.f03m05s.print',compact('f03m05'));
    }
}
