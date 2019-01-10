<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PtOrder extends Model
{
    protected $table = 'pt2_orders';
    public $timestamps = false;
    protected $fillable = ['product_id', 'price', 'user_id', 'date', 'shamsi_date', 'payment_result', 'au'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
