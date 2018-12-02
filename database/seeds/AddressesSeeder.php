<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Address;
use App\Province;
use App\City;

class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $userIds = array();
         $mahaleha = array();
         require_once "/home/iman/Documents/project/parto/v01/laravel-online-shop-master/mahaleha.php";
         $cityIds = array();
         $names = array();
         $phones = array();
         foreach (User::all() as $user){
             $userIds[] = $user->id;
         }
         foreach (City::all() as $city){
             $cityIds[] = $city->id;
         }
         foreach (City::all() as $city){
             $names[] = $city->name;
         }
         foreach (User::all() as $user){
             $phones[] = $user->mobile;
         }


         for($i=0; $i < 4*count($userIds); $i++){
             try{
                 Address::updateOrCreate([
                     'user_id' => $userIds[rand(0, count($userIds) -1)],
                     'name' => $names[rand(0, count($names) -1)],
                     'detail' => "    محله " . $mahaleha[rand(0, count($mahaleha) -1)]." پلاک " . rand(1,100) . "  واحد" . rand(1,20),
                     'city_id' => $cityIds[rand(0, count($cityIds) -1)],
                     'phone' => $phones[rand(0, count($phones) -1)],
                 ]);
             }catch(Exception $e){

             }
         }
     }
}
