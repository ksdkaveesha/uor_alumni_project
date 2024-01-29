<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use App\Models\alumini_member;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
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
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(login $login)
    {
        //
    }

    function authenticate(Request $request){
        $email = $request->input('email');
        $pass = $request->input('pass');

        if(Auth::attempt(['email'=>$email, 'pass'=>$pass])){
            $alumini_member = alumini_member::where('email',$email)->first();
            Auth::login($alumini_member);
            return redirect('\update');
        } else{
            return redirect()->back()->with('error','invalid username or Password');
        }
    }
}
