<?php namespace App\Http\Controllers;

use App\Category;
use Input;
use \Validator, \Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories=Category::all();
        return view('categories\index')
            ->with('categories',$categories);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator=Validator::make(Input::all(),Category::$rules);
        if($validator->passes())
        {
            $category=new Category;
            $category->name=Input::get('name');
            $category->save();
            return Redirect::to('categories')
                ->with('message','Category created')
                ->withErrors($validator)
                ->withInput();

        }
        return Redirect::to('categories')
            ->with('message','something went wrong');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Category $category)
	{

        if($category){
            $category->delete();
            return Redirect::to('categories')
                ->with('message','Category Deleted');
        }
        return Redirect::to('categories')
            ->with('message','something went wrong, please try again');

	}


}
