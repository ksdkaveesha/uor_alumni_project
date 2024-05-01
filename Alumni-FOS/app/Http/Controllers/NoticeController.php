<?php

namespace App\Http\Controllers;

use App\Models\notice;
use App\Models\testamonials;
use Illuminate\Http\Request;

class NoticeController extends Controller
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
    public function show(notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(notice $notice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, notice $notice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(notice $notice)
    {
        //
    }

    function add_notice(Request $request){

        $notice = new notice();
        $notice->name = $request->input('name');
        $notice->topic = $request->input('topic');
        $notice->notice = $request->input('notice');

        $notice->save();
        return redirect()->back()->with('status', 'Notice submitted successfully!');

    }

    public function display_notice()
    {
        // Retrieve the last three records from the database
        $lastThreeRecords = notice::latest()->take(3)->get();
        $lastThreeRecords_test = testamonials::latest()->take(3)->get();

        return view('template/index', compact('lastThreeRecords','lastThreeRecords_test'));

    }

    public function display_notice_testamonials()
    {
        // Retrieve the all records from the database
        $notice = notice::all();
        $testamonials = testamonials::all();

        return view('template/news', compact('notice','testamonials'));

    }

    public function display_notice_testamonials_adminpage()
    {
        // Retrieve the all records from the database
        $notice = notice::all();

        return view('template/admin', compact('notice'));

    }

    public function search_notice(Request $request){
        $search = $request->input('search_notice');

        $notice = notice::where('created_at','Like',"%$search%")->get();


        return view('template/admin',compact('notice'));
    }

    function notice_del($id){
        $check_notice = notice::find($id);
        $check_notice->delete();
        return redirect()->back()->with('status', 'Notice deleted successfully.');
    }
}
