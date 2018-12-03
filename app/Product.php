<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fee;

class Product extends Model
{
    protected $fillable = ['name', 'photo',  'price', 'description'];
    protected $appends = ['photo_path'];


    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }


    public function invoiceItem()
    {
        return $this->hasMany('App\InvoiceItem');
    }

}
