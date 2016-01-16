<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class validasitambah extends Request
{
    //

    public function authorize(){

    	return true;
    }

    public function rules(){

    	return [
    	'npm' => 'numeric|required|unique:mahasiswa,npm',
    	'nama' => 'required'

    	];
    }

    public function messages(){

    	return [
    	'npm.required' => 'npm tidak boleh kosong',
    	'npm.numeric' => 'format bukan huruf',
    	'npm.unique' => 'npm sudah terdaftar',
    	'nama.required' => 'nama tidak boleh kosong',

    	];

    }
}
	