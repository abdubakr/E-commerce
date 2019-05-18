<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'details', 'slug','seo_desc','seo_keys','image','user_id','category_id','brand_id'
    ];
}
