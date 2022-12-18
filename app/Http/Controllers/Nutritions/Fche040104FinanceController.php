<?php

namespace App\Http\Controllers\Nutritions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Nutritions\Fche040104Finance;

class Fche040104FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-01/04(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $fche040104_finances = Fche040104Finance::with('fche040104')->get();
        return view('backend.finances.nutritions.fche040104s.index',compact('fche040104_finances'));
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
        $fche040104_finance = Fche040104Finance::find($id);
        return view('backend.finances.nutritions.fche040104s.detail',compact('fche040104_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fche040104_finance = Fche040104Finance::with('fche040104')->find($id);
        return view('backend.finances.nutritions.fche040104s.edit',compact('fche040104_finance'));
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
            $fche040104_finance = Fche040104Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $fche040104_finance->remark = $request->remark;
                $fche040104_finance->amount = $request->amount;
                $fche040104_finance->date = $request->date;
                // $fche040104_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$fche040104_finance->id,1,7);
                $fche040104_finance->voucher = $request->voucher;
                $fche040104_finance->test_type = $request->test_type;
                $fche040104_finance->save();
               }else{
                $fche040104_finance->remark_2 = $request->remark_2;
                $fche040104_finance->amount_2 = $request->amount_2;
                $fche040104_finance->date_2 = $request->date_2;
                // $fche040104_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$fche040104_finance->id,1,7);
                $fche040104_finance->voucher_2 = $request->voucher_2;
                $fche040104_finance->test_type_2 = $request->test_type_2;
                $fche040104_finance->save();
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
        $fche040104_finance = Fche040104Finance::find($id);
        return view('backend.finances.nutritions.fche040104s.second_add',compact('fche040104_finance'));

    }
}
