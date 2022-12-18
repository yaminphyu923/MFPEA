<?php

namespace App\Http\Controllers\HMMineral;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Finances\HMMChe040146Finance;

class Che040146FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/46(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $che040146_finances = HMMChe040146Finance::with('hmmChe040146')->get();
        return view('backend.finances.hmms.che040146s.index',compact('che040146_finances'));
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
        $che040146_finance = HMMChe040146Finance::find($id);
        return view('backend.finances.hmms.che040146s.detail',compact('che040146_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $che040146_finance = HMMChe040146Finance::find($id);
        return view('backend.finances.hmms.che040146s.edit',compact('che040146_finance'));
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
            $che_finance = HMMChe040146Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $che_finance->remark = $request->remark;
                $che_finance->amount = $request->amount;
                $che_finance->date = $request->date;
                // $che_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$che_finance->id,1,7);
                $che_finance->receive_voucher = $request->receive_voucher;
                $che_finance->test_type = $request->test_type;
                $che_finance->save();
               }else{
                $che_finance->remark_2 = $request->remark_2;
                $che_finance->amount_2 = $request->amount_2;
                $che_finance->date_2 = $request->date_2;
                // $che_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$che_finance->id,1,7);
                $che_finance->receive_voucher_2 = $request->receive_voucher_2;
                $che_finance->test_type_2 = $request->test_type_2;
                $che_finance->save();
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
        $che040146_finance = HMMChe040146Finance::find($id);
        return view('backend.finances.hmms.che040146s.second_add',compact('che040146_finance'));

    }
}
