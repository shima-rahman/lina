<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Login;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Validator;
use Input;

use Illuminate\Http\Request;

class UserController extends Controller {

	public function getNewaccount(){
        return view('users/newaccount');
    }
    public function postCreate(Requests\CreateUserRequest $request){
       // $input=Input::all();
        Login::create($request->all());
        return redirect::to('users/signin')
            ->with('message','You r Succfully Sign Up,please Login');
    }
    public function getSignin(){
        return view('users/SignIn');

    }
    public function postSignin(){


            if(Auth::attempt(array('email'=>Input::get('email')))){
                return redirect::to('categories');
            }
        return redirect::to('users/signin')
            ->with('message','username or password wrong');
    }
    public function getSignout(){
        Auth::Signout();
        return redirect::to('users/signin');
    }

}
