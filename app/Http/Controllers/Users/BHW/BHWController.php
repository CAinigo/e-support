<?php

namespace App\Http\Controllers\Users\BHW;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BHWController extends Controller
{
    public function dashboard()
    {
        return view('users.bhw.dashboard');
    }
}
