<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request) 
    {
        $input = $request->all();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])) || auth()->attempt(array('email' => $input['username'], 'password' => $input['password'])))
        {
            if (auth()->user()->role == '0') {
                return redirect()->route('admin');
            }else if (auth()->user()->role == '1') {
                return redirect()->route('sub-admin');
            }else if (auth()->user()->role == '2') {
                return redirect()->route('bhw');
            }else if (auth()->user()->role == '3') {
                return redirect()->route('resident');
            }else if (auth()->user()->role == '4') {
                return redirect()->route('company');
            }else if (auth()->user()->role == '5') {
                return redirect()->route('for-approval');
            }else {
                return redirect()->route('welcome')->with('error', 'Something went wrong, Please try again.');
            }
        }else{
            return redirect()->route('welcome')
                ->with('error','Username or Password is incorrect.');
        }
    }
}
