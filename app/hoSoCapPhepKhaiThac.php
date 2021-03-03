<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoSoCapPhepKhaiThac extends Model
{
    //
	protected $table ="hoSoCapPhepKhaiThac";
	public $timestamps = false;


	public function doanhNghiep(){
		return $this->belongsTo('App\doanhNghiep','id_doanhNghiep','id');
	}

	public function chucVu(){
		return $this->belongsTo('App\chucVu','id_chucVu','id');
	}

	public function hoSoCapPhepPheDuyetTruLuong(){
		return $this->belongsTo('App\hoSoCapPhepPheDuyetTruLuong','id_hoSoCapPhepPheDuyetTruLuong','id');
	}
	public function hoSoBienDongKhoangSan(){
		return $this->hasOne('App\hoSoBienDongKhoangSan','id_hoSoCapPhepKhaiThac','id');
	}

	public function doanhNghiepChuyenNhuong(){
		return $this->belongsTo('App\doanhNghiepChuyenNhuong','id_doanhNghiepChuyenNhuong','id');
	}


	public function nopNganSachKhoangSan(){
		return $this->hasManey('App\nopNganSachKhoangSan','id_giayPhepKhaiThac','id');
	}
	

	public function hoDongThueDat(){
		return $this->hasManey('App\hoDongThueDat','id_hosocapphepkhaithac','id');
	}

	public function tiencapquyenkhaithac(){
		return $this->hasManey('App\tiencapquyenkhaithac','id_khaithac','id');
	}

	public function tienkyquymoitruong(){
		return $this->hasManey('App\tienkyquymoitruong','id_khaithac','id');
	}

	public function hosocapphepkhaithacdieuchinh(){
		return $this->hasManey('App\hosocapphepkhaithacdieuchinh','id_khaithac','id');
	}
	public function hosothuhoitralaimo(){
		return $this->hasManey('App\hosothuhoitralaimo','id_khaithac','id');
	}


}
