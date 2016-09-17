<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UsersController extends Controller
{
    public function index(){


    }
    public function create(){

    	return view('admin.users.create');
    }

    public function store(Request $request)
    {

    	
    	$user = new User($request -> all()); 
    	//para encriptar el password
    	$user->password = bcrypt($request->password);
    	$user->save();
    	dd('Usuario creado');

    }
}
