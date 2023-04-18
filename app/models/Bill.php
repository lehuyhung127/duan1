<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bill';
    public $timestamps = true;
    protected $fillable = [
        'fullname',
        'phone',
        'address',
        'total_price',
        'status',
    ];
    public function variation()
    {
        return $this->belongsToMany('App\Models\Variation', 'bill_detail', 'bill_id', 'variation_id');
    }
    public function billDetail(){
        return $this->hasMany('App\Models\BillDetail');
    }
}
