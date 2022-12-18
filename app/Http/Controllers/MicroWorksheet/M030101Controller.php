<?php

namespace App\Http\Controllers\MicroWorksheet;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MicroWorksheets\M030101;
use App\Models\MicroWorksheets\M030101Count;
use App\Models\MicroWorksheets\M030101Finance;

class M030101Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-M03-01-01', ['only' => ['create']]);
    }

    public function index()
    {
        $ms = M030101::all();
        return view('backend.labs.micro_worksheets.m030101s.show',compact('ms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.micro_worksheets.m030101s.create',compact('customers'));
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
            $m = new M030101;

            if($request->file("analyzed_sign")) {
                $file=$request->file("analyzed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_m030101s/analyzed_sign');
                $file->move($path, $filename);

                $m->analyzed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_m030101s/checked_sign');
                $file->move($path, $filename);

                $m->checked_sign = $filename;
            }

            $m->job_number = $request->job_number;
            $m->analysis_date = $request->analysis_date;
            $m->customer_id = $request->customer_id;
            $m->description = $request->description;
            $m->report_date = $request->report_date;
            $m->received_date = $request->received_date;
            $m->incubation_hours = $request->incubation_hours;
            $m->reference_method = $request->reference_method;
            $m->sample_homogenate = $request->sample_homogenate;
            $m->diluent_homogenate = $request->diluent_homogenate;
            $m->calculation = $request->calculation;
            $m->result = $request->result;
            $m->analyzed_by = $request->analyzed_by;
            $m->analyzed_position = $request->analyzed_position;
            $m->analyzed_date = $request->analyzed_date;
            $m->checked_by = $request->checked_by;
            $m->checked_position = $request->checked_position;
            $m->checked_date = $request->checked_date;
            $m->save();

            if($m)
            {
                for($i=0;$i<count($request['dilution']);$i++)
                {
                    $test = new M030101Count;
                    $test->m030101_id = $m->id;
                    $test->dilution = $request['dilution'][$i];
                    $test->plate1 = $request['plate1'][$i];
                    $test->plate2 = $request['plate2'][$i];
                    $test->save();
                }

                $m_finance = new M030101Finance;
                $m_finance->m030101_id = $m->id;
                $m_finance->save();

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
        $m = M030101::with('customer')->find($id);
        $m_counts = M030101Count::where('m030101_id',$id)->get();
        return view('backend.labs.micro_worksheets.m030101s.detail',compact('m','m_counts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $m = M030101::find($id);
        $m_counts = M030101Count::where('m030101_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.micro_worksheets.m030101s.edit',compact('m','m_counts','customers'));
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
            $m = M030101::find($id);

            if($m->analyzed_sign != null && $request->file("analyzed_sign")){
                if(file_exists(public_path('photos/mw_m030101s/analyzed_sign/'.$m->analyzed_sign))){

                    unlink('photos/mw_m030101s/analyzed_sign/'.$m->analyzed_sign);

                }
            }

            if($m->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/mw_m030101s/checked_sign/'.$m->checked_sign))){

                    unlink('photos/mw_m030101s/checked_sign/'.$m->checked_sign);

                }
            }

            if($request->file("analyzed_sign")) {
                $file=$request->file("analyzed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_m030101s/analyzed_sign');
                $file->move($path, $filename);

                $m->analyzed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_m030101s/checked_sign');
                $file->move($path, $filename);

                $m->checked_sign = $filename;
            }

            $m->job_number = $request->job_number;
            $m->analysis_date = $request->analysis_date;
            $m->customer_id = $request->customer_id;
            $m->description = $request->description;
            $m->report_date = $request->report_date;
            $m->received_date = $request->received_date;
            $m->incubation_hours = $request->incubation_hours;
            $m->reference_method = $request->reference_method;
            $m->sample_homogenate = $request->sample_homogenate;
            $m->diluent_homogenate = $request->diluent_homogenate;
            $m->calculation = $request->calculation;
            $m->result = $request->result;
            $m->analyzed_by = $request->analyzed_by;
            $m->analyzed_position = $request->analyzed_position;
            $m->analyzed_date = $request->analyzed_date;
            $m->checked_by = $request->checked_by;
            $m->checked_position = $request->checked_position;
            $m->checked_date = $request->checked_date;
            $m->save();

            if($m)
            {
                if(isset($request['dilution']))
                {
                    if(count($request['dilution']) > 0)
                    {
                        for($i=0;$i<count($request['dilution']);$i++)
                        {
                            if(isset($request['m_count_id'][$i]))
                            {
                                $additional['dilution'] = $request['dilution'][$i];
                                $additional['plate1'] = $request['plate1'][$i];
                                $additional['plate2'] = $request['plate2'][$i];
                                $update_additional = M030101Count::where('id',$request['m_count_id'][$i])
                                                    ->update($additional);
                            }
                        }
                    }
                }

            }
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
        $m = M030101::find($id);

        if($m->analyzed_sign != null){
            if(file_exists(public_path('photos/mw_m030101s/analyzed_sign/'.$m->analyzed_sign))){

                unlink('photos/mw_m030101s/analyzed_sign/'.$m->analyzed_sign);

            }
        }

        if($m->checked_sign != null){
            if(file_exists(public_path('photos/mw_m030101s/checked_sign/'.$m->checked_sign))){

                unlink('photos/mw_m030101s/checked_sign/'.$m->checked_sign);

            }
        }

        M030101::where('id',$id)->delete();
        M030101Count::where('m030101_id',$id)->delete();
        M030101Finance::where('m030101_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $m = M030101::find($id);
        $m_counts = M030101Count::where('m030101_id',$id)->get();
        return view('backend.labs.micro_worksheets.m030101s.print',compact('m','m_counts'));
    }
}
