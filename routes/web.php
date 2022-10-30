<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');

});


/*
Route::get('/about', function () {

    return "Hi about Page!";


});


Route::get('/contact', function () {

    return "Hi I'm Contact";


});


//url multiple parameters

Route::get('/post/{id}/{name}', function($id, $name){

    return "This is post number ". $id ." ". $name;

});

//url nickname
Route::get('admin/posts/example', array('as'=>'admin.home', function(){

    $url = route('admin.home');

    return "This url is ". $url;

}));
//ez is megfelelő átnevezés laravel9.x
//->name('admin.home');
*/

//Route::get('/post/{id}', [PostsController::class, 'index']);

Route::controller(PostsController::class)->group(function () {
    
    Route::get('/contact',  'contact');
    Route::get('/posts/{id}', 'create');
    Route::get('/post/{id}/{name}/{password}',  'show_post');
});




