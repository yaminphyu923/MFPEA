<?php

namespace App\Http\Controllers\ChemicalReports;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChemicalReports\Ad01288Finance;

class Ad01288FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-06-03-01288/22(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $ad01288_finances = Ad01288Finance::with('ad01288')->get();
        return view('backend.finances.chemical_reports.ad01288s.index',compact('ad01288_finances'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad01288_finance = Ad01288Finance::with('ad01288')->find($id);
        return view('backend.finances.chemical_reports.ad01288s.edit',compact('ad01288_finance'));
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
            $ad_finance = Ad01288Finance::find($id);
            $ad_finance->remark = $request->remark;
            $ad_finance->amount = $request->amount;
            $ad_finance->date = $request->date;
            $ad_finance->voucher = time() . $this->generate_numbers((int)$ad_finance->id,1,7);
            $ad_finance->save();
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
}
