<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    protected $table = 'variation';
    public $timestamps = false;
    protected $fillable = [
        'color_id',
        'size_id',
        'product_id',
        'quantity',
        'price',
        'discount'
    ];
    public function color()
    {
        return $this->belongsTo('App\Models\Color', 'color_id', 'id');
    }
    public function size()
    {
        return $this->belongsTo('App\Models\Size', 'size_id', 'id');
    }
    public function products()
    {
        return $this->belongsTo('App\Models\Products', 'product_id', 'id');
    }
    public function billDetail()
    {
        return $this->hasMany('App\Models\BillDetail');
    }
}
