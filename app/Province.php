<?php

namespace App;

use RajaOngkir;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = ['id', 'name'];

    public function province()
    {
        return $this->hasMany('App\City');
    }

}
