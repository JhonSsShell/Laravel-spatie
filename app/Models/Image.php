<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'path',
      'post_id'
    ];

    protected function getNuevoAttribute(){
      return Storage::disk('post')->url($this->path);
    }
}
