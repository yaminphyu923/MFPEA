<?php

namespace App\Http\Controllers\Stock;

use Exception;
use Illuminate\Http\Request;
use App\Models\StockGlassWare;
use App\Http\Controllers\Controller;
use App\Models\PurchaseUsedGlassWare;

class PurchaseGlassWareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            $glass_ware = new PurchaseUsedGlassWare;
            $glass_ware->stock_glass_ware_id = $request->stock_glass_ware_id;
            $glass_ware->purchase_stock = $request->purchase_stock;
            $glass_ware->purchase_date = $request->purchase_date;
            $glass_ware->save();

            if($glass_ware){
                $glass_ware = StockGlassWare::find($request->stock_glass_ware_id);
                $glass_ware->total_stock = (int)$glass_ware->total_stock + (int)$request->purchase_stock;
                $glass_ware->update();
            }

            return redirect()->back()
                ->with('success', 'Added successfully!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PurchaseUsedGlassWare::where('id',$id)->delete();
        return 'success';
    }
}
