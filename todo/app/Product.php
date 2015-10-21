<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $guarded=[];
    public static $rules=array(
        'category_id'=>'required|integer',
        //'title'=>'required|min:2',
        // 'description'=>'required|min:20',
        // 'price'=>'required|numeric',

        //'image'=>'required|image|mimes:jpeg,jpg,bmp,png,gif'
    );
    public function Category(){
        return  $this->belongsTo('Category');
    }

}
