<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    protected $fillable = ['name', 'photo',  'price', 'description', 'discount', 'total_sell_amount', 'total_sell_price'];
    protected $appends = ['photo_path'];

    /**
     *
     */
    public static function boot()
    {
        parent::boot();

        static::deleting(function($model) {
            // remove relations to category
            $model->categories()->detach();
            $model->videos()->delete();
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function videos()
    {
        return $this->hasMany('App\ProductVideo');
    }

    /**
     * @return false|string
     */
    public function getLength()
    {
        $length = 0;
        if ($this->videos()->count() > 0) {
            foreach ($this->videos as $video){
                $length += $video->duration;
            }
        }

        return gmdate("H:i:s",$length);
    }

    /**
     * @return |null
     */
    public function getCategoryListsAttribute()
    {
        if ($this->categories()->count() < 1) {
            return null;
        }
        return $this->categories->pluck('id')->all();
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItem()
    {
        return $this->hasMany('App\InvoiceItem');
    }

    /**
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function getPhotoPathAttribute()
    {
        if ($this->photo !== '') {
            return url('/img2/' . $this->photo);
        } else {
            return 'http://placehold.it/850x618';
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ratings()
    {
        return $this->hasMany('App\Rating');
    }

    public function getAverageRating()
    {
        $averageRate = 0;
        $count = $this->ratings()->count();
        if ($count > 0) {
            foreach ($this->ratings as $rating){
                $averageRate += $rating->rating;
            }
            $averageRate = $averageRate/$count;
            $averageRate = floor($averageRate);
        }
        return $averageRate;
    }


}
