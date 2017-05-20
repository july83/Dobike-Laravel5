<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{
    
    public function run() {
        \DB::table('users')->insert(array (
                'name' => 'Julian',
                'apellidos' => 'Calle Felix',
                'email' => 'juliusmag_@hotmail.com',
                'password' => \Hash::make('secret'),
                'direccion' => 'c/sin numero',
                'localidad' => 'madrid',
                'cp' => '28856',
                'type' => 'user',
        ));
    }
    
}
