<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
    //protected $request;

    //Construtor
    /*public function __construct(Request $request){
        $this->request = $request;
    }*/

    public function __construct(){
        $this->middleware('example', ['except' => ['home']]);
    }

    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contactos');
    }

    public function mensajes(CreateMessageRequest $request){
        
        $data = $request->all();
        return back()->with('info', 'Sua mensagem foi enviada com sucesso');
    }

    public function saludo($nombre = "Convidado")
    {
    $html = "<h2>Contenido html</h2>";
	$script ="<script>alert('Problema XSS')</script>";

	$consolas = [
		"Play Station 4",
	    "XBox One",
		"Wii U"
	];
	return view('saluto', compact('nombre', 'html', 'script', 'consolas'));
    }
}
