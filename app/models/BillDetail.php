<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = 'bill_detail';
    public $timestamps = false;
    protected $fillable = [
        'variation_id',
        'price',
        'quantity',
        'unit_price',
        'bill_id'
    ];
    public function bill()
    {
        return $this->belongsTo('App\Models\Bill', 'bill_id', 'id');
    }
}
