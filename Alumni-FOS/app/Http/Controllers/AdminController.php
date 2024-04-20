<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\testamonials;
use Illuminate\Http\Request;

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

    function add_notice(Request $request){

        $Admin = new Admin();
        $Admin->name = $request->input('name');
        $Admin->topic = $request->input('topic');
        $Admin->notice = $request->input('notice');

        $Admin->save();
        return redirect()->back()->with('status', 'Notice submitted successfully!');

    }

    public function display_notice()
    {
        // Retrieve the last three records from the database
        $lastThreeRecords = Admin::latest()->take(3)->get();
        $lastThreeRecords_test = testamonials::latest()->take(3)->get();

        return view('template/index', compact('lastThreeRecords','lastThreeRecords_test'));

    }

    public function display_notice_testamonials()
    {
        // Retrieve the all records from the database
        $notice = Admin::all();
        $testamonials = testamonials::all();

        return view('template/news', compact('notice','testamonials'));

    }
}
