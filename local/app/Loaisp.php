<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaisp extends Model
{
    protected $table ="loaisp";

    public function dienthoai(){
    	return $this->hasMany('App\Dienthoai','idLoai','idLoai');
    }
}
