<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class CategoryProduct extends Model
{
    protected $table = 'category_product';

    protected $fillable = ['product_id', 'category_id'];

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
