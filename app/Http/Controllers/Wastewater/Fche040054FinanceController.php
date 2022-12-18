<?php

namespace App\Http\Controllers\Wastewater;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wastewater\Fche040054Finance;

class Fche040054FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Che-04-00/54(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $fche040054_finances = Fche040054Finance::with('fche040054')->get();
        return view('backend.finances.wastewater.fche040054s.index',compact('fche040054_finances'));
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
        $fche040054_finance = Fche040054Finance::find($id);
        return view('backend.finances.wastewater.fche040054s.detail',compact('fche040054_finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fche040054_finance = Fche040054Finance::with('fche040054')->find($id);
        return view('backend.finances.wastewater.fche040054s.edit',compact('fche040054_finance'));
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
            $fche040054_finance = Fche040054Finance::find($id);
            if($request->amount || $request->receive_voucher || $request->date || $request->remark || $request->test_type){
                $fche040054_finance->remark = $request->remark;
                $fche040054_finance->amount = $request->amount;
                $fche040054_finance->date = $request->date;
                // $fche040054_finance->receive_voucher = "FCar0501-" . $this->generate_numbers((int)$fche040054_finance->id,1,7);
                $fche040054_finance->voucher = $request->voucher;
                $fche040054_finance->test_type = $request->test_type;
                $fche040054_finance->save();
               }else{
                $fche040054_finance->remark_2 = $request->remark_2;
                $fche040054_finance->amount_2 = $request->amount_2;
                $fche040054_finance->date_2 = $request->date_2;
                // $fche040054_finance->voucher = "FCar0501-" . $this->generate_numbers((int)$fche040054_finance->id,1,7);
                $fche040054_finance->voucher_2 = $request->voucher_2;
                $fche040054_finance->test_type_2 = $request->test_type_2;
                $fche040054_finance->save();
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
        $fche040054_finance = Fche040054Finance::find($id);
        return view('backend.finances.wastewater.fche040054s.second_add',compact('fche040054_finance'));

    }
}
