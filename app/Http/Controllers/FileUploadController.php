<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{

    public function index()
    {

        
      return Storage::temporaryUrl('files/18d62767b3be9b1a81569156aa1aa63d.jpg','+1 minute');
     
    }

    public function store(Request $request)
    {
        if ($request->hasFile('documents')) {
            foreach ($request->documents as $file) {
                
                $name = $file->getClientOriginalName();
                $file->storeAs('nexgen',$name,'s3'); 
                    
            }
            return "Success";
        }else{
            echo 'No files uploaded';
        }
    }

    
}
