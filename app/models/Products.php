<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'image',
        'description',
        'detail',
        'brand_id'
    ];
    public function brands()
    {
        return $this->belongsTo('App\Models\Brands', 'brand_id', 'id');
    }
    public function variation()
    {
        return $this->hasMany('App\Models\Variation');
    }
    public function productImage()
    {
        return $this->hasMany('App\Models\ProductImage');
    }
}
