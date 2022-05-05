<?php

namespace App\Http\Livewire;

use App\Models\Folder;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateSubFolder extends Component{

    public $folder;//from url
    use WithFileUploads;

    public $file;
    public $folder_id = null;

 
    protected $queryString = ['folder'];

    public function mount()
    {
        $this->get_folder = Folder::where('id','like','%'.$this->folder.'%')->firstOrFail();
    }

    

    public function render()
    {
       $folders = Folder::latest()->get();
        return view('livewire.create-sub-folder',compact('folders'));
    }


    public function addFolder() {
        $this->folder_id = request('folder_id');   
        $this->validate(['name' => 'required|max:255',]);                 
        if(! is_null($this->folder_id) && $this->isFolderPresent($this->folder_id, $this->name)){                 
            Folder::create(['name'=> $this->name]);
            session()->flash('success','Done..');

        }else if(! $this->isFolderPresent($this->folder_id, $this->name)){

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
}
