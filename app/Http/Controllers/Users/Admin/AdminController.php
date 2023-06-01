<?php

namespace App\Http\Controllers\Users\Admin;

use Illuminate\Http\Request;
use App\Models\BarangayOfficial;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function admin()
    {
        return view('layouts.layout');
    }

    public function dashboard()
    {
        return view('users.admin.dashboard');
    }
    
    public function officials()
    {
        $officials = BarangayOfficial::all();

        return view('users.admin.barangayOfficials', ['officials' => $officials]);
    }

    public function getOfficials()
    {
        $officials = BarangayOfficial::all();

        return response()->json([
            'officials' => $officials,
        ]);
    }
    
    public function residents()
    {
        return view('users.admin.residents');
    }
    
    public function establishments()
    {
        return view('users.admin.establishments');
    }
    
    public function users()
    {
        return view('users.admin.users');
    }
    
    public function approval()
    {
        return view('users.admin.userApproval');
    }
    public function message()
    {
        return view('users.admin.message');
    }
    
    public function accounts()
    {
        return view('users.admin.accounts');
    }

    public function archive()
    {
        return view('users.admin.archive');
    }

    public function addOfficials(Request $request)
    {
        $validated = Validator::make($request->all(),
        [
            'profile_img' => ['nullable'],
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'suffix_name' => ['nullable', 'string', 'max:255'],
            'zone' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:13'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'c_status' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
        ]);

        if($validated->fails()){
            return response()->json([
                'status' => 400,
                'messages' => $validated->getMessageBag()
            ]);
        }else{
            $profile_img_name = $request->file('profile_img')->getClientOriginalName();
            $profile_img = time() . '-' . $profile_img_name;
            $request->file('profile_img')->storeAs('public/images/brgyOfficials', $profile_img);

            $official = new BarangayOfficial();
            $official->profile_img = $profile_img;
            $official->lname = $request->last_name;
            $official->fname = $request->first_name;
            $official->mname = $request->middle_name;
            $official->sname = $request->suffix_name;
            $official->zone = $request->zone;
            $official->gender = $request->gender;
            $official->contact = $request->contact;
            $official->email = $request->email;
            $official->c_status = $request->c_status;
            $official->bday = $request->birthday;
            $official->position = $request->position;
            $official->save();

            return response()->json([
                'status' => 200,
                'messages' => 'Added successfully!'
            ]);
        }
    }

    public function viewOfficials($id)
    {
        return BarangayOfficial::find($id);
    }

    public function editOfficials(Request $request)
    {
        $validated = Validator::make($request->all(),
        [
            'profile_img' => ['nullable'],
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'suffix_name' => ['nullable', 'string', 'max:255'],
            'zone' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:13'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'c_status' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
        ]);

        if($validated->fails()){
            return response()->json([
                'status' => 400,
                'messages' => $validated->getMessageBag()
            ]);
        }else{
            if($request->hasFile('profile_img')){
                $profile_img_name = $request->file('profile_img')->getClientOriginalName();
                $profile_img = time() . '-' . $profile_img_name;
                $request->file('profile_img')->storeAs('public/images/brgyOfficials', $profile_img);

                $official = BarangayOfficial::find($request->id);
                $official->profile_img = $profile_img;
                $official->lname = $request->last_name;
                $official->fname = $request->first_name;
                $official->mname = $request->middle_name;
                $official->sname = $request->suffix_name;
                $official->zone = $request->zone;
                $official->gender = $request->gender;
                $official->contact = $request->contact;
                $official->email = $request->email;
                $official->c_status = $request->c_status;
                $official->bday = $request->birthday;
                $official->position = $request->position;
                $official->update();
            }else{
                $official = BarangayOfficial::find($request->id);
                $official->lname = $request->last_name;
                $official->fname = $request->first_name;
                $official->mname = $request->middle_name;
                $official->sname = $request->suffix_name;
                $official->zone = $request->zone;
                $official->gender = $request->gender;
                $official->contact = $request->contact;
                $official->email = $request->email;
                $official->c_status = $request->c_status;
                $official->bday = $request->birthday;
                $official->position = $request->position;
                $official->update();
            }


            return response()->json([
                'status' => 200,
                'messages' => 'Udated successfully!'
            ]);
        }
    }

    public function deleteOfficials(Request $request)
    {
        $officialID = $request->id;

        $official = BarangayOfficial::find($officialID);
        $official->delete();

        return response()->json([
            'status' => 200,
            'messages' => 'Deleted successfully!'
        ]);
    }
}
