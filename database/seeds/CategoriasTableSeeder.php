<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder{
    
    public function run() {
            \DB::table('categorias')->insert(array (
                ['nombre' => 'bicicletas', 'imagen' => 'categoria1.jpg'],
                ['nombre' => 'componentes', 'imagen' => 'categoria2.jpg'],
                ['nombre' => 'accesorios', 'imagen' => 'categoria3.jpg'],
                ['nombre' => 'ropa', 'imagen' => 'categoria4.jpg'],
                ['nombre' => 'nutricion', 'imagen' => 'categoria5.jpg'],
            ));

    }
    
}
