<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coQuanCapPhep extends Model
{
    //

    protected $table ="coQuanCapPhep";
     public $timestamps = false;

      public function duLieuMo(){
     	return $this->hasManey('App\duLieuMo','coQuanPheDuyet','id');
     }
}
