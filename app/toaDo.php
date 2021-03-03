<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class toaDo extends Model
{
    //
     protected $table ="toaDo";
     public $timestamps = false;

     public function duLieuMo(){
     	return $this->belongsTo('App\duLieuMo','id_loaihoso','id');
     }

}
