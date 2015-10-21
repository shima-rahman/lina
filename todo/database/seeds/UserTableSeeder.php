<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= new \App\Login();
        $user->firstname="shima";
        $user->lastname="rahman";
        $user->email="shima221289@gmail.com";
        $user->password=Hash::make('myPassword');
        $user->telephone="56789907654";
        $user->admin=1;
        $user->save();

    }

}
