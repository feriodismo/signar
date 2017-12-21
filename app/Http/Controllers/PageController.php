<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class PageController extends Controller
{
    public function __construct(){
		$this->middleware(
			'authorization',
			['only'=>['subir']]
		);
	}

    public function home(){
  	  	$titulo = 'signar';
    	return view('home', compact('titulo'));
    }

    public function permiso(){
  	  
    	return view('permiso');
    }

     public function signar(){
  	  	$titulo = 'signar';
  	  	$audioView = Storage::allFiles('public/audios');
        $audioView = str_replace('public', 'storage', $audioView);
        $audioInfo = Upload::all();
        $userInfo = User::all();
    	return view('uploads.signar', compact('titulo', 'audioView', 'audioInfo', 'userInfo'));
    }

    public function subir(){
    	$titulo = 'subir sonido';
    	
    	return view('subir', compact('titulo'));
    }

    public function landing(){
    	if(auth()->check()){
    		  $titulo = 'signar';
    	return view('home', compact('titulo'));
    	}
    	$titulo = 'home';
    	return view('auth.register', compact('titulo'));
    }

}
