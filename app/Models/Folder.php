<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function files()
    {
       return $this->hasMany(File::class);
    }
    public function subfolder()
    {
       return $this->hasMany(Folder::class,'folder_id');
    }
}
