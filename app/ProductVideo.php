<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVideo extends Model
{
    protected $table = 'product_videos';
    protected $fillable = ['title', 'duration','product_id', 'video'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function getVideoPathAttribute()
    {
        if ($this->video !== '') {
            return url('/videos/' . $this->video);
        } else {
            return 'http://placehold.it/850x618';
        }
    }

}
