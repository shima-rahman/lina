<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;
use App\Category;
use \Validator, \Redirect;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $products=Product::all();
        $categories=array();
        foreach(Category::all() as $category){
            $categories[$category->id]=$category->name;
        }
        return view('products\index')
            ->with('products',$products)
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
        $validator=Validator::make(Input::all(),Product::$rules);
        if($validator)
        {
            $product=new Product;
            $product->category_id=Input::get('category_id');
            $product->title=Input::get('title');
            $product->description=Input::get('description');

            $product->price=Input::get('price');
            $product->image=Input::get('image');

            $product->save();
            return Redirect::to('products')
                ->with('message','Product created')
                ->withErrors($validator)
                ->withInput();

        }
        return Redirect::to('products')
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
	public function destroy(Product $product)
	{
        if($product){
            $product->delete();
            return Redirect::to('products')
                ->with('message','Product Deleted');
        }
        return Redirect::to('products')
            ->with('message','something went wrong, please try again');
	}
    public function availability(Product $product){

        if($product){
            $product->availablity=Input::get('availability');
            $product->save();
            return Redirect::to('products')
                ->with('message','Product updated');
        }
        return Redirect::to('products')
            ->with('message','Invalid product');
    }

}
