<?php

namespace App\Http\Controllers\Nutritions;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Nutritions\Fche040001;
use App\Models\Nutritions\Fche040001Test;
use App\Models\Nutritions\Fche040001Finance;

class Fche040001Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-00/01', ['only' => ['create']]);
    }

    public function index()
    {
        $fches = Fche040001::all();
        return view('backend.labs.nutritions.fche040001s.show',compact('fches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.nutritions.fche040001s.create',compact('customers'));
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
            $m = new Fche040001;

            if($request->file("analyzed_sign")) {
                $file=$request->file("analyzed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040001s/analyzed_sign');
                $file->move($path, $filename);

                $m->analyzed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040001s/checked_sign');
                $file->move($path, $filename);

                $m->checked_sign = $filename;
            }

            $m->job_number = $request->job_number;
            $m->product_name = $request->product_name;
            $m->customer_id = $request->customer_id;
            $m->received_date = $request->received_date;
            $m->initiated_date = $request->initiated_date;
            $m->reported_date = $request->reported_date;
            $m->method = $request->method;
            $m->analyzed_by = $request->analyzed_by;
            $m->analyzed_date = $request->analyzed_date;
            $m->checked_by = $request->checked_by;
            $m->checked_date = $request->checked_date;
            $m->save();

            if($m)
            {
                for($i=0;$i<count($request['data']);$i++)
                {
                    $fagar = new Fche040001Test;
                    $fagar->fche040001_id = $m->id;
                    $fagar->data = $request['data'][$i];
                    $fagar->test1 = $request['test1'][$i];
                    $fagar->test2 = $request['test2'][$i];
                    $fagar->save();
                }

                $m_finance = new Fche040001Finance;
                $m_finance->fche040001_id = $m->id;
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
        $che = Fche040001::with('customer')->find($id);
        $che_tests = Fche040001Test::where('fche040001_id',$id)->get();
        return view('backend.labs.nutritions.fche040001s.detail',compact('che','che_tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che = Fche040001::find($id);
        $che_tests = Fche040001Test::where('fche040001_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.nutritions.fche040001s.edit',compact('che','che_tests','customers'));
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
            $che = Fche040001::find($id);
            if($che->analyzed_sign != null && $request->file("analyzed_sign")){
                if(file_exists(public_path('photos/na_fche040001s/analyzed_sign/'.$che->analyzed_sign))){

                    unlink('photos/na_fche040001s/analyzed_sign/'.$che->analyzed_sign);

                }
            }

            if($che->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/na_fche040001s/checked_sign/'.$che->checked_sign))){

                    unlink('photos/na_fche040001s/checked_sign/'.$che->checked_sign);

                }
            }

            if($request->file("analyzed_sign")) {
                $file=$request->file("analyzed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040001s/analyzed_sign');
                $file->move($path, $filename);

                $che->analyzed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040001s/checked_sign');
                $file->move($path, $filename);

                $che->checked_sign = $filename;
            }

            $che->job_number = $request->job_number;
            $che->product_name = $request->product_name;
            $che->received_date = $request->received_date;
            $che->initiated_date = $request->initiated_date;
            $che->reported_date = $request->reported_date;
            $che->method = $request->method;
            $che->customer_id = $request->customer_id;
            $che->analyzed_by = $request->analyzed_by;
            $che->analyzed_date = $request->analyzed_date;
            $che->checked_by = $request->checked_by;
            $che->checked_date = $request->checked_date;

            $che->save();

            if($che)
            {
                if(isset($request['data']))
                {
                    if(count($request['data']) > 0)
                    {
                        for($i=0;$i<count($request['data']);$i++)
                        {
                            if(isset($request['che_test_id'][$i]))
                            {
                                $additional['data'] = $request['data'][$i];
                                $additional['test1'] = $request['test1'][$i];
                                $additional['test2'] = $request['test2'][$i];
                                $update_additional = Fche040001Test::where('id',$request['che_test_id'][$i])
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
        $che = Fche040001::find($id);

        if($che->analyzed_sign != null){
            if(file_exists(public_path('photos/na_fche040001s/analyzed_sign/'.$che->analyzed_sign))){

                unlink('photos/na_fche040001s/analyzed_sign/'.$che->analyzed_sign);

            }
        }

        if($che->checked_sign != null){
            if(file_exists(public_path('photos/na_fche040001s/checked_sign/'.$che->checked_sign))){

                unlink('photos/na_fche040001s/checked_sign/'.$che->checked_sign);

            }
        }

        Fche040001::where('id',$id)->delete();
        Fche040001Test::where('fche040001_id',$id)->delete();
        Fche040001Finance::where('fche040001_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $che = Fche040001::find($id);
        $che_tests = Fche040001Test::where('fche040001_id',$id)->get();
        return view('backend.labs.nutritions.fche040001s.print',compact('che','che_tests'));
    }
}
