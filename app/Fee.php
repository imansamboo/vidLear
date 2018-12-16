<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;

class Fee extends Model
{
    protected $fillable = ['origin', 'destination', 'cost'];

    public function province($id) {
        return Province::find($id);
    }

}
