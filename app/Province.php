<?php

namespace App;

use RajaOngkir;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = ['id', 'name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities()
    {
        return $this->hasMany('App\City');
    }

    /**
     *
     */
    public static function boot()
    {
        parent::boot();

        static::deleting(function($model) {
            // remove relations to cities
            $model->cities()->addresses()->delete;
            $model->cities()->delete();
        });
    }

}
