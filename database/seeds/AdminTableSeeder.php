<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder{
    
    public function run() {
        \DB::table('users')->insert(array (
                'name' => 'Admin',
                'apellidos' => 'Admin',
                'email' => 'julycf83@gmail.com',
                'password' => \Hash::make('secret'),
                'direccion' => 'c/sin numero',
                'localidad' => 'madrid',
                'cp' => '28856',
                'type' => 'admin',
        ));
    }
    
}
