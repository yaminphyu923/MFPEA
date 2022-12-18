<?php

namespace App\Http\Controllers\Stock;

use Exception;
use Illuminate\Http\Request;
use App\Models\Stocks\MlMediaStock;
use App\Http\Controllers\Controller;
use App\Models\Stocks\PurchaseUsedMlMediaStock;

class UsedMlMediaStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $el = new PurchaseUsedMlMediaStock;
            $el->ml_media_stock_id = $request->ml_media_stock_id;
            $el->used_stock = $request->used_stock;
            $el->used_date = $request->used_date;
            $el->save();

            if($el){
                $ml_el = MlMediaStock::find($request->ml_media_stock_id);
                $ml_el->total_stock = (int)$ml_el->total_stock - (int)$request->used_stock;
                $ml_el->update();
            }

            return redirect()->back()
                ->with('success', 'Used successfully!');
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
        PurchaseUsedMlMediaStock::where('id',$id)->delete();
        return 'success';
    }
}
