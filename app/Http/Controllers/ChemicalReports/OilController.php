<?php

namespace App\Http\Controllers\ChemicalReports;

use Exception;
use Illuminate\Http\Request;
use App\Models\ChemicalReports\Oil;
use App\Http\Controllers\Controller;

class OilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:oil_test_report', ['only' => ['create']]);
    }

    public function index()
    {
        $oils = Oil::get();
        return view('backend.labs.chemical_reports.oils.index',compact('oils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.chemical_reports.oils.create');
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
            $oil = new Oil;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_oils');
                $file->move($path, $filename);

                $oil->sign = $filename;
            }

            $oil->title = $request->title;
            $oil->company_name = $request->company_name;
            $oil->address = $request->address;
            $oil->phone = $request->phone;
            $oil->lab_received_date = $request->lab_received_date;
            $oil->sample_number = $request->sample_number;
            $oil->product_name = $request->product_name;
            $oil->test_performed_date = $request->test_performed_date;
            $oil->test_type = $request->test_type;
            $oil->issue_date = $request->issue_date;
            $oil->results = $request->results;
            $oil->gravity_para = $request->gravity_para;
            $oil->gravity_method = $request->gravity_method;
            $oil->gravity_result = $request->gravity_result;
            $oil->index_para = $request->index_para;
            $oil->index_method = $request->index_method;
            $oil->index_result = $request->index_result;
            $oil->sapo_para = $request->sapo_para;
            $oil->sapo_method = $request->sapo_method;
            $oil->sapo_result = $request->sapo_result;
            $oil->unsapo_para = $request->unsapo_para;
            $oil->unsapo_method = $request->unsapo_method;
            $oil->unsapo_result = $request->unsapo_result;
            $oil->iodine_para = $request->iodine_para;
            $oil->iodine_method = $request->iodine_method;
            $oil->iodine_result = $request->iodine_result;
            $oil->acid_para = $request->acid_para;
            $oil->acid_method = $request->acid_method;
            $oil->acid_result = $request->acid_result;
            $oil->peroxide_para = $request->peroxide_para;
            $oil->peroxide_method = $request->peroxide_method;
            $oil->peroxide_result = $request->peroxide_result;
            $oil->moisture_para = $request->moisture_para;
            $oil->moisture_method = $request->moisture_method;
            $oil->moisture_result = $request->moisture_result;
            $oil->method = $request->method;

            $oil->checked_name = $request->checked_name;
            $oil->position = $request->position;
            $oil->save();

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
        $oil = Oil::find($id);
        return view('backend.labs.chemical_reports.oils.detail',compact('oil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oil = Oil::find($id);
        return view('backend.labs.chemical_reports.oils.edit',compact('oil'));
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
            $oil = Oil::find($id);

            if($oil->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/cr_oils/'.$oil->sign))){

                    unlink('photos/cr_oils/'.$oil->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_oils');
                $file->move($path, $filename);

                $oil->sign = $filename;
            }

            $oil->title = $request->title;
            $oil->company_name = $request->company_name;
            $oil->address = $request->address;
            $oil->phone = $request->phone;
            $oil->lab_received_date = $request->lab_received_date;
            $oil->sample_number = $request->sample_number;
            $oil->product_name = $request->product_name;
            $oil->test_performed_date = $request->test_performed_date;
            $oil->test_type = $request->test_type;
            $oil->issue_date = $request->issue_date;
            $oil->results = $request->results;
            $oil->gravity_para = $request->gravity_para;
            $oil->gravity_method = $request->gravity_method;
            $oil->gravity_result = $request->gravity_result;
            $oil->index_para = $request->index_para;
            $oil->index_method = $request->index_method;
            $oil->index_result = $request->index_result;
            $oil->sapo_para = $request->sapo_para;
            $oil->sapo_method = $request->sapo_method;
            $oil->sapo_result = $request->sapo_result;
            $oil->unsapo_para = $request->unsapo_para;
            $oil->unsapo_method = $request->unsapo_method;
            $oil->unsapo_result = $request->unsapo_result;
            $oil->iodine_para = $request->iodine_para;
            $oil->iodine_method = $request->iodine_method;
            $oil->iodine_result = $request->iodine_result;
            $oil->acid_para = $request->acid_para;
            $oil->acid_method = $request->acid_method;
            $oil->acid_result = $request->acid_result;
            $oil->peroxide_para = $request->peroxide_para;
            $oil->peroxide_method = $request->peroxide_method;
            $oil->peroxide_result = $request->peroxide_result;
            $oil->moisture_para = $request->moisture_para;
            $oil->moisture_method = $request->moisture_method;
            $oil->moisture_result = $request->moisture_result;
            $oil->method = $request->method;
            $oil->checked_name = $request->checked_name;
            $oil->position = $request->position;
            $oil->save();

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
        $oil = Oil::find($id);
        if($oil->sign != null){
            if(file_exists(public_path('photos/cr_oils/'.$oil->sign))){

                unlink('photos/cr_oils/'.$oil->sign);

            }
        }

        Oil::where('id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $oil = Oil::find($id);
        return view('backend.labs.chemical_reports.oils.print',compact('oil'));
    }
}
