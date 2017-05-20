<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Session;
class CategoriasController extends Controller {

    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $valorSelect = $request['ordenar'];
            switch ($valorSelect) {
                case "alf":
                    $orden = 'nombre,ASC';
                    break;
                case "asc":
                    $orden = 'precio,ASC';
                    break;
                case "desc":
                    $orden = 'precio,DESC';
                    break;
                default:
                    $orden = 'id,ASC';
                    break;
            }
            //Guardo el valor del switch en sesion
            Session::put('orden',$orden);
            return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        //Si hay sesion orden
        if(Session::has('orden')){
            $orden = Session::get('orden');
            $arrayOrden = explode(',', $orden);
            $columna = $arrayOrden[0];
            $orden = $arrayOrden[1];
        } else {
            $columna = 'id';
            $orden = 'ASC';
        }
        $productos = \App\Categoria::find($id)->productos()
                ->orderby($columna, $orden)
                ->paginate(6);
		$categorias = \App\Categoria::all();
        return view('dobike.categoria')
            ->with('id', $id)
            ->with('categorias', $categorias)
            ->with('productos', $productos);
	}



}
