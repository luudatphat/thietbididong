<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dienthoai extends Model
{
    protected $table = "dienthoai";

    public function chungloai(){
    	return $this->belongsTo('App\Chungloai','idCL','idDT');
    }

    public function loaisp(){
    	return $this->belongsTo('App\Loaisp','idLoai','idDT');
    }
    public $timestamps = false;
}
