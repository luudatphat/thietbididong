<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chungloai extends Model
{
    protected $table = 'chungloai';

    public function dienthoai(){
    	return $this->hasMany('App\Dienthoai','idCL','idCL');
    }
}
