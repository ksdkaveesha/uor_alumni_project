<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\alumini_member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }

    function register_member_by_admin(Request $request){
            //dd("test");
           // Custom validation rule for sc_num
            Validator::extend('scnumber', function ($attribute, $value, $parameters, $validator) {
                $pattern = '/^SC\/\d{4}\/\d{4,5}$/';

                return preg_match($pattern, $value) === 1;
            });

            // Custom error message for the scnumber rule
            Validator::replacer('scnumber', function ($message, $attribute, $rule, $parameters) {
                return str_replace(':attribute', $attribute, 'Invalid Format SC/YYYY/NNNNNN');
            });

            // Validate the request data
            $request->validate([
                'sc_number' => 'scnumber',
                'email' => 'email|unique:users|unique:alumini_members',
                'password' => 'confirmed',

                // Using the custom scnumber rule
                // Add other validation rules for your other fields here
            ]);

            $user = new User();
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->role = "alumni";
            $user->save();

            $user = User::where('email',$request->input('email'))->first();

            $alumini_member = new alumini_member();
            $alumini_member->name = $request->input('name');
            $alumini_member->sc_num = $request->input('sc_number');
            $alumini_member->email = $request->input('email');
            $alumini_member->m_code = $request->input('m_code');
            $alumini_member->mobile = $request->input('mobile');
            $alumini_member->degree_type = $request->input('degree_type');
            $alumini_member->degree = $request->input('degree');
            $alumini_member->user_id = $user->id;
            $alumini_member->save();

            return redirect()->back()->with('status', 'User Registered successfully!');
    }

    function register_admin_by_admin(Request $request){
            $user = new User();
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->role = "admin";
            $user->save();

            $user = User::where('email',$request->input('email'))->first();

            $alumini_member = new Admin();
            $alumini_member->name = $request->input('name');
            $alumini_member->m_code = $request->input('m_code');
            $alumini_member->mobile = $request->input('mobile');
            $alumini_member->user_id = $user->id;
            $alumini_member->save();

            return redirect()->back()->with('status', 'Admin Registered successfully!');
    }




}

