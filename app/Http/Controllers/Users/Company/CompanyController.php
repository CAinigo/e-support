<?php

namespace App\Http\Controllers\Users\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function dashboard()
    {
        return view('users.company.dashboard');
    }
}
