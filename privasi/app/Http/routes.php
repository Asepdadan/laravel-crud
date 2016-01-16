<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
/*Route::get('/daftar', function(){

	return view('daftar');
});
*///Route::post('/prosesdaftar', 'Login@aksi_login');

//login

Route::get('/', function () {

   $data = DB::table('mahasiswa')->get();	
		return  View::make('home/home')->with('data',$data);
});

Route::get('/login', function(){

	return view('login');
});
Route::post('/proseslogin', 'Login@aksi_login');

// proses CRUD
  
Route::post('/prosestambah', 'Crudcontroller@tambahdata');


Route::get('/read', 'Crudcontroller@lihatdata');

Route::get('/hapus/{npm}','Crudcontroller@hapusdata');

Route::get('/edit/{npm}','Crudcontroller@editform');

Route::post('/prosesedit','Crudcontroller@actionedit');
// end proses CRUD

});
