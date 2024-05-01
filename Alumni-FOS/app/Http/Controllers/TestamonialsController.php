<?php

namespace App\Http\Controllers;

use App\Models\testamonials;
use Illuminate\Http\Request;
use App\Models\check_testamonials;

class TestamonialsController extends Controller
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
    public function show(testamonials $testamonials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(testamonials $testamonials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, testamonials $testamonials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(testamonials $testamonials)
    {
        //
    }

    function accept_testamonials($id){

        $check_testamonials = check_testamonials::find($id);
        $accept_testamonials = new testamonials();
        $accept_testamonials->name = $check_testamonials->name;
        $accept_testamonials->topic = $check_testamonials->topic;
        $accept_testamonials->testamonial = $check_testamonials->testamonial;

        $accept_testamonials->save();
        return redirect()->back()->with('succ_notice', 'Testamonial Approved');

    }

}
