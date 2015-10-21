<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $guarded=[];
public static $rules=array('name'=>'required|min:3');
    public function Product(){
        return $this->hasMany('Product');
    }

}
