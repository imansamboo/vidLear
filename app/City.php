<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['id', 'province_id', 'name'];

    public function province()
    {
        return $this->belongsTo('App\Province');
    }
}
