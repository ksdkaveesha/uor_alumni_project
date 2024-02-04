<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Models\User;
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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'// Add other validation rules for your other fields here
        ]);
        $email = $request->input('email');
        $password = $request->input('password');

        if(Auth::attempt(['email'=>$email, 'password'=>$password])){
            $user = User::where('email',$email)->first();

            if($user->role=="alumni"){
                $alumini_member = alumini_member::where('email',$email)->first();
                Auth::guard('webalumni')->login($alumini_member);
                return redirect('/user');
            }

        } else{
            return redirect()->back()->with('error','invalid username or Password');
        }
    }
}
