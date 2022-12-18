<?php

namespace App\Http\Controllers\MicroWorksheet;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MicroWorksheets\M010101Finance;

class M010101FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:F-M01-01-01(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $m010101_finances = M010101Finance::with('m010101')->get();
        return view('backend.finances.micro_worksheets.m010101s.index',compact('m010101_finances'));
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
        $m010101_finance = M010101Finance::find($id);
        return view('backend.finances.micro_worksheets.m010101s.detail',compact('m010101_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $m010101_finance = M010101Finance::with('m010101')->find($id);
        return view('backend.finances.micro_worksheets.m010101s.edit',compact('m010101_finance'));
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
            $m010101_finance = M010101Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $m010101_finance->remark = $request->remark;
                $m010101_finance->amount = $request->amount;
                $m010101_finance->date = $request->date;
                // $m010101_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$m010101_finance->id,1,7);
                $m010101_finance->voucher = $request->voucher;
                $m010101_finance->test_type = $request->test_type;
                $m010101_finance->save();
               }else{
                $m010101_finance->remark_2 = $request->remark_2;
                $m010101_finance->amount_2 = $request->amount_2;
                $m010101_finance->date_2 = $request->date_2;
                // $m010101_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$m010101_finance->id,1,7);
                $m010101_finance->voucher_2 = $request->voucher_2;
                $m010101_finance->test_type_2 = $request->test_type_2;
                $m010101_finance->save();
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
        $m010101_finance = M010101Finance::find($id);
        return view('backend.finances.micro_worksheets.m010101s.second_add',compact('m010101_finance'));

    }
}
