<?php

namespace App\Http\Controllers\Oils;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Oils\Fche040115Finance;

class Fche040115FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/15(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $fche040115_finances = Fche040115Finance::with('fche040115')->get();
        return view('backend.finances.oils.fche040115s.index',compact('fche040115_finances'));
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
        $fche040115_finance = Fche040115Finance::find($id);
        return view('backend.finances.oils.fche040115s.detail',compact('fche040115_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fche040115_finance = Fche040115Finance::with('fche040115')->find($id);
        return view('backend.finances.oils.fche040115s.edit',compact('fche040115_finance'));
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
            $fche040115_finance = Fche040115Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $fche040115_finance->remark = $request->remark;
                $fche040115_finance->amount = $request->amount;
                $fche040115_finance->date = $request->date;
                // $fche040115_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$fche040115_finance->id,1,7);
                $fche040115_finance->voucher = $request->voucher;
                $fche040115_finance->test_type = $request->test_type;
                $fche040115_finance->save();
               }else{
                $fche040115_finance->remark_2 = $request->remark_2;
                $fche040115_finance->amount_2 = $request->amount_2;
                $fche040115_finance->date_2 = $request->date_2;
                // $fche040115_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$fche040115_finance->id,1,7);
                $fche040115_finance->voucher_2 = $request->voucher_2;
                $fche040115_finance->test_type_2 = $request->test_type_2;
                $fche040115_finance->save();
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
        $fche040115_finance = Fche040115Finance::find($id);
        return view('backend.finances.oils.fche040115s.second_add',compact('fche040115_finance'));

    }
}
