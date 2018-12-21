<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['id', 'province_id', 'name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function province()
    {
        return $this->belongsTo('App\Province');
    }

    /**
     * @return null
     */
    public function getProvinceListsAttribute()
    {
        if ($this->provinces()->count() < 1) {
            return null;
        }
        return $this->provinces->pluck('id')->all();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    /**
     *
     */
    public static function boot()
    {
        parent::boot();

        static::deleting(function($model) {
            // remove relations to cities
            $model->addresses()->delete();
        });
    }
}
