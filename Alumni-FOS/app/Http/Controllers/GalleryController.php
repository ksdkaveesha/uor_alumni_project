<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
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
    function add_gallery(Request $request)
    {

            $gallery = new gallery();

            $image = $request->file('photo');
            $originalName = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();
            $filename = $this->generateUniqueFilename($originalName, $extension);

            // Store the file in the 'public' disk
            $imgpath = $image->storeAs('gallery',$filename,'public');
            $gallery->name = auth()->guard('webadmin')->user()->name;
            $gallery->img_path = $imgpath;
            $gallery->save();

        return redirect()->back()->with('status','Photo Uploaded Successfully');
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

    /**
     * Display the specified resource.
     */
    public function show_gallery()
    {
        $gallery = gallery::all();
        return view('template/gallery', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gallery $gallery)
    {
        //
    }
}
