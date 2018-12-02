<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array();
        require_once '/home/iman/Documents/project/parto/v01/laravel-online-shop-master/utapi.php';
        // sample admin
        App\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
            'nationalCode' => 0015275051,
            'mobile' => '09120621785',
            'isAdmin' => '1'
        ]);
        for ($i=100000; $i<101000; $i++){
            try{
            App\User::updateOrCreate([
                'name' => $users[$i]['personInfo']['firstName'] . ' ' . $users[$i]['personInfo']['lastName'],
                'email' => substr($users[$i]['personInfo']['utEmail'],0, strpos($users[$i]['personInfo']['utEmail'],'@')). '@gmail.com',
                'password' => bcrypt('secret'),
                'nationalCode' => $users[$i]['personInfo']['nationalCode'],
                'mobile' => $users[$i]['personInfo']['phoneNumber'],
                'isAdmin' => '0'
            ]);
            }catch(Exception $e){

            }
            // sample customer

        }

    }
}
