<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice2 extends Model
{
    protected $table = 'invoices2';
    protected $fillable = ['id', 'user_id' , 'status', 'price', 'product_id'];


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
