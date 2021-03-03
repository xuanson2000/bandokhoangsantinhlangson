<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhomKhoangSan extends Model
{
    //
     protected $table ="nhomKhoangSan";
     public $timestamps = false;

       public function loaiHinhKhoangSan(){
     	return $this->hasManey('App\loaiHinhKhoangSan','id_nhomKhoangSan','id');
     }
}
