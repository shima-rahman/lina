<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use Input;
use App\Http\Controllers\Controller;

use App\Product;
use Illuminate\Http\Request;

class StoreController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //$products=Product::all();
        return view('store/index')
            ->with('products',Product::take(3)->orderBy('created_at','DESC')->get());

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($cat_id)
	{
		//return view('store.category')
            //->with('product',Product::find($id));
        return view('store/category')
            ->with('products',Product::where('category_id','=',$cat_id)->paginate(2))
            ->with('category',Category::find($cat_id));
       // dd($cat_id);
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
	public function destroy($id)
	{
		//
	}
   public function getSearch(){
       $keyword=Input::get('keyword');
       return view('store/search')
           ->with('products',Product::where('title','LIKE','%'.$keyword.'%')->get())
           ->with('keyword',$keyword);
   }
    public function postAdd_to_cart(){

    }
    public function getCart(){
        return view('store/cart')
            ->with('');
    }

}
