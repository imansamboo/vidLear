<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['id', 'user_id', 'address_id' , 'status', 'sub_total_payment', 'total_payment', 'tax_payment'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function details()
    {
        return $this->hasMany('App\InvoiceDetail');
    }

    public function address()
    {
        return $this->belongsTo('App\Address');
    }

}
