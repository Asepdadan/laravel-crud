<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validasitambah;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Session;
use View;

class Crudcontroller extends Controller
{
    //

	public function index(){

		$data = DB::table('mahasiswa')->get();	
		return  View::make('home/home')->with('data',$data);


	}


	public function tambahdata(validasitambah $validasi){

		$password = Input::get('password');
		$pass = password_hash($password, PASSWORD_DEFAULT);

		$data = array(
			'npm' => Input::get('npm'),
			'nama' => Input::get('nama'),
			'tgl_lahir' => Input::get('tgl_lahir'),
			'kelas' => Input::get('kelas'),
			'email' => Input::get('email'),
			'password' => $pass,
			'jenis_kelamin' => Input::get('jenis_kelamin')
			);

		DB::table('mahasiswa')->insert($data);
		
		return Redirect::to('/read')->with('message', 'berhasil menambah data');;
	}

	public function lihatdata(){

		$data = DB::table('mahasiswa')->get();	
		return  View::make('home/home')->with('data',$data);

	}

	public function hapusdata($npm){

		DB::table('mahasiswa')->where('npm','=',$npm)->delete();
		return Redirect::to('/read')->with('message', 'berhasil menghapus data');;


	}

	public function editform($npm){

		$data = DB::table('mahasiswa')->where('npm','=',$npm)->first();
		return View::make('home/edit')->with('data',$data);



	}

	public function actionedit(){

	

		$data = array(
			'npm' => Input::get('npm'),
			'nama' => Input::get('nama'),
			'tgl_lahir' => Input::get('tgl_lahir'),
			'kelas' => Input::get('kelas'),
			'email' => Input::get('email'),
			'jenis_kelamin' => Input::get('jenis_kelamin')

			);

		DB::table('mahasiswa')->where('npm','=',Input::get('npm'))->update($data);
		return Redirect::to('/read')->with('message', 'berhasil mengedit data');
			
	}

}
