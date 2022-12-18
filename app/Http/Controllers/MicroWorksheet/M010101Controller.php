<?php

namespace App\Http\Controllers\MicroWorksheet;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\MWM010101Count;
use App\Http\Controllers\Controller;
use App\Models\MicroWorksheets\M010101;
use App\Models\MicroWorksheets\M010101Count;
use App\Models\MicroWorksheets\M010101Finance;

class M010101Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-M01-01-01', ['only' => ['create']]);
    }

    public function index()
    {
        $ms = M010101::all();
        return view('backend.labs.micro_worksheets.m010101s.show',compact('ms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.micro_worksheets.m010101s.create',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'academic_year_id' => 'required',
        //     'password' => 'required|required_with:confirm_password|same:confirm_password',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->with('errorForm', $validator->errors()->getMessages())
        //         ->withInput();
        // }

        try {
            $m = new M010101;

            if($request->file("analyzed_sign")) {
                $file=$request->file("analyzed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_m010101s/analyzed_sign');
                $file->move($path, $filename);

                $m->analyzed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_m010101s/checked_sign');
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
                    $test = new M010101Count;
                    $test->m010101_id = $m->id;
                    $test->dilution = $request['dilution'][$i];
                    $test->plate1 = $request['plate1'][$i];
                    $test->plate2 = $request['plate2'][$i];
                    $test->save();
                }

                $m_finance = new M010101Finance;
                $m_finance->m010101_id = $m->id;
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
        $m = M010101::with('customer')->find($id);
        $m_counts = M010101Count::where('m010101_id',$id)->get();
        return view('backend.labs.micro_worksheets.m010101s.detail',compact('m','m_counts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $m = M010101::find($id);
        $m_counts = M010101Count::where('m010101_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.micro_worksheets.m010101s.edit',compact('m','m_counts','customers'));
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
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'academic_year_id' => 'required',
        //     'password' => 'required|required_with:confirm_password|same:confirm_password',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->with('errorForm', $validator->errors()->getMessages())
        //         ->withInput();
        // }

        try {
            $m = M010101::find($id);

            if($m->analyzed_sign != null && $request->file("analyzed_sign")){
                if(file_exists(public_path('photos/mw_m010101s/analyzed_sign/'.$m->analyzed_sign))){

                    unlink('photos/mw_m010101s/analyzed_sign/'.$m->analyzed_sign);

                }
            }

            if($m->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/mw_m010101s/checked_sign/'.$m->checked_sign))){

                    unlink('photos/mw_m010101s/checked_sign/'.$m->checked_sign);

                }
            }

            if($request->file("analyzed_sign")) {
                $file=$request->file("analyzed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_m010101s/analyzed_sign');
                $file->move($path, $filename);

                $m->analyzed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_m010101s/checked_sign');
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
                                $update_additional = M010101Count::where('id',$request['m_count_id'][$i])
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
    public function destroy($id,Request $request)
    {
        $m = M010101::find($id);

        if($m->analyzed_sign != null){
            if(file_exists(public_path('photos/mw_m010101s/analyzed_sign/'.$m->analyzed_sign))){

                unlink('photos/mw_m010101s/analyzed_sign/'.$m->analyzed_sign);

            }
        }

        if($m->checked_sign != null){
            if(file_exists(public_path('photos/mw_m010101s/checked_sign/'.$m->checked_sign))){

                unlink('photos/mw_m010101s/checked_sign/'.$m->checked_sign);

            }
        }

        M010101::where('id',$id)->delete();
        M010101Count::where('m010101_id',$id)->delete();
        M010101Finance::where('m010101_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $m = M010101::find($id);
        $m_counts = M010101Count::where('m010101_id',$id)->get();
        return view('backend.labs.micro_worksheets.m010101s.print',compact('m','m_counts'));
    }
}
