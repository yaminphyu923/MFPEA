<?php

namespace App\Http\Controllers\MicroWorksheet;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MicroWorksheets\M030101Finance;

class M030101FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-M03-01-01(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $m030101_finances = M030101Finance::with('m030101')->get();
        return view('backend.finances.micro_worksheets.m030101s.index',compact('m030101_finances'));
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
        $m030101_finance = M030101Finance::find($id);
        return view('backend.finances.micro_worksheets.m030101s.detail',compact('m030101_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $m030101_finance = M030101Finance::with('m030101')->find($id);
        return view('backend.finances.micro_worksheets.m030101s.edit',compact('m030101_finance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function generate_numbers($start, $count, $digits) {

		for ($n = $start; $n < $start+$count; $n++) {

			$result = str_pad($n, $digits, "0", STR_PAD_LEFT);

		}
		return $result;
	}

    public function update(Request $request, $id)
    {
        try {
            $m030101_finance = M030101Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $m030101_finance->remark = $request->remark;
                $m030101_finance->amount = $request->amount;
                $m030101_finance->date = $request->date;
                // $m030101_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$m030101_finance->id,1,7);
                $m030101_finance->voucher = $request->voucher;
                $m030101_finance->test_type = $request->test_type;
                $m030101_finance->save();
               }else{
                $m030101_finance->remark_2 = $request->remark_2;
                $m030101_finance->amount_2 = $request->amount_2;
                $m030101_finance->date_2 = $request->date_2;
                // $m030101_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$m030101_finance->id,1,7);
                $m030101_finance->voucher_2 = $request->voucher_2;
                $m030101_finance->test_type_2 = $request->test_type_2;
                $m030101_finance->save();
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
        $m030101_finance = M030101Finance::find($id);
        return view('backend.finances.micro_worksheets.m030101s.second_add',compact('m030101_finance'));

    }
}
