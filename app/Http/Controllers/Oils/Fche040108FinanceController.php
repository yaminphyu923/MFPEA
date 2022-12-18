<?php

namespace App\Http\Controllers\Oils;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Oils\Fche040108Finance;

class Fche040108FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/08(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $fche040108_finances = Fche040108Finance::with('fche040108')->get();
        return view('backend.finances.oils.fche040108s.index',compact('fche040108_finances'));
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
        $fche040108_finance = Fche040108Finance::find($id);
        return view('backend.finances.oils.fche040108s.detail',compact('fche040108_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fche040108_finance = Fche040108Finance::with('fche040108')->find($id);
        return view('backend.finances.oils.fche040108s.edit',compact('fche040108_finance'));
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
            $fche040108_finance = Fche040108Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $fche040108_finance->remark = $request->remark;
                $fche040108_finance->amount = $request->amount;
                $fche040108_finance->date = $request->date;
                // $fche040108_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$fche040108_finance->id,1,7);
                $fche040108_finance->voucher = $request->voucher;
                $fche040108_finance->test_type = $request->test_type;
                $fche040108_finance->save();
               }else{
                $fche040108_finance->remark_2 = $request->remark_2;
                $fche040108_finance->amount_2 = $request->amount_2;
                $fche040108_finance->date_2 = $request->date_2;
                // $fche040108_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$fche040108_finance->id,1,7);
                $fche040108_finance->voucher_2 = $request->voucher_2;
                $fche040108_finance->test_type_2 = $request->test_type_2;
                $fche040108_finance->save();
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
        $fche040108_finance = Fche040108Finance::find($id);
        return view('backend.finances.oils.fche040108s.second_add',compact('fche040108_finance'));

    }
}
