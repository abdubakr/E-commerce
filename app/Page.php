<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Page extends Model
{

    protected $table = 'pages';
    protected $fillable = [
        'title', 'content', 'slug','seo_desc','seo_keys','image','user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');

    }

    public function getCreatorAttribute()
    {
        return isset($this->user->name) ? $this->user->name :'unknown';
    }

    public function getPhotoAttribute()
    {
        return \Storage::url($this->image);
    }
}
