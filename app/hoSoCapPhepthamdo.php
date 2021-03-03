<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoSoCapPhepthamdo extends Model
{
    //
	protected $table ="hoSoCapPhepthamdo";
	public $timestamps = false;


	public function doanhNghiep(){
		return $this->belongsTo('App\doanhNghiep','id_doanhNghiep','id');
	}


	public function duLieuMo(){
		return $this->belongsTo('App\duLieuMo','id_mo','id');
	}

	public function chucVu(){
		return $this->belongsTo('App\chucVu','id_chucVu','id');
	}

	public function hoSoCapPhepPheDuyetTruLuong(){
		return $this->hasOne('App\hoSoCapPhepPheDuyetTruLuong','id_giayPhepThamDo','id');
	}

}

