<?php

namespace App\Http\Controllers;

use App\Models\alumini_member as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Rules\scnum;

class AluminiMemberController extends Authenticatable
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
    public function show(alumini_member $alumini_member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(alumini_member $alumini_member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, alumini_member $alumini_member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(alumini_member $alumini_member)
    {
        //
    }

    function register_alumini_member(Request $request){

        /*    // Custom validation rule for sc_num
        Validator::extend('scnumber', function ($attribute, $value, $parameters, $validator) {
            $pattern = '/^SC\/\d{4}\/\d{4,5}$/';

            return preg_match($pattern, $value) === 1;
        });

        // Custom error message for the scnumber rule
        Validator::replacer('scnumber', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'Invalid Format SC/YYYY/NNNNNN');
        });*/

        // Validate the request data
        $request->validate([
            'sc_num' => [ new scnum], // Using the custom scnumber rule
            // Add other validation rules for your other fields here
        ]);


        $alumini_member = new alumini_member();
        $alumini_member->name = $request->input('name');
        $alumini_member->sc_num = $request->input('sc_number');
        $alumini_member->email = $request->input('email');
        $alumini_member->m_code = $request->input('m_code');
        $alumini_member->mobile = $request->input('mobile');
        $alumini_member->degree_type = $request->input('degree_type');
        $alumini_member->degree = $request->input('degree');

        $alumini_member->save();

        return redirect()->back();

    }
}
