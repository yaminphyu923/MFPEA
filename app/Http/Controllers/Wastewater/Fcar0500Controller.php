<?php

namespace App\Http\Controllers\Wastewater;

use Illuminate\Http\Request;
use App\Models\Wastewater\Fcar0500;
use App\Http\Controllers\Controller;
use App\Models\Wastewater\Fcar0500Finance;

class Fcar0500Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-CAR-05-00(Wastewater Results)', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fcar0500::all();
        return view('backend.labs.wastewater.fcar0500s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.wastewater.fcar0500s.create');
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
            $fche = new Fcar0500;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fcar0500s');
                $file->move($path, $filename);

                $fche->sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->report_no = $request->report_no;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->analysis_date = $request->analysis_date;
            $fche->issue_date = $request->issue_date;
            $fche->result = $request->result;
            $fche->bod_para = $request->bod_para;
            $fche->bod_method = $request->bod_method;
            $fche->bod_result = $request->bod_result;
            $fche->bod_unit = $request->bod_unit;
            $fche->bod_value = $request->bod_value;
            $fche->cod_para = $request->cod_para;
            $fche->cod_method = $request->cod_method;
            $fche->cod_result = $request->cod_result;
            $fche->cod_unit = $request->cod_unit;
            $fche->cod_value = $request->cod_value;
            $fche->oil_para = $request->oil_para;
            $fche->oil_method = $request->oil_method;
            $fche->oil_result = $request->oil_result;
            $fche->oil_unit = $request->oil_unit;
            $fche->oil_value = $request->oil_value;
            $fche->ph_para = $request->ph_para;
            $fche->ph_method = $request->ph_method;
            $fche->ph_result = $request->ph_result;
            $fche->ph_unit = $request->ph_unit;
            $fche->ph_value = $request->ph_value;
            $fche->nitrogen_para = $request->nitrogen_para;
            $fche->nitrogen_method = $request->nitrogen_method;
            $fche->nitrogen_result = $request->nitrogen_result;
            $fche->nitrogen_unit = $request->nitrogen_unit;
            $fche->nitrogen_value = $request->nitrogen_value;
            $fche->phos_para = $request->phos_para;
            $fche->phos_method = $request->phos_method;
            $fche->phos_result = $request->phos_result;
            $fche->phos_unit = $request->phos_unit;
            $fche->phos_value = $request->phos_value;
            $fche->solid_para = $request->solid_para;
            $fche->solid_method = $request->solid_method;
            $fche->solid_result = $request->solid_result;
            $fche->solid_unit = $request->solid_unit;
            $fche->solid_value = $request->solid_value;
            $fche->name = $request->name;
            $fche->position = $request->position;
            $fche->check1 = $request->check1;
            $fche->check2 = $request->check2;
            $fche->save();

            if($fche)
            {
                $fche_finance = new Fcar0500Finance;
                $fche_finance->fcar0500_id = $fche->id;
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
        $che = Fcar0500::find($id);
        return view('backend.labs.wastewater.fcar0500s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fcar0500::find($id);
        return view('backend.labs.wastewater.fcar0500s.edit',compact('che'));
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
            $fche = Fcar0500::find($id);
            if($fche->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/ww_fcar0500s/'.$fche->sign))){

                    unlink('photos/ww_fcar0500s/'.$fche->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/ww_fcar0500s');
                $file->move($path, $filename);

                $fche->sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->report_no = $request->report_no;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->analysis_date = $request->analysis_date;
            $fche->issue_date = $request->issue_date;
            $fche->result = $request->result;
            $fche->bod_para = $request->bod_para;
            $fche->bod_method = $request->bod_method;
            $fche->bod_result = $request->bod_result;
            $fche->bod_unit = $request->bod_unit;
            $fche->bod_value = $request->bod_value;
            $fche->cod_para = $request->cod_para;
            $fche->cod_method = $request->cod_method;
            $fche->cod_result = $request->cod_result;
            $fche->cod_unit = $request->cod_unit;
            $fche->cod_value = $request->cod_value;
            $fche->oil_para = $request->oil_para;
            $fche->oil_method = $request->oil_method;
            $fche->oil_result = $request->oil_result;
            $fche->oil_unit = $request->oil_unit;
            $fche->oil_value = $request->oil_value;
            $fche->ph_para = $request->ph_para;
            $fche->ph_method = $request->ph_method;
            $fche->ph_result = $request->ph_result;
            $fche->ph_unit = $request->ph_unit;
            $fche->ph_value = $request->ph_value;
            $fche->nitrogen_para = $request->nitrogen_para;
            $fche->nitrogen_method = $request->nitrogen_method;
            $fche->nitrogen_result = $request->nitrogen_result;
            $fche->nitrogen_unit = $request->nitrogen_unit;
            $fche->nitrogen_value = $request->nitrogen_value;
            $fche->phos_para = $request->phos_para;
            $fche->phos_method = $request->phos_method;
            $fche->phos_result = $request->phos_result;
            $fche->phos_unit = $request->phos_unit;
            $fche->phos_value = $request->phos_value;
            $fche->solid_para = $request->solid_para;
            $fche->solid_method = $request->solid_method;
            $fche->solid_result = $request->solid_result;
            $fche->solid_unit = $request->solid_unit;
            $fche->solid_value = $request->solid_value;
            $fche->name = $request->name;
            $fche->position = $request->position;
            $fche->check1 = $request->check1;
            $fche->check2 = $request->check2;
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
        $che = Fcar0500::find($id);

        if($che->sign != null){
            if(file_exists(public_path('photos/ww_fcar0500s/'.$che->sign))){

                unlink('photos/ww_fcar0500s/'.$che->sign);

            }
        }

        Fcar0500::where('id',$id)->delete();
        Fcar0500Finance::where('fcar0500_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fcar0500::find($id);
        return view('backend.labs.wastewater.fcar0500s.print',compact('che'));
    }
}
