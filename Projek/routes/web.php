<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;

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

// $uri = '';
// $callback = '';

// // Route::get('/user', 'UserController@index');

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// Route::match(['get', 'post'], '/', function (){
//     //
// });
// Route::any('/', function (){
//     //
// });

// Route::redirect('/here', '/there');
// Route::redirect('/here', '/there', 301);
// Route::permanenRedirect('/here', '/there');

// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Ninik']);

// Route::get('user/{name?)', function($name = null){
//     return $name;
// });
// Route::get('user/{name?}', function($name = 'Jay'){
//     return $name;
// });

// Route::get('user/{name}', function ($name){
//     //
// })->where('name', '[A-Za-z]+');
// Route::get('user/{id}', function($id){
//     //
// })->where('id', '[0-9]+');
// Route::get('user/{id}/{name}', function($id, $name){
//     //
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);



// // public function boot()
// // {
// //     Route::pattern('id', '[0-9]+');
// //     parent::boot();
// // }

// Route::get('user/{id}', function ($id){
//     //
// });

// Route::get('search/{search}', function ($search){
//     return $search;
// })->where('search', '.*');

// //Generating URL
// $url = route('profil');
// //Generating Redirects
// return redirect()->route('profil');

// Route::get('/user/{id}/profile', function ($id){
//     //
// })->name('profile');
// $url = route('profile', ['id' => 1]);

// Route::get('/user/{id}/profile', function ($id){
//     //
// })->name('profile');
// $url = route('profile', ['id' => 1, 'photos' => 'yes']);

// // @param \Illuminate\Http\Request $request
// // @param \Closure $next
// // @return mixed

// // public function handle($request, Closure $next)
// // {
// //     if ($request->route()->named('profile')){
// //         //
// //     }
// //     return $next($request);
// // }

// Route::middleware(['first', 'second'])->group(function (){
//     Route::get('/', function(){
//         //
//     });
//     Route::get('user/profile', function(){
//         //
//     });
// });

// Route::namespace('Admin')->group(function (){
//     //
// });

// Route::domain('{account}.myapp.com')->group(function(){
//     Route::get('user/{id}', function($account, $id){
//         //
//     });
// });

// Route::prefix('admin')->group(function(){
//     Route::get('users', function(){
//         //
//     });
// });

// Route::name('admin.')->group(function(){
//     Route::get('users', function(){
//         //
//     })->name('users');
// });

Route::resource('/users', ManagementUserController::class);

// Route::resource('/users', 'ManagementUserController');

Route::get("/home", function(){
    return view("home");
});
