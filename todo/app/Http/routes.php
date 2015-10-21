<?php
Route::model('tasks', 'Task');
Route::model('projects', 'Project');
Route::model('categories', 'App\Category');
Route::model('products', 'App\Product');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::resource('projects','ProjectsController');
//Route::resource('tasks','TasksController');
Route::resource('projects.tasks','TasksController');
Route::bind('tasks', function($value, $route) {
    return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});
Route::resource('categories','CategoryController');
Route::resource('products','ProductController');
Route::get('availability','ProductController@availability');
Route::resource('store','StoreController');
Route::resource('category','getCategoryController');
Route::get('search','StoreController@getSearch');
Route::controller('users','UserController');
//Route::resource('login','LoginController');
//Route::get('contact','LoginController@Contact');
//Route::controller('admin/categories','ShimaController');

Route::get('practice',function(){
   $count=1;
    while($count<=10){
        if($count==5){
            $count++;
            continue;
        }
        echo "{$count}<br/>";
        $count++;
    }
    //echo "hello";

});

