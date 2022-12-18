<?php

namespace App\Http\Controllers\MRs;

use Exception;
use Illuminate\Http\Request;
use App\Models\MRs\Ad01357Finance;
use App\Http\Controllers\Controller;

class Ad01357FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-06-03-01357/22(Finance)', ['only' => ['index']]);
    }

    public function index()
    {
        $ad01357_finances = Ad01357Finance::with('ad01357')->get();
        return view('backend.finances.mrs.ad01357s.index',compact('ad01357_finances'));
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
        $ad01357_finance = Ad01357Finance::find($id);
        return view('backend.finances.mrs.ad01357s.edit',compact('ad01357_finance'));
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
            $ad_finance = Ad01357Finance::find($id);
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
