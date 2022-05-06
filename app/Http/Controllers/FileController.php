<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function viewFilesByType(string $type)
    {
        
        $extensions = array();

        switch ($type) {
            case 'documents':
                $extensions = array('pdf','doc', 'docx', 'html', 'htm','odt','xls', 'xlsx', 'ods' , 'ppt', 'pptx', 'txt', 'md');
                break;
            case 'images':
                $extensions = array('jpg', 'jpeg', 'png');
                break;
            case 'video':
                $extensions = array( 'mp4');
                break;
            case 'audio':
                $extensions = array('mp3');
                break;
            case 'zip':
                $extensions = array('zip');
                break;
                default:
            $extensions = array('pdf');
                break;
        }

       
        $files = File::get(); 
        $dataCollection =  array_filter($files->toArray(),
            function ($file) use(&$extensions)  {
                return in_array(pathinfo($file['name'], PATHINFO_EXTENSION), $extensions);
            });

            return view('view_files',compact('dataCollection'));
        }
             
        
              

    
    
    public function store(Request $request)
    {

                
        if ($request->hasFile('documents')) {
            foreach ($request->documents as $file) {
                $name = Str::lower($file->getClientOriginalName());
                $file->storeAs('nexgen',$name,'s3');
                // write file
                $this->insertFile($request->folder_id, $name);                     
            }

            return back()->with('message', 'File Succesfuly Uploaded');

        }else{

            return back()->with('message', 'No File  Uploaded');
        }
    }

    public function insertFile(int $folder_id, string $file_name)
    {
            File::create([
                'folder_id' => $folder_id,
                'name'=> $file_name
             ]);
    }

  

    
}
