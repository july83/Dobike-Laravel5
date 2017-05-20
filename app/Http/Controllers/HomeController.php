<?php namespace App\Http\Controllers;
use App\Http\Requests;
use Auth;
use Illuminate\Http\Request;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
        $this->categorias = \App\Categoria::all();
		$this->middleware('auth',['only' => ['ofertas']]);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('dobike.index')
                ->with('categorias', $this->categorias)
                ->with('productos', \App\Productos::all()->random(4));
	}

    //Funcion de busqueda de productos, utilizado scope como condicional para filtrar los registros
    public function search(Request $request)
	{

        $productos = \App\Productos::name($request->get('producto'))
                    ->orderby('precio','ASC')
                    ->paginate(6);

        $productos->setPath('search'); //personalizo la url, par que quede igual que al principio
        $palabraBuscada = $request->get('producto'); 
        if(count($productos) > 0) {
            return view('dobike.search.search',['categorias'=>$this->categorias,'productos'=>$productos,'palabraBuscada' =>$palabraBuscada]);

        } else {
            return view('dobike.search.error_busqueda',['categorias'=>$this->categorias]);
        }

	}

    //Pasa por middleware, accesible solo si el usuario esta logueado
    public function ofertas() {
        $productos = \App\Productos::where('rebajas','=','1')
                        ->orderby('precio','ASC')
                        ->paginate(6);
        return view('dobike.ofertas',['categorias'=>$this->categorias,'productos'=>$productos]);
    }
    
    //.........Funciones Empresa.........//
    public function quienSomos () {
        return view('dobike.empresa.quienes_somos')
                ->with('categorias', $this->categorias);
    }
    
    public function avisoLegal () {
        return view('dobike.empresa.aviso_legal')
                ->with('categorias', $this->categorias);
    }
    
    public function condicionesGenerales() {
        return view('dobike.empresa.condiciones_generales')
                ->with('categorias', $this->categorias);
    }
    
    public function politicaCookies() {
        return view('dobike.empresa.politica_cookies')
                ->with('categorias', $this->categorias);
    }
    
}
