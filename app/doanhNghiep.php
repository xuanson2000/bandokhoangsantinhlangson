<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doanhNghiep extends Model
{
    //

    protected $table ="doanhNghiep";
     public $timestamps = false;

     public function hoSoCapPhepthamdo(){
     	return $this->hasManey('App\hoSoCapPhepthamdo','id_doanhNghiep','id');
     }
      public function hoSoCapPhepPheDuyetTruLuong(){
     	return $this->hasManey('App\hoSoCapPhepPheDuyetTruLuong','id_doanhNghiep','id');
     }
    
     public function doanhNghiepChuyenNhuong(){
		return $this->hasManey('App\doanhNghiepChuyenNhuong','id_doanhnghiep','id');
	}

}
                                                                                                                                                                                                                                                  