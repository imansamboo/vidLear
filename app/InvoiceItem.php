<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    protected $fillable = ['user_id', 'product_id','invoice_id', 'quantity', 'taxed'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function invoice()
    {
        return $this->belongsTo('App\Invoice');
    }
}
