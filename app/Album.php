<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  protected $table = 'albums';
  protected $fillable = array ('id','name','location','image','description','year','cover_image');
  public function Photos(){
    return $this->hasMany ('App\Image');
  }
}
