<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'description'];

    /**
     *
     */
    public static function boot()
    {
        parent::boot();

        static::deleting(function($model) {
            // remove relations to products
            $model->products()->detach();
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    /**
     * @return mixed
     */
    public function getTotalProductsAttribute()
    {
        return Product::whereIn('id', $this->related_products_id)->count();
    }

}
