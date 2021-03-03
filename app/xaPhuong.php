<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class xaPhuong extends Model
{
    //

 protected $table ="xaPhuong";
     public $timestamps = false;
     
     public function quanHuyen(){
     	return $this->belongsTo('App\quanHuyen','id_quanHuyen','id');
     }

      public function duLieuMo(){
     	return $this->hasManey('App\duLieuMo','viTriXa','id');
     }

       public function KsVungCamHanChe(){
     	return $this->hasManey('App\KsVungCamHanChe','id_xa','id');
     }
}
