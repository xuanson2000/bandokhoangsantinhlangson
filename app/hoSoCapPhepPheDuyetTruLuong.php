<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoSoCapPhepPheDuyetTruLuong extends Model
{
    //

	protected $table ="hoSoCapPhepPheDuyetTruLuong";
	public $timestamps = false;


	public function doanhNghiep(){
		return $this->belongsTo('App\doanhNghiep','id_doanhNghiep','id');
	}

	public function chucVu(){
		return $this->belongsTo('App\chucVu','id_chucVu','id');
	}

	public function hoSoCapPhepthamdo(){
		return $this->belongsTo('App\hoSoCapPhepthamdo','id_giayPhepThamDo','id');
	}

	public function hoSoCapPhepKhaiThac(){
		return $this->hasOne('App\hoSoCapPhepKhaiThac','id_hoSoCapPhepPheDuyetTruLuong','id');
	}


}
