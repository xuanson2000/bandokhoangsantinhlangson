<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class duLieuMo extends Model
{
    //

     protected $table ="duLieuMo";
     public $timestamps = false;

     public function toaDo(){
     	return $this->hasManey('App\toaDo','id_loaihoso','id');
     }

       public function quanHuyen(){
     	return $this->belongsTo('App\quanHuyen','viTriHuyen','id');
     }

      public function xaPhuong(){
     	return $this->belongsTo('App\xaPhuong','viTriXa','id');
     }
     public function loaiHinhKhoangSan(){
     	return $this->belongsTo('App\loaiHinhKhoangSan','loaiKhoangSan','id');
     }
    


}
