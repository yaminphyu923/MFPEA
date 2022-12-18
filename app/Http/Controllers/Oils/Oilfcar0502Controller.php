<?php

namespace App\Http\Controllers\Oils;

use Exception;
use Illuminate\Http\Request;
use App\Models\Oils\Oilfcar0502;
use App\Http\Controllers\Controller;
use App\Models\Oils\Oilfcar0502Finance;

class Oilfcar0502Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-CAR-05-02(Oil Test)', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Oilfcar0502::all();
        return view('backend.labs.oils.oilfcar0502s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.oils.oilfcar0502s.create');
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
            $fche = new Oilfcar0502;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/oil_oilfcar0502s');
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
            $fche->gravity_para = $request->gravity_para;
            $fche->gravity_method = $request->gravity_method;
            $fche->gravity_result = $request->gravity_result;
            $fche->index_para = $request->index_para;
            $fche->index_method = $request->index_method;
            $fche->index_result = $request->index_result;
            $fche->sap_para = $request->sap_para;
            $fche->sap_method = $request->sap_method;
            $fche->sap_result = $request->sap_result;
            $fche->unsap_para = $request->unsap_para;
            $fche->unsap_method = $request->unsap_method;
            $fche->unsap_result = $request->unsap_result;
            $fche->iodine_para = $request->iodine_para;
            $fche->iodine_method = $request->iodine_method;
            $fche->iodine_result = $request->iodine_result;
            $fche->acid_para = $request->acid_para;
            $fche->acid_method = $request->acid_method;
            $fche->acid_result = $request->acid_result;
            $fche->peroxide_para = $request->peroxide_para;
            $fche->peroxide_method = $request->peroxide_method;
            $fche->peroxide_result = $request->peroxide_result;
            $fche->moisture_para = $request->moisture_para;
            $fche->moisture_method = $request->moisture_method;
            $fche->moisture_result = $request->moisture_result;
            $fche->remark = $request->remark;
            $fche->name = $request->name;
            $fche->position = $request->position;
            $fche->check1 = $request->check1;
            $fche->check2 = $request->check2;
            $fche->save();

            if($fche)
            {
                $fche_finance = new Oilfcar0502Finance;
                $fche_finance->oilfcar0502_id = $fche->id;
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
        $che = Oilfcar0502::find($id);
        return view('backend.labs.oils.oilfcar0502s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Oilfcar0502::find($id);
        return view('backend.labs.oils.oilfcar0502s.edit',compact('che'));
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
            $fche = Oilfcar0502::find($id);
            if($fche->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/oil_oilfcar0502s/'.$fche->sign))){

                    unlink('photos/oil_oilfcar0502s/'.$fche->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/oil_oilfcar0502s');
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
            $fche->gravity_para = $request->gravity_para;
            $fche->gravity_method = $request->gravity_method;
            $fche->gravity_result = $request->gravity_result;
            $fche->index_para = $request->index_para;
            $fche->index_method = $request->index_method;
            $fche->index_result = $request->index_result;
            $fche->sap_para = $request->sap_para;
            $fche->sap_method = $request->sap_method;
            $fche->sap_result = $request->sap_result;
            $fche->unsap_para = $request->unsap_para;
            $fche->unsap_method = $request->unsap_method;
            $fche->unsap_result = $request->unsap_result;
            $fche->iodine_para = $request->iodine_para;
            $fche->iodine_method = $request->iodine_method;
            $fche->iodine_result = $request->iodine_result;
            $fche->acid_para = $request->acid_para;
            $fche->acid_method = $request->acid_method;
            $fche->acid_result = $request->acid_result;
            $fche->peroxide_para = $request->peroxide_para;
            $fche->peroxide_method = $request->peroxide_method;
            $fche->peroxide_result = $request->peroxide_result;
            $fche->moisture_para = $request->moisture_para;
            $fche->moisture_method = $request->moisture_method;
            $fche->moisture_result = $request->moisture_result;
            $fche->remark = $request->remark;
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
        $che = Oilfcar0502::find($id);

        if($che->sign != null){
            if(file_exists(public_path('photos/oil_oilfcar0502s/'.$che->sign))){

                unlink('photos/oil_oilfcar0502s/'.$che->sign);

            }
        }

        Oilfcar0502::where('id',$id)->delete();
        Oilfcar0502Finance::where('oilfcar0502_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Oilfcar0502::find($id);
        return view('backend.labs.oils.oilfcar0502s.print',compact('che'));
    }
}
