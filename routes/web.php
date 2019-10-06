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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin','middleware'=>['auth']], function(){

	Route::get('/', function(){
		return view('admin.pages.dashboard');
	})->name('admin.home');


	Route::prefix('user')->group(function(){

		Route::get('/','UserController@daftar')->name('admin.user')->middleware('akses.admin');
		Route::delete('/','UserController@delete')->middleware('akses.admin');

		Route::get('/add','UserController@add')->name('admin.user.add')->middleware('akses.admin');
		Route::post('/add','UserController@save')->middleware('akses.admin');

		Route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')
				->middleware('akses.admin');
		Route::post('/edit/{id}','UserController@update')
				->middleware('akses.admin');
		
		Route::get('/setting','UserSettingController@form')->name('admin.user.setting');
		Route::post('/setting','UserSettingController@update');
	});

	/* Kategori */

	Route::group(['prefix'=>'Kategori','middleware'=>'akses.admin:asisten'], function(){
		Route::get('/','KategoriController@daftar')->name('admin.kategori');
		Route::delete('/','KategoriController@delete');
		Route::get('/add','KategoriController@add')->name('admin.kategori.add');
		Route::post('/add','KategoriController@save');
		Route::get('/edit/{id}','KategoriController@edit')->name('admin.kategori.edit');
		Route::post('/edit/{id}','KategoriController@update');
		Route::delete('/','KategoriController@delete')->middleware('akses.admin');
<<<<<<< HEAD
	});

	/* Produk*/
	Route::group(['prefix'=>'produk','middleware'=>'akses.admin:asisten'], function(){
		Route::get('/','ProdukController@daftar')->name('admin.produk');
		Route::get('/add','ProdukController@add')->name('admin.produk.add');
		Route::post('/add','ProdukController@save');
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6c02110affd1f30b1ae7b10f510e881914cec23d
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff
	});

	/* Produk*/
	Route::group(['prefix'=>'produk','middleware'=>'akses.admin'], function(){
		Route::get('/','ProdukController@daftar')->name('admin.produk');
<<<<<<< HEAD
		Route::get('/add','ProdukController@add')->name('admin.produk.add');
		Route::post('/add','ProdukController@save');
=======
<<<<<<< HEAD
=======
=======
>>>>>>> a31952c29e9c512f67aebb7d7aa6274f36f04f50
>>>>>>> 6c02110affd1f30b1ae7b10f510e881914cec23d
>>>>>>> 366ef1b06888861dd64f4e61ff6b7975961b58ff
>>>>>>> df462f54ee3bb10537db8fd3d8d7bfb1f4a17028
	});

});

Auth::routes();

Route::any('register', function(){ 
	return abort(404); 
});

