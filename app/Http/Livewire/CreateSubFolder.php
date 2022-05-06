<?php

namespace App\Http\Livewire;

use App\Models\Folder;
use App\Models\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CreateSubFolder extends Component{

    public $folder;//from url
    use WithFileUploads;

    public $file;
    public $folder_id = null;
    public $name = '';
    public $get_folder;

 
    protected $queryString = ['folder'];

    public function mount()
    {
        $this->get_folder = Folder::where('id','like','%'.$this->folder.'%')->firstOrFail();
    }

    

    public function render()
    {
       $folders = Folder::where('folder_id',$this->get_folder->id)->latest()->get();
       $files = File::where('folder_id',$this->get_folder->id)->latest()->get();
      
        return view('livewire.create-sub-folder',compact('folders','files'));
    }


    public function addFolder() {
        $this->folder_id = $this->get_folder->id;
        $this->validate(['name' => 'required|max:255',]);                 
        if(is_null($this->folder_id) && !$this->isFolderPresent($this->folder_id, $this->name)){                 
            Folder::create(['name'=> $this->name]);
            session()->flash('success','Done..');

        }else if(!$this->isFolderPresent($this->folder_id, $this->name)){
            Folder::create([
                'name'=> $this->name,
                'folder_id'=> $this->folder_id
            ]);

            session()->flash('success','Done..');
            
        }else{
            session()->flash('error',$this->name.' Folder already exists.');
        }
        
        $this->reset('name');
        return redirect()->back();
    }

    public function isFolderPresent($folder_id, string $name): bool
    {
        $exists = Folder::where('folder_id', $folder_id)->where('name',$name)->first();
        if($exists){
            return true;
        }
       return false;
    }

    public function deleteFile($id)
    {
      $file =  File::findOrFail($id);

      try {
        Storage::delete('nexgen/'.$file->name);
        $file->delete();
      } catch (\Throwable $e) {
          
        return $e->getMessage();
      }
      session()->flash('success',"File has been Deleted successfuly");
      return back();
    }
}
