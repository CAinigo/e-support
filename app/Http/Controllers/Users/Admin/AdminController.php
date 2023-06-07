<?php

namespace App\Http\Controllers\Users\Admin;

use Illuminate\Http\Request;
use App\Models\BarangayOfficial;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\File;
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
    
    public function staffs()
    {
        return view('users.admin.staffs');
    }

    public function residentBusiness()
    {
        return view('users.admin.residentBusiness');
    }
    
    public function approval()
    {
        $residents = User::where('role', 5)->paginate(5);
        $businesses = User::where('role', 6)->get();

        return view('users.admin.userApproval', [
            'residents' => $residents,
            'businesses' => $businesses,
        ]);
    }

    public function clearance()
    {
        return view('users.admin.clearance');
    }

    public function businessPermit()
    {
        return view('users.admin.businessPermit');
    }

    public function indigency()
    {
        return view('users.admin.indigency');
    }

    public function reports()
    {
        return view('users.admin.reports');
    }

    public function message()
    {
        return view('users.admin.message');
    }

    public function programs()
    {
        return view('users.admin.programs');
    }

    public function audits()
    {
        return view('users.admin.audits');
    }

    public function spot()
    {
        return view('users.admin.spot');
    }
    
    public function account()
    {
        return view('users.admin.account');
    }

    public function addOfficials(Request $request)
    {
        $validated = Validator::make($request->all(),
        [
            'display_picture' => ['nullable', File::image()],
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'suffix_name' => ['nullable', 'string', 'max:255'],
            'zone' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:13'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'civil_status' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
        ]);

        if($validated->fails()){
            return response()->json([
                'status' => 400,
                'messages' => $validated->getMessageBag()
            ]);
        }else{
            if($request->hasFile('display_picture')){
                $display_picture_name = $request->file('display_picture')->getClientOriginalName();
                $display_picture = time() . '-' . $display_picture_name;
                // $request->file('display_picture')->storeAs('public/images/brgyOfficials', $display_picture);
                $request->file('display_picture')->move('images/brgyOfficials/profiles', $display_picture);
    
                $official = new BarangayOfficial();
                $official->profile_img = $display_picture;
                $official->lname = $request->last_name;
                $official->fname = $request->first_name;
                $official->mname = $request->middle_name;
                $official->sname = $request->suffix_name;
                $official->zone = $request->zone;
                $official->gender = $request->gender;
                $official->contact = $request->contact;
                $official->email = $request->email;
                $official->c_status = $request->civil_status;
                $official->bday = $request->birthday;
                $official->position = $request->position;
                $official->save();
            }else{
                $official = new BarangayOfficial();
                $official->lname = $request->last_name;
                $official->fname = $request->first_name;
                $official->mname = $request->middle_name;
                $official->sname = $request->suffix_name;
                $official->zone = $request->zone;
                $official->gender = $request->gender;
                $official->contact = $request->contact;
                $official->email = $request->email;
                $official->c_status = $request->civil_status;
                $official->bday = $request->birthday;
                $official->position = $request->position;
                $official->save();
            }

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
            'display_picture' => ['nullable', File::image()],
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'suffix_name' => ['nullable', 'string', 'max:255'],
            'zone' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'contact' => ['required', 'string', 'max:13'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'civil_status' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
        ]);

        if($validated->fails()){
            return response()->json([
                'status' => 400,
                'messages' => $validated->getMessageBag()
            ]);
        }else{
            if($request->hasFile('display_picture')){
                $display_picture_name = $request->file('display_picture')->getClientOriginalName();
                $display_picture = time() . '-' . $display_picture_name;
                // $request->file('display_picture')->storeAs('public/images/brgyOfficials', $display_picture);
                $request->file('display_picture')->move('images/brgyOfficials/profiles', $display_picture);

                $official = BarangayOfficial::find($request->official_id);
                $official->profile_img = $display_picture;
                $official->lname = $request->last_name;
                $official->fname = $request->first_name;
                $official->mname = $request->middle_name;
                $official->sname = $request->suffix_name;
                $official->zone = $request->zone;
                $official->gender = $request->gender;
                $official->contact = $request->contact;
                $official->email = $request->email;
                $official->c_status = $request->civil_status;
                $official->bday = $request->birthday;
                $official->position = $request->position;
                $official->update();
            }else{
                $official = BarangayOfficial::find($request->official_id);
                $official->lname = $request->last_name;
                $official->fname = $request->first_name;
                $official->mname = $request->middle_name;
                $official->sname = $request->suffix_name;
                $official->zone = $request->zone;
                $official->gender = $request->gender;
                $official->contact = $request->contact;
                $official->email = $request->email;
                $official->c_status = $request->civil_status;
                $official->bday = $request->birthday;
                $official->position = $request->position;
                $official->update();
            }


            return response()->json([
                'status' => 200,
                'messages' => 'Updated successfully!'
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
