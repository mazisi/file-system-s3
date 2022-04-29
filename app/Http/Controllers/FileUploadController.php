<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('documents')) {
            foreach ($request->documents as $file) {
                $name = $file->getClientOriginalName();
                $file->storeAs('files/',$name);    
                    
            }
            return "Success";
        }else{
            echo 'No files uploaded';
        }
    }
}
