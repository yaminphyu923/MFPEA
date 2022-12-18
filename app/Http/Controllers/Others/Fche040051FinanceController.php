<?php

namespace App\Http\Controllers\Others;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Others\Fche040051Finance;
use Exception;

class Fche040051FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-00/51(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $fche040051_finances = Fche040051Finance::with('fche040051')->get();
        return view('backend.finances.others.fche040051s.index',compact('fche040051_finances'));
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
        $fche040051_finance = Fche040051Finance::find($id);
        return view('backend.finances.others.fche040051s.detail',compact('fche040051_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fche040051_finance = Fche040051Finance::with('fche040051')->find($id);
        return view('backend.finances.others.fche040051s.edit',compact('fche040051_finance'));
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
            $fche040051_finance = Fche040051Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $fche040051_finance->remark = $request->remark;
                $fche040051_finance->amount = $request->amount;
                $fche040051_finance->date = $request->date;
                // $fche040051_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$fche040051_finance->id,1,7);
                $fche040051_finance->voucher = $request->voucher;
                $fche040051_finance->test_type = $request->test_type;
                $fche040051_finance->save();
               }else{
                $fche040051_finance->remark_2 = $request->remark_2;
                $fche040051_finance->amount_2 = $request->amount_2;
                $fche040051_finance->date_2 = $request->date_2;
                // $fche040051_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$fche040051_finance->id,1,7);
                $fche040051_finance->voucher_2 = $request->voucher_2;
                $fche040051_finance->test_type_2 = $request->test_type_2;
                $fche040051_finance->save();
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
        $fche040051_finance = Fche040051Finance::find($id);
        return view('backend.finances.others.fche040051s.second_add',compact('fche040051_finance'));

    }
}
