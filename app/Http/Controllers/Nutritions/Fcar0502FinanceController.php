<?php

namespace App\Http\Controllers\Nutritions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Nutritions\Fcar0502Finance;

class Fcar0502FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-CAR-05-02(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $fcar0502_finances = Fcar0502Finance::with('fcar0502')->get();
        return view('backend.finances.nutritions.fcar0502s.index',compact('fcar0502_finances'));
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
        $fcar0502_finance = Fcar0502Finance::find($id);
        return view('backend.finances.nutritions.fcar0502s.detail',compact('fcar0502_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fcar0502_finance = Fcar0502Finance::find($id);
        return view('backend.finances.nutritions.fcar0502s.edit',compact('fcar0502_finance'));
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
            $fcar0502_finance = Fcar0502Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $fcar0502_finance->remark = $request->remark;
                $fcar0502_finance->amount = $request->amount;
                $fcar0502_finance->date = $request->date;
                // $fcar0502_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$fcar0502_finance->id,1,7);
                $fcar0502_finance->voucher = $request->voucher;
                $fcar0502_finance->test_type = $request->test_type;
                $fcar0502_finance->save();
               }else{
                $fcar0502_finance->remark_2 = $request->remark_2;
                $fcar0502_finance->amount_2 = $request->amount_2;
                $fcar0502_finance->date_2 = $request->date_2;
                // $fcar0502_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$fcar0502_finance->id,1,7);
                $fcar0502_finance->voucher_2 = $request->voucher_2;
                $fcar0502_finance->test_type_2 = $request->test_type_2;
                $fcar0502_finance->save();
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
        $fcar0502_finance = Fcar0502Finance::find($id);
        return view('backend.finances.nutritions.fcar0502s.second_add',compact('fcar0502_finance'));

    }
}
