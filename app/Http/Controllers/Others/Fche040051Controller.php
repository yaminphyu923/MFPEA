<?php

namespace App\Http\Controllers\Others;

use Illuminate\Http\Request;
use App\Models\Others\Fche040051;
use App\Http\Controllers\Controller;
use App\Models\Others\Fche040051Finance;
use Exception;

class Fche040051Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-00/51', ['only' => ['create']]);
    }
    public function index()
    {
        $fches = Fche040051::all();
        return view('backend.labs.others.fche040051s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.labs.others.fche040051s.create');
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
            $fche = new Fche040051;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040051s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040051s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->sample = $request->sample;
            $fche->sample_test1 = $request->sample_test1;
            $fche->sample_test2 = $request->sample_test2;
            $fche->magnesium = $request->magnesium;
            $fche->magnesium_test1 = $request->magnesium_test1;
            $fche->magnesium_test2 = $request->magnesium_test2;
            $fche->water = $request->water;
            $fche->water_test1 = $request->water_test1;
            $fche->water_test2 = $request->water_test2;
            $fche->hcl = $request->hcl;
            $fche->hcl_test1 = $request->hcl_test1;
            $fche->hcl_test2 = $request->hcl_test2;
            $fche->sample_titrant = $request->sample_titrant;
            $fche->sample_titrant_test1 = $request->sample_titrant_test1;
            $fche->sample_titrant_test2 = $request->sample_titrant_test2;
            $fche->blank_titrant = $request->blank_titrant;
            $fche->blank_titrant_test1 = $request->blank_titrant_test1;
            $fche->blank_titrant_test2 = $request->blank_titrant_test2;
            $fche->tvbn = $request->tvbn;
            $fche->tvbn_test1 = $request->tvbn_test1;
            $fche->tvbn_test2 = $request->tvbn_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
            $fche->analysed_name = $request->analysed_name;
            $fche->analysed_date = $request->analysed_date;
            $fche->checked_name = $request->checked_name;
            $fche->checked_date = $request->checked_date;
            $fche->save();

            if($fche)
            {
                $fche_finance = new fche040051Finance;
                $fche_finance->fche040051_id = $fche->id;
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
        $che = Fche040051::find($id);
        return view('backend.labs.others.fche040051s.detail',compact('che'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040051::find($id);
        return view('backend.labs.others.fche040051s.edit',compact('che'));
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
            $fche = Fche040051::find($id);
            if($fche->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/other_fche040051s/analysed_sign/'.$fche->analysed_sign))){

                    unlink('photos/other_fche040051s/analysed_sign/'.$fche->analysed_sign);

                }
            }

            if($fche->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/other_fche040051s/checked_sign/'.$fche->checked_sign))){

                    unlink('photos/other_fche040051s/checked_sign/'.$fche->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040051s/analysed_sign');
                $file->move($path, $filename);

                $fche->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/other_fche040051s/checked_sign');
                $file->move($path, $filename);

                $fche->checked_sign = $filename;
            }

            $fche->job_number = $request->job_number;
            $fche->sample_name = $request->sample_name;
            $fche->received_date = $request->received_date;
            $fche->initiated_date = $request->initiated_date;
            $fche->reported_date = $request->reported_date;
            $fche->method = $request->method;
            $fche->sample = $request->sample;
            $fche->sample_test1 = $request->sample_test1;
            $fche->sample_test2 = $request->sample_test2;
            $fche->magnesium = $request->magnesium;
            $fche->magnesium_test1 = $request->magnesium_test1;
            $fche->magnesium_test2 = $request->magnesium_test2;
            $fche->water = $request->water;
            $fche->water_test1 = $request->water_test1;
            $fche->water_test2 = $request->water_test2;
            $fche->hcl = $request->hcl;
            $fche->hcl_test1 = $request->hcl_test1;
            $fche->hcl_test2 = $request->hcl_test2;
            $fche->sample_titrant = $request->sample_titrant;
            $fche->sample_titrant_test1 = $request->sample_titrant_test1;
            $fche->sample_titrant_test2 = $request->sample_titrant_test2;
            $fche->blank_titrant = $request->blank_titrant;
            $fche->blank_titrant_test1 = $request->blank_titrant_test1;
            $fche->blank_titrant_test2 = $request->blank_titrant_test2;
            $fche->tvbn = $request->tvbn;
            $fche->tvbn_test1 = $request->tvbn_test1;
            $fche->tvbn_test2 = $request->tvbn_test2;
            $fche->result = $request->result;
            $fche->result_test1 = $request->result_test1;
            $fche->result_test2 = $request->result_test2;
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
        $che = Fche040051::find($id);

        if($che->analysed_sign != null){
            if(file_exists(public_path('photos/other_fche040051s/analysed_sign/'.$che->analysed_sign))){

                unlink('photos/other_fche040051s/analysed_sign/'.$che->analysed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/other_fche040051s/checked_sign/'.$che->checked_sign))){

                unlink('photos/other_fche040051s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040051::where('id',$id)->delete();
        Fche040051Finance::where('fche040051_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040051::find($id);
        return view('backend.labs.others.fche040051s.print',compact('che'));
    }
}
