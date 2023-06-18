<?php

namespace App\Http\Controllers\Users\SubAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubAdminController extends Controller
{
    public function subAdmin()
    {
        return view('layouts.subAdminLayout');
    }

    public function dashboard()
    {
        return view('users.sub-admin.dashboard');
    }

    public function residents()
    {
        return view('users.sub-admin.residents');
    }

    public function clearance()
    {
        return view('users.sub-admin.clearance');
    }

    public function businessPermit()
    {
        return view('users.sub-admin.businessPermit');
    }

    public function indigency()
    {
        return view('users.sub-admin.indigency');
    }

    public function reports()
    {
        return view('users.sub-admin.reports');
    }

    public function programs()
    {
        return view('users.sub-admin.programs');
    }

    public function spot()
    {
        return view('users.sub-admin.spot');
    }

    public function account()
    {
        return view('users.sub-admin.account');
    }
}
