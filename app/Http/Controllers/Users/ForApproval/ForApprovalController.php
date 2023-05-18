<?php

namespace App\Http\Controllers\Users\ForApproval;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;

class ForApprovalController extends Controller
{
    public function dashboard()
    {
        auth()->logout();

        return redirect()->route('welcome')->with('for-approval', 'Your account has not been approved yet.');
    }
}
