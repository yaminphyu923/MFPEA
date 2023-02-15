<?php

namespace App\Http\Controllers\ChemicalReports;

use Exception;
use Illuminate\Http\Request;
use App\Models\ChemicalReports\Gc;
use App\Http\Controllers\Controller;

class GCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:gc_test_report', ['only' => ['create']]);
    }

    public function index()
    {
        $gcs = Gc::get();
        return view('backend.labs.chemical_reports.gcs.index',compact('gcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.chemical_reports.gcs.create');
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
            $gc = new Gc;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_gcs');
                $file->move($path, $filename);

                $gc->sign = $filename;
            }

            $gc->title = $request->title;
            $gc->company_name = $request->company_name;
            $gc->address = $request->address;
            $gc->phone = $request->phone;
            $gc->lab_received_date = $request->lab_received_date;
            $gc->sample_number = $request->sample_number;
            $gc->product_name = $request->product_name;
            $gc->test_performed_date = $request->test_performed_date;
            $gc->test_type = $request->test_type;
            $gc->issue_date = $request->issue_date;
            $gc->results = $request->results;
            $gc->lauric_12_0_para = $request->lauric_12_0_para;
            $gc->lauric_12_0_method = $request->lauric_12_0_method;
            $gc->lauric_12_0_result = $request->lauric_12_0_result;
            $gc->myristic_14_0_para = $request->myristic_14_0_para;
            $gc->myristic_14_0_method = $request->myristic_14_0_method;
            $gc->myristic_14_0_result = $request->myristic_14_0_result;
            $gc->myristoleic_14_1_para = $request->myristoleic_14_1_para;
            $gc->myristoleic_14_1_method = $request->myristoleic_14_1_method;
            $gc->myristoleic_14_1_result = $request->myristoleic_14_1_result;
            $gc->palmitic_16_0_para = $request->palmitic_16_0_para;
            $gc->palmitic_16_0_method = $request->palmitic_16_0_method;
            $gc->palmitic_16_0_result = $request->palmitic_16_0_result;
            $gc->palmitoleic_16_1_para = $request->palmitoleic_16_1_para;
            $gc->palmitoleic_16_1_method = $request->palmitoleic_16_1_method;
            $gc->palmitoleic_16_1_result = $request->palmitoleic_16_1_result;
            $gc->stearic_18_0_para = $request->stearic_18_0_para;
            $gc->stearic_18_0_method = $request->stearic_18_0_method;
            $gc->stearic_18_0_result = $request->stearic_18_0_result;
            $gc->oleictrans_18_1_para = $request->oleictrans_18_1_para;
            $gc->oleictrans_18_1_method = $request->oleictrans_18_1_method;
            $gc->oleictrans_18_1_result = $request->oleictrans_18_1_result;
            $gc->oleic_18_1_para = $request->oleic_18_1_para;
            $gc->oleic_18_1_method = $request->oleic_18_1_method;
            $gc->oleic_18_1_result = $request->oleic_18_1_result;
            $gc->linoleictrans_18_2_para = $request->linoleictrans_18_2_para;
            $gc->linoleictrans_18_2_method = $request->linoleictrans_18_2_method;
            $gc->linoleictrans_18_2_result = $request->linoleictrans_18_2_result;
            $gc->linoleic_18_2_para = $request->linoleic_18_2_para;
            $gc->linoleic_18_2_method = $request->linoleic_18_2_method;
            $gc->linoleic_18_2_result = $request->linoleic_18_2_result;
            $gc->linoleic_18_3_para = $request->linoleic_18_3_para;
            $gc->linoleic_18_3_method = $request->linoleic_18_3_method;
            $gc->linoleic_18_3_result = $request->linoleic_18_3_result;
            $gc->arachidic_20_0_para = $request->arachidic_20_0_para;
            $gc->arachidic_20_0_method = $request->arachidic_20_0_method;
            $gc->arachidic_20_0_result = $request->arachidic_20_0_result;
            $gc->paullinic_20_1_para = $request->paullinic_20_1_para;
            $gc->paullinic_20_1_method = $request->paullinic_20_1_method;
            $gc->paullinic_20_1_result = $request->paullinic_20_1_result;
            $gc->arachidonic_20_4_para = $request->arachidonic_20_4_para;
            $gc->arachidonic_20_4_method = $request->arachidonic_20_4_method;
            $gc->arachidonic_20_4_result = $request->arachidonic_20_4_result;
            $gc->bchenic_22_0_para = $request->bchenic_22_0_para;
            $gc->bchenic_22_0_method = $request->bchenic_22_0_method;
            $gc->bchenic_22_0_result = $request->bchenic_22_0_result;
            $gc->erucic_22_1_para = $request->erucic_22_1_para;
            $gc->erucic_22_1_method = $request->erucic_22_1_method;
            $gc->erucic_22_1_result = $request->erucic_22_1_result;
            $gc->lignoceric_24_0_para = $request->lignoceric_24_0_para;
            $gc->lignoceric_24_0_method = $request->lignoceric_24_0_method;
            $gc->lignoceric_24_0_result = $request->lignoceric_24_0_result;
            $gc->method = $request->method;
            $gc->date = $request->date;
            $gc->checked_name = $request->checked_name;
            $gc->position = $request->position;
            $gc->save();

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
        $gc = Gc::find($id);
        return view('backend.labs.chemical_reports.gcs.detail',compact('gc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gc = Gc::find($id);
        return view('backend.labs.chemical_reports.gcs.edit',compact('gc'));
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
            $gc = Gc::find($id);

            if($gc->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/cr_gcs/'.$gc->sign))){

                    unlink('photos/cr_gcs/'.$gc->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_gcs');
                $file->move($path, $filename);

                $gc->sign = $filename;
            }

            $gc->title = $request->title;
            $gc->company_name = $request->company_name;
            $gc->address = $request->address;
            $gc->phone = $request->phone;
            $gc->lab_received_date = $request->lab_received_date;
            $gc->sample_number = $request->sample_number;
            $gc->product_name = $request->product_name;
            $gc->test_performed_date = $request->test_performed_date;
            $gc->test_type = $request->test_type;
            $gc->issue_date = $request->issue_date;
            $gc->results = $request->results;
            $gc->lauric_12_0_para = $request->lauric_12_0_para;
            $gc->lauric_12_0_method = $request->lauric_12_0_method;
            $gc->lauric_12_0_result = $request->lauric_12_0_result;
            $gc->myristic_14_0_para = $request->myristic_14_0_para;
            $gc->myristic_14_0_method = $request->myristic_14_0_method;
            $gc->myristic_14_0_result = $request->myristic_14_0_result;
            $gc->myristoleic_14_1_para = $request->myristoleic_14_1_para;
            $gc->myristoleic_14_1_method = $request->myristoleic_14_1_method;
            $gc->myristoleic_14_1_result = $request->myristoleic_14_1_result;
            $gc->palmitic_16_0_para = $request->palmitic_16_0_para;
            $gc->palmitic_16_0_method = $request->palmitic_16_0_method;
            $gc->palmitic_16_0_result = $request->palmitic_16_0_result;
            $gc->palmitoleic_16_1_para = $request->palmitoleic_16_1_para;
            $gc->palmitoleic_16_1_method = $request->palmitoleic_16_1_method;
            $gc->palmitoleic_16_1_result = $request->palmitoleic_16_1_result;
            $gc->stearic_18_0_para = $request->stearic_18_0_para;
            $gc->stearic_18_0_method = $request->stearic_18_0_method;
            $gc->stearic_18_0_result = $request->stearic_18_0_result;
            $gc->oleictrans_18_1_para = $request->oleictrans_18_1_para;
            $gc->oleictrans_18_1_method = $request->oleictrans_18_1_method;
            $gc->oleictrans_18_1_result = $request->oleictrans_18_1_result;
            $gc->oleic_18_1_para = $request->oleic_18_1_para;
            $gc->oleic_18_1_method = $request->oleic_18_1_method;
            $gc->oleic_18_1_result = $request->oleic_18_1_result;
            $gc->linoleictrans_18_2_para = $request->linoleictrans_18_2_para;
            $gc->linoleictrans_18_2_method = $request->linoleictrans_18_2_method;
            $gc->linoleictrans_18_2_result = $request->linoleictrans_18_2_result;
            $gc->linoleic_18_2_para = $request->linoleic_18_2_para;
            $gc->linoleic_18_2_method = $request->linoleic_18_2_method;
            $gc->linoleic_18_2_result = $request->linoleic_18_2_result;
            $gc->linoleic_18_3_para = $request->linoleic_18_3_para;
            $gc->linoleic_18_3_method = $request->linoleic_18_3_method;
            $gc->linoleic_18_3_result = $request->linoleic_18_3_result;
            $gc->arachidic_20_0_para = $request->arachidic_20_0_para;
            $gc->arachidic_20_0_method = $request->arachidic_20_0_method;
            $gc->arachidic_20_0_result = $request->arachidic_20_0_result;
            $gc->paullinic_20_1_para = $request->paullinic_20_1_para;
            $gc->paullinic_20_1_method = $request->paullinic_20_1_method;
            $gc->paullinic_20_1_result = $request->paullinic_20_1_result;
            $gc->arachidonic_20_4_para = $request->arachidonic_20_4_para;
            $gc->arachidonic_20_4_method = $request->arachidonic_20_4_method;
            $gc->arachidonic_20_4_result = $request->arachidonic_20_4_result;
            $gc->bchenic_22_0_para = $request->bchenic_22_0_para;
            $gc->bchenic_22_0_method = $request->bchenic_22_0_method;
            $gc->bchenic_22_0_result = $request->bchenic_22_0_result;
            $gc->erucic_22_1_para = $request->erucic_22_1_para;
            $gc->erucic_22_1_method = $request->erucic_22_1_method;
            $gc->erucic_22_1_result = $request->erucic_22_1_result;
            $gc->lignoceric_24_0_para = $request->lignoceric_24_0_para;
            $gc->lignoceric_24_0_method = $request->lignoceric_24_0_method;
            $gc->lignoceric_24_0_result = $request->lignoceric_24_0_result;
            $gc->method = $request->method;
            $gc->date = $request->date;
            $gc->checked_name = $request->checked_name;
            $gc->position = $request->position;
            $gc->save();

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
        $gc = Gc::find($id);
        if($gc->sign != null){
            if(file_exists(public_path('photos/cr_gcs/'.$gc->sign))){

                unlink('photos/cr_gcs/'.$gc->sign);

            }
        }

        Gc::where('id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $gc = Gc::find($id);
        return view('backend.labs.chemical_reports.gcs.print',compact('gc'));
    }
}
