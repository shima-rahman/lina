<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Redirect;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ShimaController extends Controller {

	public function getIndex(){
        //return view('store/contact');
    }
    public function postCreate(){
        return "ruma";
    }
    public function getShima(){

        return Redirect::to('admin/categories/create');
    }

}
