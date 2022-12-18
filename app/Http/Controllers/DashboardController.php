<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Members\Member;

class DashboardController extends Controller
{
    public function index()
    {
        $member_count = Member::count();
        $customer_count = Customer::count();
        return view('backend.dashboard',compact('member_count','customer_count'));
    }

    public function lab()
    {
        return view('backend.labs.lab');
    }

    public function stock()
    {
        return view('backend.stocks.stock');
    }

    public function userGuide()
    {
        return view('backend.user_guides.user_guide');
    }

}
