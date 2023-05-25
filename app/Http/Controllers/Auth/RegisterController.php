<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function toRegister()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {
        $validated = Validator::make($request->all(),
        [
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'suffix_name' => ['nullable', 'string', 'max:255'],
            'birthday' => ['required', 'date', 'max:255'],
            'c_status' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'zone' => ['required', 'string', 'max:255'],
            'e_status' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:13', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($validated->fails()){
            return response()->json([
                'status' => 400,
                'messages' => $validated->getMessageBag()
            ]);
        }else{
            $user = new User();
            $user->lname = $request->last_name;
            $user->fname = $request->first_name;
            $user->mname = $request->middle_name;
            $user->sname = $request->suffix_name;
            $user->bday = $request->birthday;
            $user->c_status = $request->c_status;
            $user->gender = $request->gender;
            $user->zone = $request->zone;
            $user->e_status = $request->e_status;
            $user->contact = $request->contact;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->save();

            return response()->json([
                'status' => 200,
                'messages' => 'Registered successfully!'
            ]);
        }

        // $validated['password'] = bcrypt($validated['password']);

        // User::create($validated);

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

        // return redirect()->route('welcome')->with('registered', 'You have successfully registered. Wait for the admin for the approval of your account');
    }

    public function createCompany(Request $request)
    {
        $validated = Validator::make($request->all(),
        [
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'suffix_name' => ['nullable', 'string', 'max:255'],
            'business_name' => ['required', 'date', 'max:255'],
            'type_of_business' => ['required', 'string', 'max:255'],
            'zone' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:13', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($validated->fails()){
            return response()->json([
                'status' => 400,
                'messages' => $validated->getMessageBag()
            ]);
        }else{
            $user = new User();
            $user->lname = $request->last_name;
            $user->fname = $request->first_name;
            $user->mname = $request->middle_name;
            $user->sname = $request->suffix_name;
            $user->business_name = $request->business_name;
            $user->type_of_business = $request->type_of_business;
            $user->zone = $request->zone;
            $user->contact = $request->contact;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->save();

            return response()->json([
                'status' => 200,
                'messages' => 'Registered successfully!'
            ]);
        }
    }
}
