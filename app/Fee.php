<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Fee extends Model
{
    protected $fillable = ['origin', 'destination', 'cost'];

   /* public static function getCost($origin_id, $destination_id, $weight, $courier, $service)
    {
        $fee = static::firstOrCreate([
            'origin'      => $origin_id,
            'destination' => $destination_id,
            'service'     => $service
        ]);


    }

    protected function haveCost()
    {
        return $this->cost > 0;
    }*/

}
