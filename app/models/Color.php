<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    // khai báo tên bảng
    protected $table = 'color';
    // 
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];
    public function variation()
    {
        return $this->hasMany('App\Models\Variation');
    }
}
