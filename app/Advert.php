<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $fillable = [
        'category_id', 'user_id', 'region_id', 'description', 'price', 'photomain', 'title'
     ];

    public function region()
    {
        return $this->belongsTo('App\Region');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
