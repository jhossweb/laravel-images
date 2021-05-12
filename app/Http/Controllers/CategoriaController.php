<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

	public function index ()
	{
		$categorias = Categoria::all();
		return view('images.index', compact('categorias'));
	}

    public function show (Request $request)
    {
    	return $request->all();
    }
}
