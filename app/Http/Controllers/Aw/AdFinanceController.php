<?php

namespace App\Http\Controllers\Aw;

use Exception;
use App\Models\AdFinance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdFinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:FIDSL-Ad-01-01(Finance)', ['only' => ['index']]);
         $this->middleware('permission:FIDSL-Ad-02-01(Finance)', ['only' => ['indexAd0201']]);
    }

    public function index()
    {
        $ad_finances = AdFinance::where('aw_branch','ad0101')->get();
        return view('backend.finances.admin_worksheets.ad0101s.index',compact('ad_finances'));
    }

    public function indexAd0201()
    {
        $ad_finances = AdFinance::where('aw_branch','ad0201')->get();
        return view('backend.finances.admin_worksheets.ad0201s.index',compact('ad_finances'));
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
        $ad_finance = AdFinance::find($id);
        return view('backend.finances.admin_worksheets.ad0101s.edit',compact('ad_finance'));
    }

    public function editAd0201($id)
    {
        $ad_finance = AdFinance::find($id);
        return view('backend.finances.admin_worksheets.ad0201s.edit',compact('ad_finance'));
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
            $ad_finance = AdFinance::find($id);
            $ad_finance->remark = $request->remark;
            $ad_finance->amount = $request->amount;
            $ad_finance->date = $request->date;
            $ad_finance->receive_voucher = time() . $this->generate_numbers((int)$ad_finance->id,1,7);
            $ad_finance->save();
            return redirect()->back()
                ->with('success', 'Added successfully!');
        } catch (Exception $e){
            return redirect()->back()
                ->with('error', $e->getMessage());
        }
    }

    public function updateAd0201(Request $request, $id)
    {
        try {
            $ad_finance = AdFinance::find($id);
            $ad_finance->remark = $request->remark;
            $ad_finance->amount = $request->amount;
            $ad_finance->date = $request->date;
            $ad_finance->receive_voucher = time() . $this->generate_numbers((int)$ad_finance->id,1,7);
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
        AdFinance::where('id',$id)->delete();
        return 'success';
    }
}
