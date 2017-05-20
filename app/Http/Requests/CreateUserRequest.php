<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request {

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
    
    //Añadimos las reglas de validación
	public function rules()
	{
		return [
                'name' => 'required|min:3|alpha',
                'apellidos' => 'required|min:3|regex:/[A-Za-záéíóúñ]/',
                'email' => 'required|unique:users|email',
                'password' => 'required|between:4,12',
                'direccion' => 'required|min:3|regex:/[A-Za-záéíóúñ]/',
                'localidad' => 'required|min:3|regex:/[A-Za-záéíóúñ]/',
                'cp' => 'required|digits:5',
		];
	}

}
