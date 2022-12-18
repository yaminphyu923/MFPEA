<?php

namespace App\Http\Controllers\Stock;

use Exception;
use Illuminate\Http\Request;
use App\Models\StockChemicalList;
use App\Http\Controllers\Controller;
use App\Models\StockPurchaseUsedChemicalList;

class UsedChemicalListController extends Controller
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
            $used_chemical_list = new StockPurchaseUsedChemicalList;
            $used_chemical_list->stock_chemical_list_id = $request->stock_chemical_list_id;
            $used_chemical_list->used_stock = $request->used_stock;
            $used_chemical_list->used_date = $request->used_date;
            $used_chemical_list->save();

            if($used_chemical_list){
                $chemical_list = StockChemicalList::find($request->stock_chemical_list_id);
                $chemical_list->total_stock = (int)$chemical_list->total_stock - (int)$request->used_stock;
                $chemical_list->update();
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
        StockPurchaseUsedChemicalList::where('id',$id)->delete();
        return 'success';
    }
}
