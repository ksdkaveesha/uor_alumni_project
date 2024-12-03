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

            return redirect('/admin2')->with('status', 'User Registered successfully!');
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
            $alumini_member->email = $request->input('email');
            $alumini_member->m_code = $request->input('m_code');
            $alumini_member->mobile = $request->input('mobile');
            $alumini_member->user_id = $user->id;
            $alumini_member->save();

            return redirect()->back()->with('status', 'Admin Registered successfully!');
    }

    public function search_alumni_member(Request $request){
        $search = $request->input('search_alumni_member');

        $alumni_member = alumini_member::where('sc_num','Like',"%$search%")->orwhere('email','Like',"%$search%")->orwhere('mobile','Like',"%$search%")->orwhere('mobile','Like',"%$search%")->get();


        return view('template/admin2',compact('alumni_member'));
    }

    public function display_admin2()
    {
        // Retrieve the last three records from the database
        //$last_testamonials = check_testamonials::latest()->take(5)->get();

        return view('template/admin2');

    }

    public function admin_userinfo_update(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'sc_num' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'm_code' => 'required|string|max:5',
            'degree_type' => 'nullable|string|max:255',
            'degree' => 'nullable|string|max:255',
            'id_num' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'graduation_year' => 'nullable|integer',
            'designation' => 'nullable|string|max:255',
            'sector' => 'nullable|string|max:255',
            'path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        // Fetch the alumni_member based on the id
        $alumni_member = alumini_member::find($id);
        $user = User::where('id', $alumni_member->user_id)->first();

        if (!$alumni_member) {
            return redirect('/admin2')->with('error', 'Alumni member not found.');
        }

        // Update alumni member details
        $alumni_member->name = $request->input('name');
        $alumni_member->email = $request->input('email');
        $alumni_member->sc_num = $request->input('sc_num');
        $alumni_member->m_code = $request->input('m_code');
        $alumni_member->mobile = $request->input('mobile');
        //$alumni_member->degree_type = $request->input('degree_type');
        $alumni_member->degree = $request->input('degree');
        $alumni_member->id_num = $request->input('id_num');
        $alumni_member->country = $request->input('country');
        $alumni_member->address = $request->input('address');
        $alumni_member->graduation_year = $request->input('graduation_year');
        $alumni_member->designation = $request->input('designation');
        $alumni_member->sector = $request->input('sector');
        $user->password = Hash::make('123456');

        // Handle profile picture upload
        if ($request->hasFile('path')) {
            // Store the new file
            $path = $request->file('path')->store('profile_pictures', 'public');
            $alumni_member->path = $path; // Update path in the database
        }

        $alumni_member->save();
        $user->save();

        return redirect('/admin2')->with('success', 'Alumni member updated successfully.');
    }

    public function admin_userinfo_delete($id)
    {
        // Find the alumni member by ID
        $alumni_member = alumini_member::find($id);
        $find_user = $alumni_member->email;
        $user = User::where('email','Like',"%$find_user%");

        if (!$alumni_member) {
            return redirect('/admin2')->with('error', 'Alumni member not found.');
        }

        // Delete the alumni member
        $alumni_member->delete();
        $user->delete();

        return redirect('/admin2')->with('succ_notice', 'Alumni member deleted successfully.');
    }

}

