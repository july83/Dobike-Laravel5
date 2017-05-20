<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
class ProductoController extends Controller {


	
	public function show($id)
	{
        $categorias = \App\Categoria::all();
        $producto = \App\Productos::find($id);
        return view('dobike.producto')
            ->with('categorias', $categorias)
            ->with('producto', $producto);
	}


}
