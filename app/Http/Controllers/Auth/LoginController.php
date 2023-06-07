<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Name;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function sample(Request $request)
    {
        $nameModel = new Name();
        $nameModel->name = $request->name;
        $nameModel->save();

        for($i = 0; $i < count($request->address); $i++){
            $addressModel = new Address();
            $addressModel->address = $request->address[$i];
            $addressModel->name_id = $nameModel->id;
            $addressModel->save();
        }

        return back();
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginValidate(Request $request) 
    {
        $input = $request->all();

        $this->validate($request, [
            'Username' => 'required',
            'Password' => 'required',
        ]);

        if(auth()->attempt(array('username' => $input['Username'], 'password' => $input['Password'])) || auth()->attempt(array('email' => $input['Username'], 'password' => $input['Password'])))
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
            }else if (auth()->user()->role == '5' || auth()->user()->role == '6') {
                return redirect()->route('for-approval');
            }else {
                return redirect()->route('welcome')->with('error', 'Something went wrong, Please try again.');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Username or Password is incorrect.');
        }
    }
}
