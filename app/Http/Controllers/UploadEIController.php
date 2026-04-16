<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadEIController extends Controller
{
    // Show form
    public function show()
    {
        return view('uploadEI');
    }


   public function upload(Request $request)
{
    $request->validate([
        'file' => 'required|file|mimes:jpg,png,pdf|max:2048'
    ]);

    if ($request->hasFile('file')) {

        $file = $request->file('file');

        $path = $file->store('anil', 'public');

        return "File uploaded successfully! " . $path;
    }

    return "No file uploaded";
}
}