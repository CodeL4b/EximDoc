<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = ['product_name','product_HS','product_price','per_price','igst','product_description'];
}
