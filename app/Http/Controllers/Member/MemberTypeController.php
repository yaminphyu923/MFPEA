<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Models\Members\MemberType;
use App\Http\Controllers\Controller;

class MemberTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:member-type', ['only' => ['index']]);
    }

    public function index()
    {
        $member_types = MemberType::all();
        return view('backend.members.member_types.index',compact('member_types'));
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
        $member_type = new MemberType;
        $member_type->member_type_name = $request->member_type_name;
        $member_type->save();

        return redirect()->back()
            ->with('success', 'Member Type Create Successfully!');
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
        $member_type = MemberType::findOrFail($id);
        $member_type->member_type_name = $request->member_type_name;
        $member_type->save();

        return redirect()->back()
            ->with('success', 'Member Type Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MemberType::where('id',$id)->delete();
        return back()->with('success','Member Type Delete Successfully!');
    }
}
