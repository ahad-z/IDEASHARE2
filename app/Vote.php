<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Vote extends Model
{
    protected $guarded = [];

    public function posts()
    {
    	return $this->hasMany(Posts::class);
    }

}
