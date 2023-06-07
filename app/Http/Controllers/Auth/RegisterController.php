<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

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
            'display_picture' => ['nullable', File::image()],
            'birthday' => ['required', 'date', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'contact' => ['required', 'string', 'max:13', 'unique:users,contact'],
            'zone' => ['required', 'string', 'max:255'],
            'e_status' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'family_head' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => [
                'required', 
                'string', 
                'confirmed', 
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
        ]);

        if($validated->fails()){
            return response()->json([
                'status' => 400,
                'messages' => $validated->getMessageBag()
            ]);
        }else{
            if($request->hasFile('display_picture')){
                $display_pict_name = $request->file('display_picture')->getClientOriginalName();
                $display_pict = time() . '-' . $display_pict_name;
                $request->file('display_picture')->storeAs('public/images/residentAccount/profiles', $display_pict);

                $user = new User();
                $user->lname = $request->last_name;
                $user->fname = $request->first_name;
                $user->mname = $request->middle_name;
                $user->sname = $request->suffix_name;
                $user->display_picture = $display_pict;
                $user->bday = $request->birthday;
                $user->email = $request->email;
                $user->contact = $request->contact;
                $user->zone = $request->zone;
                $user->e_status = $request->e_status;
                $user->gender = $request->gender;
                $user->family_head = $request->family_head;
                $user->role = 5;
                $user->username = $request->username;
                $user->password = Hash::make($request->password);
                $user->save();
    
            }else{
                $user = new User();
                $user->lname = $request->last_name;
                $user->fname = $request->first_name;
                $user->mname = $request->middle_name;
                $user->sname = $request->suffix_name;
                $user->bday = $request->birthday;
                $user->email = $request->email;
                $user->contact = $request->contact;
                $user->zone = $request->zone;
                $user->e_status = $request->e_status;
                $user->gender = $request->gender;
                $user->family_head = $request->family_head;
                $user->role = 5;
                $user->username = $request->username;
                $user->password = Hash::make($request->password);
                $user->save();
            }
            
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
            'business_name' => ['required', 'string', 'max:255'],
            'business_address' => ['required', 'string', 'max:255'],
            'business_nature' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'suffix_name' => ['nullable', 'string', 'max:255'],
            'display_picture' => ['nullable', File::image()],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,biz_email'],
            'contact' => ['required', 'string', 'numeric', 'min_digits:11', 'max_digits:13', 'unique:users,biz_contact'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => [
                'required', 
                'string', 
                'confirmed', 
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
            'business_clearance' => ['required', File::image()],
        ]);

        if($validated->fails()){
            return response()->json([
                'status' => 400,
                'messages' => $validated->getMessageBag()
            ]);
        }else{

            $business_clearance_name = $request->file('business_clearance')->getClientOriginalName();
            $business_clearance = time() . '-' . $business_clearance_name;
            $request->file('business_clearance')->storeAs('public/images/companyAccount/businessClearances', $business_clearance);

            if($request->hasFile('display_picture')){
                $display_pict_name = $request->file('display_picture')->getClientOriginalName();
                $display_pict = time() . '-' . $display_pict_name;
                $request->file('display_picture')->storeAs('public/images/companyAccount/profiles', $display_pict);
                
                $user = new User();
                $user->biz_name = $request->business_name;
                $user->biz_address = $request->business_address;
                $user->biz_nature = $request->business_nature;
                $user->biz_lname = $request->last_name;
                $user->biz_fname = $request->first_name;
                $user->biz_mname = $request->middle_name;
                $user->biz_sname = $request->suffix_name;
                $user->biz_display_picture = $display_pict;
                $user->biz_clearance = $business_clearance;
                $user->biz_email = $request->email;
                $user->biz_contact = $request->contact;
                $user->role = 6;
                $user->username = $request->username;
                $user->password = Hash::make($request->password);
                $user->save();
            }else{
                $user = new User();
                $user->biz_name = $request->business_name;
                $user->biz_address = $request->business_address;
                $user->biz_nature = $request->business_nature;
                $user->biz_lname = $request->last_name;
                $user->biz_fname = $request->first_name;
                $user->biz_mname = $request->middle_name;
                $user->biz_sname = $request->suffix_name;
                $user->biz_clearance = $business_clearance;
                $user->biz_email = $request->email;
                $user->biz_contact = $request->contact;
                $user->role = 6;
                $user->username = $request->username;
                $user->password = Hash::make($request->password);
                $user->save();
            }


            return response()->json([
                'status' => 200,
                'messages' => 'Registered successfully!'
            ]);
        }
    }
}
