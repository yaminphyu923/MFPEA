<?php

namespace App\Http\Controllers\Stock;

use Exception;
use Illuminate\Http\Request;
use App\Models\Stocks\MlMediaStock;
use App\Exports\MlMediaStocksExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Stocks\PurchaseUsedMlMediaStock;

class MlMediaStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:Micro-Lab-Media-Stock', ['only' => ['index']]);
    }

    public function index()
    {
        $ml_media_stocks = MlMediaStock::all();
        return view('backend.stocks.ml_media_stocks.index',compact('ml_media_stocks'));
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
         // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'academic_year_id' => 'required',
        //     'password' => 'required|required_with:confirm_password|same:confirm_password',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->with('errorForm', $validator->errors()->getMessages())
        //         ->withInput();
        // }

        try {
            $ml_media_stock = new MlMediaStock;
            $ml_media_stock->item_name = $request->item_name;
            $ml_media_stock->description = $request->description;
            $ml_media_stock->quantity = $request->quantity;
            $ml_media_stock->date = $request->date;
            $ml_media_stock->balance = $request->balance;
            $ml_media_stock->balance_g = $request->balance_g;
            $ml_media_stock->balance_ml = $request->balance_ml;
            $ml_media_stock->balance_bot = $request->balance_bot;
            $ml_media_stock->used = $request->used;
            $ml_media_stock->new_bottle = $request->new_bottle;
            $ml_media_stock->total_stock = $request->total_stock;
            $ml_media_stock->remark = $request->remark;
            $ml_media_stock->save();

            return redirect()->back()
                ->with('success', 'Created successfully!');
        } catch (Exception $e){
            return redirect()->back()
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ml_media_stock = MlMediaStock::find($id);
        return view('backend.stocks.ml_media_stocks.detail',compact('ml_media_stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ml_media_stock = MlMediaStock::find($id);
        return view('backend.stocks.ml_media_stocks.edit',compact('ml_media_stock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $ml_media_stock = MlMediaStock::find($id);
            $ml_media_stock->item_name = $request->item_name;
            $ml_media_stock->description = $request->description;
            $ml_media_stock->quantity = $request->quantity;
            $ml_media_stock->date = $request->date;
            $ml_media_stock->balance = $request->balance;
            $ml_media_stock->balance_g = $request->balance_g;
            $ml_media_stock->balance_ml = $request->balance_ml;
            $ml_media_stock->balance_bot = $request->balance_bot;
            $ml_media_stock->used = $request->used;
            $ml_media_stock->new_bottle = $request->new_bottle;
            $ml_media_stock->total_stock = $request->total_stock;
            $ml_media_stock->remark = $request->remark;
            $ml_media_stock->save();

            return redirect()->back()
                ->with('success', 'Updated successfully!');
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
        MlMediaStock::where('id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function export()
    {
        return Excel::download(new MlMediaStocksExport, 'ml_media_stocks.xlsx');
    }

    public function purchase($id)
    {
        $ml_media_stock = MlMediaStock::find($id);
        $ml_media_stocks = PurchaseUsedMlMediaStock::where('ml_media_stock_id',$id)
                                                            ->where('purchase_stock','!=',0)
                                                            ->get();
        return view('backend.stocks.ml_media_stocks.purchase',compact('ml_media_stock','ml_media_stocks'));
    }

    public function used($id)
    {
        $ml_media_stock = MlMediaStock::find($id);
        $ml_media_stocks = PurchaseUsedMlMediaStock::where('ml_media_stock_id',$id)
                                                            ->where('used_stock','!=',0)
                                                            ->get();
        return view('backend.stocks.ml_media_stocks.used',compact('ml_media_stock','ml_media_stocks'));
    }
}
