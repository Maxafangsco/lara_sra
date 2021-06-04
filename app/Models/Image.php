<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

  protected $table = 'images';
  
  protected $fillable = array('album_id','description','image');


  public function image()
    {
        return $this->belongsTo(album::class);
    }
}
