<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function index(){


    }
    public function create(){

    	return view('admin.users.create');
    }

    public function store(){


    }
}