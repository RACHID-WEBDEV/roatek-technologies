<?php

use Illuminate\Support\Facades\Route;

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

// route::get('/', 'PagesController@index');
// Route::get('/',[PagesController::class, 'index']);
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');
Route::get('/services/software_development', 'App\Http\Controllers\PagesController@software');
Route::get('/services/web_development', 'App\Http\Controllers\PagesController@web_design');
Route::get('/services/branding', 'App\Http\Controllers\PagesController@branding');
Route::get('/services/e_commerce', 'App\Http\Controllers\PagesController@e_commerce');
Route::get('/services/seo', 'App\Http\Controllers\PagesController@seo');
Route::get('/services/social_media_marketing', 'App\Http\Controllers\PagesController@social_media');


Route::get('/portfolio', 'App\Http\Controllers\PagesController@portfolio');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact');
Route::get('blog/personalpost', 'App\Http\Controllers\PostController@personalpost')->name("peronal.post");
Route::resource('/blog', 'App\Http\Controllers\PostController');

Route::get('/sendemail', 'App\Http\Controllers\SendEmailController@index');
Route::post('/sendemail/send', 'App\Http\Controllers\SendEmailController@send');
// Route::get('/blog/addblog','App\Http\Controllers\PostController');


Route::get('/blog/create', function() {
    return view('blog.create');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::group(['middleware' => ['admin']], function () {
//     Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//    })->name('dashboard');

// });


Route::resource('/categories', 'App\Http\Controllers\CategoryController');

route::get('blog/category/{category?}', 'App\Http\Controllers\PostController@cat_posts')->name('blog.index');

Route::post('ckeditor/image_upload', 'App\Http\Controllers\PostController@upload')->name('upload');

Route::get('/search','App\Http\Controllers\PostController@search'); 

Route::get('/contact','App\Http\Controllers\ContactController@index');

Route::post('/contactadd','App\Http\Controllers\ContactController@store');