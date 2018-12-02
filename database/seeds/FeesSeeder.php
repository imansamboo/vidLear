<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Address;
use App\Province;
use App\City;
use App\Fee;

class FeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {

         $origin = City::where('name', '=', 'تهران')->get()[0]->id;
         foreach (City::all() as $city){
            try{
                Fee::updateOrCreate([
                    'origin' => $origin,
                    'destination' => $city->id,
                    'cost' => 50000*  sqrt(abs($city->id - $origin)),
                ]);
            }catch(Exception $e){

            }
        }

     }
}
