<?php

namespace App\Http\Controllers\Stock;

use Illuminate\Http\Request;
use App\Models\StockGlassWare;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PurchaseUsedGlassWare;
use App\Exports\StockGlassWaresExport;

class StockGlassWareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:Chemical-Lab-Glass-Ware', ['only' => ['index']]);
    }


    public function index()
    {
        $glass_wares = StockGlassWare::all();
        return view('backend.stocks.glass_wares.index',compact('glass_wares'));
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
        try {
            $glass_ware = new StockGlassWare;
            $glass_ware->items = $request->items;
            $glass_ware->capacity = $request->capacity;
            $glass_ware->total_stock = $request->total_stock;
            $glass_ware->remark = $request->remark;
            $glass_ware->unit = $request->unit;
            $glass_ware->qty = $request->qty;
            $glass_ware->save();

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
        $glass_ware = StockGlassWare::find($id);
        return view('backend.stocks.glass_wares.detail',compact('glass_ware'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $glass_ware = StockGlassWare::find($id);
        return view('backend.stocks.glass_wares.edit',compact('glass_ware'));
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
            $glass_ware = StockGlassWare::find($id);
            $glass_ware->items = $request->items;
            $glass_ware->capacity = $request->capacity;
            $glass_ware->total_stock = $request->total_stock;
            $glass_ware->remark = $request->remark;
            $glass_ware->unit = $request->unit;
            $glass_ware->qty = $request->qty;
            $glass_ware->save();

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
        StockGlassWare::where('id',$id)->delete();
        PurchaseUsedGlassWare::where('stock_glass_ware_id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function purchase($id)
    {
        $glass_ware = StockGlassWare::find($id);
        $stock_glass_wares = PurchaseUsedGlassWare::where('stock_glass_ware_id',$id)
                                                    ->where('purchase_stock','!=',0)->get();
        return view('backend.stocks.glass_wares.purchase',compact('glass_ware','stock_glass_wares'));
    }

    public function used($id)
    {
        $glass_ware = StockGlassWare::find($id);
        $stock_glass_wares = PurchaseUsedGlassWare::where('stock_glass_ware_id',$id)->where('used_stock','!=',0)->get();
        return view('backend.stocks.glass_wares.used',compact('glass_ware','stock_glass_wares'));
    }

    public function glassWareExport()
    {
        return Excel::download(new StockGlassWaresExport, 'glass_ware.xlsx');
    }
}
