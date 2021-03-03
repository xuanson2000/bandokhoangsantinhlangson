<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doanhNghiepChuyenNhuong extends Model
{
    //


	protected $table ="doanhNghiepChuyenNhuong";
	public $timestamps = false;

	public function hoSoBienDongKhoangSan(){
		return $this->hasManey('App\hoSoBienDongKhoangSan','id_doanhNghiepChuyenNhuong','id');
	}
	
	public function hoSoCapPhepKhaiThac(){
		return $this->hasManey('App\hoSoCapPhepKhaiThac','id_doanhNghiepChuyenNhuong','id');
	}


	public function doanhNghiep(){
		return $this->belongsTo('App\doanhNghiep','id_doanhnghiep','id');
	}

	

}
