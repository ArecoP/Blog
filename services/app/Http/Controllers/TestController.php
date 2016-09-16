<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article; //indicar que quiero usar la clase Article

class TestController extends Controller
{
    public function view($id)
    {
    	
    	//echo dd($id);
    	$article = Article::find($id);
    	
    	//$article -> each(function($article){

    		$article->category;// se le pide datos a la funcion que esta en el modelo
    		$article->user;
    		$article->tags;

    	//});
    	//dd($article);  //'dd' es como un helper que trae laravel
            return view('test.index', ['article' => $article]); //los controladores tambien pueden retornar vistas como en las rutas
    }
}
