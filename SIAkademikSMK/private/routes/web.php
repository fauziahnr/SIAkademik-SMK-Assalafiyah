<?php

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

Route::get('/', 'SiteController@home');
Route::get('/register', 'SiteController@register');
Route::post('/postregister', 'SiteController@postregister');
//Route::get('/about', 'SiteController@about');

Route::get('/(slug)',[
  'uses' => 'SiteController@singlepost',
  'as' => 'site.single.post'
]);


//Routes untuk login
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');






//Routes punya warga
//Route::group(['prefix' => 'warga'], function(){
  //Route::get('/warga','WargaController@index');
  //Route::get('/warga/create','WargaController@create');
//});

//Routes punya penduduk

Route::group(['prefix' => 'penduduk'], function(){
Route::group(['middleware' => ['auth','checkRole:admin']],function(){
  Route::get('/','PendudukController@index')->name('SemuaPenduduk');
  Route::get('/tambahpenduduk','PendudukController@create')->name('penduduk.create');
  Route::post('/tambahpenduduk','PendudukController@store')->name('penduduk.store');
  //Route::get('/detail/{penduduk}','PendudukController@show')->name('penduduk.show');
  Route::get('/edit/{penduduk}','PendudukController@edit')->name('penduduk.edit');
  Route::put('/edit/{penduduk}','PendudukController@update')->name('penduduk.update');
  Route::delete('/hapus/{penduduk}','PendudukController@destroy')->name('penduduk.delete');
  //Route::get('/penduduk/{id}/profile','PendudukController@profile');
  Route::get('/profile/{penduduk}','PendudukController@profile')->name('penduduk.profile');
  //Route::get('/profilependuduk',['as' =>'profile.penduduk', 'uses' => 'PendudukController@profile']);
  Route::post('/profile/{id}/addnilai', 'PendudukController@addnilai');
  Route::get('/profile/{id}/editnilai', 'PendudukController@editnilai');
  Route::get('/profile/{id}/profile', 'GuruController@profile');

});
});

//Routes punya post

Route::group(['prefix' => 'post'], function(){
Route::group(['middleware' => ['auth','checkRole:admin']],function(){
  Route::get('/','PostController@index')->name('SemuaBerita');
  Route::get('/post','PostController@index')->name('SemuaBerita');
  Route::get('/tambahberita','PostController@create')->name('post.create');
  Route::post('/tambahberita','PostController@store')->name('post.store');
  //Route::get('/detail/{penduduk}','PendudukController@show')->name('penduduk.show');
  Route::get('/edit/{post}','PostController@edit')->name('post.edit');
  Route::put('/edit/{post}','PostController@update')->name('post.update');
  Route::delete('/hapus/{post}','PostController@destroy')->name('post.delete');
  //Route::get('/post/{id}/profile','PostController@profile');
  //Route::get('/profile/{post}','PostController@profile')->name('post.profile');
  //Route::get('/profilepost',['as' =>'profile.post', 'uses' => 'PostController@profile']);

});
});



Route::group(['middleware' => ['auth','checkRole:admin,user']],function(){
  Route::get('/dashboard','DashboardController@index')->middleware('auth');

});
