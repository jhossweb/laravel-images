<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidatedFileIsImages;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; //Cambio de Ruta
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image; // Optimiza la carga de imagenes

class ImagesController extends Controller
{
   public function index()
   {
      $imgs = Images::all();
   		return view('images.index', compact('imgs'));
   }

   public function create()
   {
   		return view('images.create');
   }

   public function store (ValidatedFileIsImages $request)
   {
      // Optiminzar imagenes para subirlas
      $nombre = Str::random(10) . $request->file('file')->getClientOriginalName();
      $ruta = storage_path() . '\app\public\images/' . $nombre;

      Image::make($request->file('file'))
                           ->resize(1200, null, function ($constraint) {
                               $constraint->aspectRatio();
      })
      ->save($ruta);

      Images::create(["url" => '/storage/images/' . $nombre]);
   	 return redirect()->route('images.index');
   }

   public function show (Images $images)
   {
      return view('images.show', compact('images'));
   }

   public function edit (Images $images)
   {
      return view('images.edit', compact('images'));
   }

   public function update (Request $request)
   {
      return $request->all();
   }
}
