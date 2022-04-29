<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    public $documents = [];

    public function render()
    {
        return view('livewire.file-upload');
    }

    public function storeDocument(){
// dd('ok');
//         $this->validate([
//             'documents.*' => 'image|max:1024', // 1MB Max
//         ]);
 
        foreach ($this->documents as $document) {
            $document->store('documents','public');
        }
    }
}
