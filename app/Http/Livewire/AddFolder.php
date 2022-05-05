<?php

namespace App\Http\Livewire;

use App\Models\Folder;
use Livewire\Component;
use App\Http\Requests\StoreFolderRequest;

class AddFolder extends Component
{

public $name = '';
public $folder_id = null;

    public function store() {   
        $this->validate(['name' => 'required|max:255',]);                 
        if(is_null($this->folder_id) && !$this->isFolderPresent($this->folder_id, $this->name)){                 
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

    public function render() {
        $folders = Folder::latest()->get();
        return view('livewire.add-folder',compact('folders'));
    }

    public function isFolderPresent($folder_id, string $name): bool
    {
        $exists = Folder::where('folder_id', $folder_id)->where('name',$name)->first();
        if($exists){
            return true;
        }
       return false;
    }
}
