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
	public function rules()
	{
		return [
           // 'firstname'=>'required|min:2|alpha',
           // 'lastname'=>'required|min:2|alpha',
            'email'=>'required|email',
            'password'=>'required|between:8,10|alpha_num|confirmed',
            'password_confirmation'=>'required||alpha_num|between:8,10',
           // 'telephone'=>'required|between:10,12',
		];
	}

}
