<?php

namespace App\Http\Controllers\Stock;

use Exception;
use Illuminate\Http\Request;
use App\Models\FidslGeneralStock;
use App\Http\Controllers\Controller;
use App\Models\PurchaseUsedFidslGeneralStock;

class UsedFidslGeneralStockController extends Controller
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
            $p_f_general_stock = new PurchaseUsedFidslGeneralStock;
            $p_f_general_stock->fidsl_general_stock_id = $request->fidsl_general_stock_id;
            $p_f_general_stock->used_stock = $request->used_stock;
            $p_f_general_stock->used_date = $request->used_date;
            $p_f_general_stock->save();

            if($p_f_general_stock){
                $f_general_stock = FidslGeneralStock::find($request->fidsl_general_stock_id);
                $f_general_stock->total_stock = (int)$f_general_stock->total_stock - (int)$request->used_stock;
                $f_general_stock->update();
            }

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


        PurchaseUsedFidslGeneralStock::where('id',$id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }
}
