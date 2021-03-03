<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quanHuyen extends Model
{
    //

     protected $table ="quanHuyen";
     public $timestamps = false;

     public function xaPhuong(){
     	return $this->hasManey('App\xaPhuong','id_quanHuyen','id');
     }

     public function duLieuMo(){
     	return $this->hasManey('App\duLieuMo','viTriHuyen','id');
     }
}
