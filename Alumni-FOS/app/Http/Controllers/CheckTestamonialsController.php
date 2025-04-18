<?php

namespace App\Http\Controllers;

use App\Models\check_testamonials;
use Illuminate\Http\Request;

class CheckTestamonialsController extends Controller
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
    public function show(check_testamonials $check_testamonials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(check_testamonials $check_testamonials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, check_testamonials $check_testamonials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(check_testamonials $check_testamonials)
    {
        //
    }


    function check_testamonials(Request $request){

        $check_testamonials = new check_testamonials();
        $check_testamonials->name = auth()->guard('webalumni')->user()->name;
        $check_testamonials->img = auth()->guard('webalumni')->user()->path ?? 'assets/img/profile-img.jpg';
        $check_testamonials->topic = $request->input('topic');
        $check_testamonials->testamonial = $request->input('testamonial');

        $check_testamonials->save();
        return redirect('/user')->with('status', 'Testimonial submitted successfully!');

    }

    function check_testamonials_admin(Request $request){

        $check_testamonials = new check_testamonials();
        $check_testamonials->name = auth()->guard('webadmin')->user()->name;
        $check_testamonials->img = auth()->guard('webadmin')->user()->path ?? 'assets/img/profile-img.jpg';
        $check_testamonials->topic = $request->input('topic');
        $check_testamonials->testamonial = $request->input('testamonial');

        $check_testamonials->save();
        return redirect('/admin2')->with('status', 'Testimonial submitted successfully!');

    }

    function testamonials_del($id){
        $check_testamonials = check_testamonials::find($id);
        $check_testamonials->delete();
        return redirect()->back()->with('succ_notice', 'Testimonial deleted successfully.');
    }
}
