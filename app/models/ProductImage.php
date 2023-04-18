<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_image';
    public $timestamps = false;
    protected $fillable = [
        'link',
        'product_id'
    ];
    public function products()
    {
        return $this->belongsTo('App\Models\Products', 'product_id', 'id');
    }
}
