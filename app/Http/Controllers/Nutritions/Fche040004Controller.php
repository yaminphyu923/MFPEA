<?php

namespace App\Http\Controllers\Nutritions;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Nutritions\Fche040004;
use App\Models\Nutritions\Fche040004Test;
use App\Models\Nutritions\Fche040004Finance;

class Fche040004Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-00/04', ['only' => ['create']]);
    }

    public function index()
    {
        $fche040004s = Fche040004::all();
        return view('backend.labs.nutritions.fche040004s.show',compact('fche040004s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.labs.nutritions.fche040004s.create',compact('customers'));
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
            $m = new Fche040004;

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040004s/analysed_sign');
                $file->move($path, $filename);

                $m->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040004s/checked_sign');
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
            $m->analysed_name = $request->analysed_name;
            $m->analysed_date = $request->analysed_date;
            $m->checked_name = $request->checked_name;
            $m->checked_date = $request->checked_date;
            $m->save();

            if($m)
            {
                for($i=0;$i<count($request['data']);$i++)
                {
                    $fagar = new Fche040004Test;
                    $fagar->fche040004_id = $m->id;
                    $fagar->data = $request['data'][$i];
                    $fagar->test1 = $request['test1'][$i];
                    $fagar->test2 = $request['test2'][$i];
                    $fagar->save();
                }

                $m_finance = new Fche040004Finance;
                $m_finance->fche040004_id = $m->id;
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
        $fche040004 = Fche040004::with('customer')->find($id);
        $fts = Fche040004Test::where('fche040004_id',$id)->get();
        return view('backend.labs.nutritions.fche040004s.detail',compact('fche040004','fts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fche040004 = Fche040004::find($id);
        $fts = Fche040004Test::where('fche040004_id',$id)->get();
        $customers = Customer::all();
        return view('backend.labs.nutritions.fche040004s.edit',compact('fche040004','fts','customers'));
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
            $m = Fche040004::find($id);

            if($m->analysed_sign != null && $request->file("analysed_sign")){
                if(file_exists(public_path('photos/na_fche040004s/analysed_sign/'.$m->analysed_sign))){

                    unlink('photos/na_fche040004s/analysed_sign/'.$m->analysed_sign);

                }
            }

            if($m->checked_sign != null && $request->file("checked_sign")){
                if(file_exists(public_path('photos/na_fche040004s/checked_sign/'.$m->checked_sign))){

                    unlink('photos/na_fche040004s/checked_sign/'.$m->checked_sign);

                }
            }

            if($request->file("analysed_sign")) {
                $file=$request->file("analysed_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040004s/analysed_sign');
                $file->move($path, $filename);

                $m->analysed_sign = $filename;
            }

            if($request->file("checked_sign")) {
                $file=$request->file("checked_sign");
                $filename = time().'_'.$file->getClientOriginalName();
                $path=public_path('photos/na_fche040004s/checked_sign');
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
            $m->analysed_name = $request->analysed_name;
            $m->analysed_date = $request->analysed_date;
            $m->checked_name = $request->checked_name;
            $m->checked_date = $request->checked_date;
            $m->save();

            if($m)
            {
                if(isset($request['data']))
                {
                    if(count($request['data']) > 0)
                    {
                        for($i=0;$i<count($request['data']);$i++)
                        {
                            if(isset($request['ft_id'][$i]))
                            {
                                $additional['data'] = $request['data'][$i];
                                $additional['test1'] = $request['test1'][$i];
                                $additional['test2'] = $request['test2'][$i];
                                $update_additional = Fche040004Test::where('id',$request['ft_id'][$i])
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
        $m = Fche040004::find($id);

        if($m->analysed_sign != null){
            if(file_exists(public_path('photos/na_fche040004s/analysed_sign/'.$m->analysed_sign))){

                unlink('photos/na_fche040004s/analysed_sign/'.$m->analysed_sign);

            }
        }

        if($m->checked_sign != null){
            if(file_exists(public_path('photos/na_fche040004s/checked_sign/'.$m->checked_sign))){

                unlink('photos/na_fche040004s/checked_sign/'.$m->checked_sign);

            }
        }

        Fche040004::where('id',$id)->delete();
        Fche040004Test::where('fche040004_id',$id)->delete();
        Fche040004Finance::where('fche040004_id',$id)->delete();

        return back()->with('success', 'Deleted successfully!');
    }

    public function print($id)
    {
        $fche040004 = Fche040004::find($id);
        $fts = Fche040004Test::where('fche040004_id',$id)->get();
        return view('backend.labs.nutritions.fche040004s.print',compact('fche040004','fts'));
    }
}
