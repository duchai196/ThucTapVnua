<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }

    public function orderDetail()
    {
        return $this->hasMany('App\Model\Order_detail');
    }

    public function imgProduct()
    {
        return $this->hasMany('App\Model\Img_product');
    }

    public function brand()
    {
        return $this->belongsTo('App\Model\Brand');
    }

    public function size()
    {
        return $this->hasMany('App\Model\Size');
    }
}
