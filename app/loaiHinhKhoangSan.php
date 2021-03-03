<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaiHinhKhoangSan extends Model
{
    //

    protected $table ="loaiHinhKhoangSan";
     public $timestamps = false;
     
     public function nhomKhoangSan(){
     	return $this->belongsTo('App\nhomKhoangSan','id_nhomKhoangSan','id');
     }

       public function duLieuMo(){
     	return $this->hasManey('App\duLieuMo','loaiKhoangSan','id');
     }



}
