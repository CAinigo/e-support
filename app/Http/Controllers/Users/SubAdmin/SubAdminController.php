<?php

namespace App\Http\Controllers\Users\SubAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubAdminController extends Controller
{
    public function dashboard()
    {
        return view('users.sub-admin.dashboard');
    }
}
