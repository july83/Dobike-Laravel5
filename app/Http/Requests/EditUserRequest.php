<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;
class EditUserRequest extends Request {
    
    public function __construct(Route $route) {
        $this->route = $route;
    }

    /**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required|min:3|alpha',
            'apellidos' => 'required|min:3|regex:/[A-Za-záéíóúñ]/',
            'email' => 'required|unique:users,email,'. $this->route()->getParameter('usuario'),//Excluyo mi id para actualizar mi email
            'password' => '',
            'direccion' => 'required|min:3|regex:/[A-Za-záéíóúñ]/',
            'localidad' => 'required|min:3|regex:/[A-Za-záéíóúñ]/',
            'cp' => 'required|digits:5',
		];
	}

}
