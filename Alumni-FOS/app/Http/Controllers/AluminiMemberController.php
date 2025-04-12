<?php

namespace App\Http\Controllers;

use App\Models\alumini_member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Rules\scnum;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Mail\RegisterMail;

class AluminiMemberController extends Controller
{

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(alumini_member $alumini_member)
    {
        //
    }

    public function register_alumini_member(Request $request)
    {
        // Extend Validator with custom SC number format
        Validator::extend('scnumber', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^\d{4}\/\d{3,6}$/', $value);
        });

        Validator::replacer('scnumber', function ($message, $attribute, $rule, $parameters) {
            return 'Invalid Format. Expected: YYYY/XXXXXX';
        });

        // Validate all required fields
        $request->validate([
            'name' => 'required|string|max:255',
            'sc_number' => 'required|scnumber|confirmed',
            'email' => 'required|email|unique:users,email|unique:alumini_members,email',
            'password' => 'required|confirmed|min:6',
            'm_code' => 'required|string',
            'membership_category' => 'required|string',
            'mobile' => 'required|string',
            'degree_type' => 'required|string',
            'degree' => 'required|string',
        ]);

        try {
            // Start transaction
            DB::beginTransaction();

            // Create user
            $user = new User();
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->role = "alumni";
            $user->save();

            // Create alumini member
            $alumini_member = new alumini_member();
            $alumini_member->name = $request->input('name');
            $alumini_member->sc_num = $request->input('sc_number');
            $alumini_member->email = $request->input('email');
            $alumini_member->m_code = $request->input('m_code');
            $alumini_member->membership_category = $request->input('membership_category');
            $alumini_member->mobile = $request->input('mobile');
            $alumini_member->degree_type = $request->input('degree_type');
            $alumini_member->degree = $request->input('degree');
            $alumini_member->user_id = $user->id;
            $alumini_member->save();

            // Send confirmation email
            Mail::to($alumini_member->email)->send(new RegisterMail($alumini_member->name));

            // Commit transaction
            DB::commit();

            return redirect()->back()->with('success', 'Registered successfully!');

        } catch (\Exception $e) {
            // Rollback on error
            DB::rollBack();

            // Optionally log error: Log::error($e);

            return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }
    }

    public function update(Request $request)
    {

        $alumini_member = alumini_member::find(auth()->guard('webalumni')->user()->id);
        $alumini_member->name = $request->input('name');
        $alumini_member->mobile = $request->input('mobile');
        $alumini_member->graduation_year = $request->input('graduation_year');
        $alumini_member->id_num = $request->input('id_num');
        $alumini_member->country = $request->input('country');
        $alumini_member->address = $request->input('address');
        $alumini_member->sector = $request->input('sector');
        $alumini_member->designation = $request->input('designation');

        $alumini_member->update();
        return redirect('/user')->with('status','User Updated Successfully');
    }

    function add_photo(Request $request)
    {
        if ($request->hasFile('photo')){
            $alumni = alumini_member::find(auth()->guard('webalumni')->user()->id);
            if ($alumni->path !== NULL) {
                File::delete('storage/'.$alumni->path);
            }

            $image = $request->file('photo');
            $originalName = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();
            $filename = $this->generateUniqueFilename($originalName, $extension);

            // Store the file in the 'public' disk
            $imgpath = $image->storeAs('images',$filename,'public');

            $alumni = alumini_member::find(auth()->guard('webalumni')->user()->id);
            $alumni->path = $imgpath;
            $alumni->update();
        }
        return redirect()->back()->with('status','Photo Updated Successfully');
    }

    private function generateUniqueFilename($originalName, $extension)
    {
        // You can use various strategies here to generate a unique filename
        // For example, appending a timestamp or a random string to the original name.
        $filename = pathinfo($originalName, PATHINFO_FILENAME);
        $filename = Str::slug($filename); // Convert to a URL-friendly slug
        $filename = $filename . '_' . time() . '.' . $extension;

        return $filename;
    }

}
