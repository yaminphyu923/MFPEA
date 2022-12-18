<?php

namespace App\Http\Controllers\MicroWorksheet;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MicroWorksheets\F03m06;
use App\Models\MicroWorksheets\F03m06Count;
use App\Models\MicroWorksheets\F03m06Finance;

class F03m06Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-03-M-06', ['only' => ['create']]);
    }

    public function index()
    {
        $f03m06s = F03m06::all();
        return view('backend.labs.micro_worksheets.f03m06s.show',compact('f03m06s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.micro_worksheets.f03m06s.create');
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
            $m = new F03m06;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_f03m06s/analysed_sign');
                $file->move($path, $filename);

                $m->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_f03m06s/checked_sign');
                $file->move($path, $filename);

                $m->checked_sign = $filename;
            }

            $m->job_number = $request->job_number;
            $m->product_name = $request->product_name;
            $m->received_date = $request->received_date;
            $m->initiated_date = $request->initiated_date;
            $m->reported_date = $request->reported_date;
            $m->period = $request->period;
            $m->homogenate = $request->homogenate;
            $m->method = $request->method;
            $m->zero_plate1 = $request->zero_plate1;
            $m->zero_plate2 = $request->zero_plate2;
            $m->minus_one_plate1 = $request->minus_one_plate1;
            $m->minus_one_plate2 = $request->minus_one_plate2;
            $m->minus_two_plate1 = $request->minus_two_plate1;
            $m->minus_two_plate2 = $request->minus_two_plate2;
            $m->minus_three_plate1 = $request->minus_three_plate1;
            $m->minus_three_plate2 = $request->minus_three_plate2;
            $m->minus_four_plate1 = $request->minus_four_plate1;
            $m->minus_four_plate2 = $request->minus_four_plate2;
            $m->minus_five_plate1 = $request->minus_five_plate1;
            $m->minus_five_plate2 = $request->minus_five_plate2;
            $m->yeast_mould = $request->yeast_mould;
            $m->analysed_name = $request->analysed_name;
            $m->analysed_date = $request->analysed_date;
            $m->checked_name = $request->checked_name;
            $m->checked_date = $request->checked_date;
            $m->save();

            if($m)
            {

                $m_finance = new F03m06Finance;
                $m_finance->f03m06_id = $m->id;
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
        $f03m06 = F03m06::find($id);
        return view('backend.labs.micro_worksheets.f03m06s.detail',compact('f03m06'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $f03m06 = F03m06::find($id);
        return view('backend.labs.micro_worksheets.f03m06s.edit',compact('f03m06'));
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
            $m = F03m06::find($id);

            if($m->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/mw_f03m06s/analysed_sign/'.$m->analysed_sign))){

                    unlink('photos/mw_f03m06s/analysed_sign/'.$m->analysed_sign);

                }
            }

            if($m->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/mw_f03m06s/checked_sign/'.$m->checked_sign))){

                    unlink('photos/mw_f03m06s/checked_sign/'.$m->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_f03m06s/analysed_sign');
                $file->move($path, $filename);

                $m->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/mw_f03m06s/checked_sign');
                $file->move($path, $filename);

                $m->checked_sign = $filename;
            }

            $m->job_number = $request->job_number;
            $m->product_name = $request->product_name;
            $m->received_date = $request->received_date;
            $m->initiated_date = $request->initiated_date;
            $m->reported_date = $request->reported_date;
            $m->period = $request->period;
            $m->homogenate = $request->homogenate;
            $m->method = $request->method;
            $m->zero_plate1 = $request->zero_plate1;
            $m->zero_plate2 = $request->zero_plate2;
            $m->minus_one_plate1 = $request->minus_one_plate1;
            $m->minus_one_plate2 = $request->minus_one_plate2;
            $m->minus_two_plate1 = $request->minus_two_plate1;
            $m->minus_two_plate2 = $request->minus_two_plate2;
            $m->minus_three_plate1 = $request->minus_three_plate1;
            $m->minus_three_plate2 = $request->minus_three_plate2;
            $m->minus_four_plate1 = $request->minus_four_plate1;
            $m->minus_four_plate2 = $request->minus_four_plate2;
            $m->minus_five_plate1 = $request->minus_five_plate1;
            $m->minus_five_plate2 = $request->minus_five_plate2;
            $m->yeast_mould = $request->yeast_mould;
            $m->analysed_name = $request->analysed_name;
            $m->analysed_date = $request->analysed_date;
            $m->checked_name = $request->checked_name;
            $m->checked_date = $request->checked_date;
            $m->save();

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
        $m = F03m06::find($id);

        if($m->analyzed_sign != null){
            if(file_exists(public_path('photos/mw_f03m06s/analysed_sign/'.$m->analysed_sign))){

                unlink('photos/mw_f03m06s/analysed_sign/'.$m->analysed_sign);

            }
        }

        if($m->checked_sign != null){
            if(file_exists(public_path('photos/mw_f03m06s/checked_sign/'.$m->checked_sign))){

                unlink('photos/mw_f03m06s/checked_sign/'.$m->checked_sign);

            }
        }

        F03m06::where('id',$id)->delete();
        F03m06Finance::where('f03m06_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $f03m06 = F03m06::find($id);
        return view('backend.labs.micro_worksheets.f03m06s.print',compact('f03m06'));
    }
}
