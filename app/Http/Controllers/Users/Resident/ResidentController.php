<?php

namespace App\Http\Controllers\Users\Resident;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public function dashboard()
    {
        return view('users.resident.dashboard');
    }
}
