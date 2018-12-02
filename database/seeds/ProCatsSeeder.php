<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Address;
use App\Province;
use App\CategoryProduct;
use App\City;
use App\Product;
use App\Category;
use Illuminate\Database\Capsule;
use Illuminate\Support\Facades\DB;


class ProCatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $proCatsArray = array();

         require_once "/home/iman/Documents/project/parto/v01/laravel-online-shop-master/proCatsArray.php";
         foreach ($proCatsArray as $cat => $proArray){
             try{
                 Category::updateOrCreate(
                     array(
                      'title' =>    $cat,
                      'description' => ' توضیحاتی پیرامون ' . $cat
                     )
                 );
                 $catId = Category::where('title', '=', $cat)->get()[0]->id;
                 foreach ($proArray as $product){
                     Product::create(
                         array(
                             'name' => $product,
                             'description' => ' توضیحاتی پیرامون ' . $product,
                             'price' => 10000 * rand(1, 20),
                         )
                     );

                     $proId = Product::where('name', '=', $product)->get()[0]->id;
                     CategoryProduct::create(
                         array(
                             'product_id' => $proId,
                             'category_id' => $catId,
                         )
                     );

                 }
             }catch (Exception $e){

             }
         }
     }
}
