<?php

namespace App\Http\Controllers\ChemicalReports;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChemicalReports\Water;

class WaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:water_test_report', ['only' => ['create']]);
    }

    public function index()
    {
        $waters = Water::get();
        return view('backend.labs.chemical_reports.waters.index',compact('waters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.chemical_reports.waters.create');
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
            $water = new Water;

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_waters');
                $file->move($path, $filename);

                $water->sign = $filename;
            }

            $water->title = $request->title;
            $water->company_name = $request->company_name;
            $water->address = $request->address;
            $water->phone = $request->phone;
            $water->lab_received_date = $request->lab_received_date;
            $water->sample_number = $request->sample_number;
            $water->product_name = $request->product_name;
            $water->test_performed_date = $request->test_performed_date;
            $water->test_type = $request->test_type;
            $water->issue_date = $request->issue_date;
            $water->results = $request->results;
            $water->total_para = $request->total_para;
            $water->total_method = $request->total_method;
            $water->total_result = $request->total_result;
            $water->calcium_para = $request->calcium_para;
            $water->calcium_method = $request->calcium_method;
            $water->calcium_result = $request->calcium_result;
            $water->mag_para = $request->mag_para;
            $water->mag_method = $request->mag_method;
            $water->mag_result = $request->mag_result;
            $water->solid_para = $request->solid_para;
            $water->solid_method = $request->solid_method;
            $water->solid_result = $request->solid_result;
            $water->dissolved_para = $request->dissolved_para;
            $water->dissolved_method = $request->dissolved_method;
            $water->dissolved_result = $request->dissolved_result;
            $water->suspended_para = $request->suspended_para;
            $water->suspended_method = $request->suspended_method;
            $water->suspended_result = $request->suspended_result;
            $water->ph_para = $request->ph_para;
            $water->ph_method = $request->ph_method;
            $water->ph_result = $request->ph_result;
            $water->conductivity_para = $request->conductivity_para;
            $water->conductivity_method = $request->conductivity_method;
            $water->conductivity_result = $request->conductivity_result;
            $water->method = $request->method;
            $water->date = $request->date;
            $water->checked_name = $request->checked_name;
            $water->position = $request->position;
            $water->save();

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
        $water = Water::find($id);
        return view('backend.labs.chemical_reports.waters.detail',compact('water'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $water = Water::find($id);
        return view('backend.labs.chemical_reports.waters.edit',compact('water'));
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
            $water = Water::find($id);

            if($water->sign != null && $request->file("sign")){
                if(file_exists(public_path('photos/cr_waters/'.$water->sign))){

                    unlink('photos/cr_waters/'.$water->sign);

                }
            }

            if($request->file("sign")) {
                $file=$request->file("sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/cr_waters');
                $file->move($path, $filename);

                $water->sign = $filename;
            }

            $water->title = $request->title;
            $water->company_name = $request->company_name;
            $water->address = $request->address;
            $water->phone = $request->phone;
            $water->lab_received_date = $request->lab_received_date;
            $water->sample_number = $request->sample_number;
            $water->product_name = $request->product_name;
            $water->test_performed_date = $request->test_performed_date;
            $water->test_type = $request->test_type;
            $water->issue_date = $request->issue_date;
            $water->results = $request->results;
            $water->total_para = $request->total_para;
            $water->total_method = $request->total_method;
            $water->total_result = $request->total_result;
            $water->calcium_para = $request->calcium_para;
            $water->calcium_method = $request->calcium_method;
            $water->calcium_result = $request->calcium_result;
            $water->mag_para = $request->mag_para;
            $water->mag_method = $request->mag_method;
            $water->mag_result = $request->mag_result;
            $water->solid_para = $request->solid_para;
            $water->solid_method = $request->solid_method;
            $water->solid_result = $request->solid_result;
            $water->dissolved_para = $request->dissolved_para;
            $water->dissolved_method = $request->dissolved_method;
            $water->dissolved_result = $request->dissolved_result;
            $water->suspended_para = $request->suspended_para;
            $water->suspended_method = $request->suspended_method;
            $water->suspended_result = $request->suspended_result;
            $water->ph_para = $request->ph_para;
            $water->ph_method = $request->ph_method;
            $water->ph_result = $request->ph_result;
            $water->conductivity_para = $request->conductivity_para;
            $water->conductivity_method = $request->conductivity_method;
            $water->conductivity_result = $request->conductivity_result;
            $water->method = $request->method;
            $water->date = $request->date;
            $water->checked_name = $request->checked_name;
            $water->position = $request->position;
            $water->save();

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
        $water = Water::find($id);
        if($water->sign != null){
            if(file_exists(public_path('photos/cr_waters/'.$water->sign))){

                unlink('photos/cr_waters/'.$water->sign);

            }
        }

        water::where('id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $water = Water::find($id);
        return view('backend.labs.chemical_reports.waters.print',compact('water'));
    }
}
