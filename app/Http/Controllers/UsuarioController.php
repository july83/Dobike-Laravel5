<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
use Mail;
class UsuarioController extends Controller {
    
     public function __construct()
	{
        $this->categorias = \App\Categoria::all();
        $this->middleware('auth',['only' => ['show', 'edit', 'update', 'destroy']]);
	}

	/**
	 * Display a listing of the resource.
	 * Mostrar una lista de los recursos.
	 * @return Response
	 */
	public function index()
	{
        return view('dobike.index')
        ->with('categorias', $this->categorias)
        ->with('productos', \App\Productos::all()->random(4));
	}

    /**
	 * Show the form for creating a new resource.
	 * Mostrar el formulario para crear un nuevo recurso.
	 * @return Response
	 */
	public function create()
	{
		return view('auth.registro')
                ->with('categorias', $this->categorias);
	}

    /**
	 * Store a newly created resource in storage.
	 * Almacenar un recurso recién creado en el almacenamiento.
	 * @return Response
	 */
	public function store(CreateUserRequest $request)
	{
        $user = \App\User::create([
                'name' => $request['name'],
                'apellidos' => $request['apellidos'],
                'email' => $request['email'],
                'password' => $request['password'],
                'direccion' => $request['direccion'],
                'localidad' => $request['localidad'],
                'cp' => $request['cp'],
                'active' => 0,
                'confirm_token' => str_random(100),
                'remember_token' => str_random(100),   
            ]);
            $data['name'] = $user->name;
            $data['email'] = $user->email;
            $data['confirm_token'] = $user->confirm_token;
            
            Mail::send('emails.register', ['data' => $data], function($msj) use($data){
                $msj->subject('Confirma tu cuenta');
                $msj->to($data['email'], $data['name']);
            });
            Session::flash('info', 'Hemos enviado un enlace de confirmacion a tu cuenta de correo');
        return \Redirect::route('usuario.index');
	}
    
    public function confirmRegister($confirm_token){
            
            $user = \App\User::where('confirm_token', '=', $confirm_token)
                    ->first();
             // si hay usuario activamos la cuenta
            if($user){
                if($user->active == 0) {
                    $user->type = 'user';
                    $active = 1;
                    $user->fill(['active' => $active]);
                    $user->save();
                    Session::flash('success', 'Bienvenido '.$user->name.' tu cuenta esta activada, ya puedes iniciar sesion');
                    return \Redirect::route('usuario.index');
                } else {
                    return \Redirect::route('usuario.index');
                }
            }
            Session::flash('danger', 'Error de activación, token no encontrado');
            return \Redirect::route('usuario.index');
        }

	/**
	 * Display the specified resource.
	 * Visualizar el recurso especificado.
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		 $usuario = \App\User::find($id);
            //Compruebo que el perfil sea del usuario
            if($usuario == null) {
            Session::flash('info', 'No puedes acceder a este perfil');
            return \Redirect::route('usuario.index');
            }else if(Auth::user()->id === $usuario->id){
                return view('auth.perfil')
                ->with('categorias', $this->categorias)
                ->with('usuario', $usuario);
            } else {
                Session::flash('info', 'No puedes acceder a este perfil');
                return \Redirect::route('usuario.index');
            }
	}

	/**
	 * Show the form for editing the specified resource.
	 * Mostrar el formulario para editar el recurso especificado.
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
//        $user = User::find($id);
//		return view('auth.edit_perfil', compact('user'))
//                ->with('categorias', $this->categorias);
        
        $user = User::find($id);
        if($user == null) {
            Session::flash('info', 'No puedes acceder a este perfil');
            return \Redirect::route('usuario.index');
        }else if(Auth::user()->id === $user->id){
		return view('auth.edit_perfil', compact('user'))
                ->with('categorias', $this->categorias);
        } else {
            Session::flash('info', 'No puedes acceder a este perfil');
            return \Redirect::route('usuario.index');
        }
	}

	/**
	 * Update the specified resource in storage.
	 * Actualizar el recurso especificado en el almacenamiento.
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditUserRequest $request, $id)
	{
		$user = User::find($id);
        //relleno los datos nuevos
        $user->fill($request->all());
        $user->save();
        return \Redirect("/usuario/$user->id");
	}

	/**
	 * Remove the specified resource from storage.
	 * Quitar el recurso especificado de almacenamiento.
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $user = User::find($id);
        $user->delete();
        
        $data['name'] = $user->name;
        $data['email'] = $user->email;

        Mail::send('emails.delete', ['data' => $data], function($msj) use($data){
            $msj->subject('Baja de usuario');
            $msj->to($data['email'], $data['name']);
        });
       
        Session::flash('success', $user->name.' fue eliminado de nuestros regisros');
        return \Redirect("/usuario");
	}

}
