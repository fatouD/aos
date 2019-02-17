<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
   protected $fillable = ['id', 'album_id', 'photo','description'];

     public function album()
    {
      return $this->belongsTo(Album::class);
    }
}
