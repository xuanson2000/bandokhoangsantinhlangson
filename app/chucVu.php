<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chucVu extends Model
{
    //
    
    protected $table ="chucVu";
     public $timestamps = false;

     public function hoSoCapPhepPheDuyetTruLuong(){
     	return $this->hasManey('App\hoSoCapPhepPheDuyetTruLuong','id_chucVu','id');
     }

     public function duLieuMo(){
        return $this->hasManey('App\duLieuMo','id_chucVu','id');
    }
     public function hoSoCapPhepthamdo(){
     	return $this->hasManey('App\hoSoCapPhepthamdo','id_chucVu','id');
     }
    
     public function hoSoCapPhepKhaiThac(){
     	return $this->hasManey('App\hoSoCapPhepKhaiThac','id_chucVu','id');
     }
     
      public function hoSoBienDongKhoangSan(){
        return $this->hasManey('App\hoSoBienDongKhoangSan','id_chucVu','id');
     }
     

}
