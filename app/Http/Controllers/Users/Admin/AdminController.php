<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('layouts.layout');
    }

    public function dashboard()
    {
        return view('users.admin.dashboard');
    }

    public function message()
    {
        return view('users.admin.message');
    }

    public function accounts()
    {
        return view('users.admin.accounts');
    }

    public function officials()
    {
        return view('users.admin.barangayOfficials');
    }
}
