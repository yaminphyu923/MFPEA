<?php

namespace App\Http\Controllers\GCAnalysis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GCAnalysis\Fche040029Finance;

class Fche040029FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-00/29(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $fche040029_finances = Fche040029Finance::get();
        return view('backend.finances.gc_analyses.fche040029s.index',compact('fche040029_finances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fche040029_finance = Fche040029Finance::find($id);
        return view('backend.finances.gc_analyses.fche040029s.detail',compact('fche040029_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fche040029_finance = Fche040029Finance::find($id);
        return view('backend.finances.gc_analyses.fche040029s.edit',compact('fche040029_finance'));
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
            $fche040029_finance = Fche040029Finance::find($id);
           if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
            $fche040029_finance->remark = $request->remark;
            $fche040029_finance->amount = $request->amount;
            $fche040029_finance->date = $request->date;
            // $fche040029_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$fche040029_finance->id,1,7);
            $fche040029_finance->receive_voucher = $request->receive_voucher;
            $fche040029_finance->test_type = $request->test_type;
            $fche040029_finance->save();
           }else{
            $fche040029_finance->remark_2 = $request->remark_2;
            $fche040029_finance->amount_2 = $request->amount_2;
            $fche040029_finance->date_2 = $request->date_2;
            // $fche040029_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$fche040029_finance->id,1,7);
            $fche040029_finance->receive_voucher_2 = $request->receive_voucher_2;
            $fche040029_finance->test_type_2 = $request->test_type_2;
            $fche040029_finance->save();
           }
            return redirect()->back()
                ->with('success', 'Added successfully!');
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
    public function destroy($id)
    {
        //
    }

    public function secondAdd($id)
    {
        $fche040029_finance = Fche040029Finance::find($id);
        return view('backend.finances.gc_analyses.fche040029s.second_add',compact('fche040029_finance'));

    }
}
