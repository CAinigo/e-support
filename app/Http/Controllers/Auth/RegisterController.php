<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function toRegister()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'lname' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'mname' => ['required', 'string', 'max:255'],
            'sname' => ['nullable', 'string', 'max:255'],
            'bday' => ['required', 'date', 'max:255'],
            'c_status' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'zone' => ['required', 'string', 'max:255'],
            'e_status' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:13', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        // User::create([
        //     'lname' => $validated['lname'],
        //     'fname' => $validated['fname'],
        //     'mname' => $validated['mname'],
        //     'sname' => $validated['sname'],
        //     'bday' => $validated['bday'],
        //     'c_status' => $validated['c_status'],
        //     'gender' => $validated['gender'],
        //     'zone' => $validated['zone'],
        //     'e_status' => $validated['e_status'],
        //     'email' => $validated['email'],
        //     'contact' => $validated['contact'],
        //     'username' => $validated['username'],
        //     'password' => Hash::make($validated['password']),
        // ]);

        return redirect()->route('welcome')->with('registered', 'You have successfully registered. Wait for the admin for the approval of your account');
    }
}
