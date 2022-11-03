<?php

use App\Http\Controllers\PostsController;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Fragment\RoutableFragmentRenderer;
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

// Route::get('/', function () {

//     return view('welcome');

// });


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

// Route::controller(PostsController::class)->group(function () {
    
//     Route::get('/contact',  'contact');
//     Route::get('/posts/{id}', 'create');
//     Route::get('/post/{id}/{name}/{password}',  'show_post');
// });

/*
|--------------------------------------------------------------------------
| Database raw SQL Queries
|--------------------------------------------------------------------------
*/


// Route::get('/insert', function () {
    
//     $asd = DB::insert('insert into posts(title,content) values(?, ?)', ['Yeeey some text', 'PHP Laravel with Edwin']);

//     return $asd;

// });


// Route::get('/read', function(){

//     $results = DB::select('select * from posts where id = ?', [1]);

//     return var_dump($results);

//     // foreach ($results as $post) {
//     //         return $post->title;
//     // }

// });


// Route::get('/update', function(){

//     $updated = DB::update('update posts set title = "Update title" where id = ?', [1]);

//     return $updated;


// });

// Route::get('/delete', function(){

//     $deleted = DB::delete('delete from posts where id = ?', [1]);

//     return $deleted;

// });

/*
|--------------------------------------------------------------------------
| ELOQUENT ORM
|--------------------------------------------------------------------------
*/

// Route::get('/read', function(){

//     $posts = Post::all();


//     foreach ($posts as $post) {
//         return $post->title;
//     }


// });



// Route::get('/find', function(){

//     $post= Post::find(2);

//     return $post->title;

// });

// Route::get('/findwhere', function(){

//     $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();

//     return $posts;

// });



// Route::get('/findmore', function(){

//     // $posts = Post::findOrFail(1);

//     // return $posts;

//     // $posts = Post::where('users_count', '<', 50)->firstOrFail();


// });

//specific data change

// Route::get('/basicinsert', function(){

//     $post = new Post;

//     $post->title = 'New Eloquent insert';
//     $post->content = 'WOW Eloquent is really cool, look at this comment';

//     $post->save();

// });

// Route::get('/basicinsert2', function(){

//     $post = Post::find(2);

//     $post->title = 'New Eloquent insert 2';
//     $post->content = 'WOW Eloquent is really cool, look at this comment 2';

//     $post->save();

// });

// Route::get('/create', function(){

//     Post::create(['title'=>'the create method 3', 'content'=>'WOW I\'am learning a lot with php! 3']);

// });


// Route::get('/update', function(){

//     Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'I love my instructor!']);
    
// });


// Route::get('/delete', function(){

//     $post = Post::find(10)->delete();

// });


// Route::get('/delete2', function(){

//     Post::destroy([4,5]);

//     // Post::where('is_admin', 0)->delete();

// });


// Route::get('/softdelete', function(){

//     Post::find(9)->delete();

// });


// Route::get('/readsoftdelete', function(){

//     // $post = Post::find(8);

//     // return $post;

//     $post = Post::withTrashed()->where('is_admin', 0)->get();

//     return $post;
// });


// Route::get('/restore', function(){

//     Post::withTrashed()->where('is_admin', 0)->restore();

// });


// Route::get('/forcedelete', function(){

//     Post::onlyTrashed()->where('is_admin', 0)->forceDelete();

// });



/*
|--------------------------------------------------------------------------
| ELOQUENT Relationships
|--------------------------------------------------------------------------
*/

// One to One relationship
// Route::get('/user/{id}/post', function($id){

//     return User::find($id)->post->content;

// });


// Inverse relationship
// Route::get('/post/{id}/user', function($id){

//     return Post::find($id)->user->name;

// });

// One to Many relationship
// Route::get('/posts', function(){

//     $user = User::find(1);

//     foreach ($user->posts as $post) {
//         echo $post->title. "<br>";
//     }

// });


// Many to Many relationship
// Route::get('/user/{id}/role', function($id){

//     $user = User::find($id)->roles()->orderBy('id', 'desc')->get();

//     return $user;
//     // foreach ($user->roles as $role) {
//     //     return $role->name. "<br>";
//     // }

// });


// Accessing the intermediate table / pivot

// Route::get('/user/pivot', function(){

//     $user = User::find(1);

//     foreach ($user->roles as $role) {
//         return $role->pivot->created_at;
//     }

// });


// //has many through relation
// Route::get('/user/country', function(){

//     $country = Country::find(4);

//     foreach ($country->posts as $post) {
//         return $post->title;
//     }

// });


// Polymorphic relation
// Route::get('/user/{id}/photos',function($id){

//     $user = User::find($id);

//     foreach ($user->photos as $photo) {
//         return $photo->path;
//     }
// });


// Route::get('/post/{id}/photos',function($id){

//     $post = Post::find($id);

//     foreach ($post->photos as $photo) {
//         echo $photo->path. "<br>";
//     }
// });

// inverse Polymorphic relation
// Route::get('/photo/{id}/post', function($id){

//     $photo = Photo::findOrFail($id);

//     return $photo->imageable;

// });

// Many to Many Polymorphic relation
// Route::get('/post/tag', function(){

//     $post = Post::find(1);

//     foreach ($post->tags as $tag) {
//         echo $tag->name. "<br>";
//     }

// });

// Inverse Many to Many Polymorphic relation
// Route::get('/tag/post', function(){

//     $tag = Tag::find(2);

//     foreach ($tag->posts as $post) {
//         echo $post->title. "<br>";
//     }

// });

