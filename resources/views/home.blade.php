@extends('layouts.layouts')

@section('title', 'Images')

@section('content')


	<section class="py-5 text-center container">
	    <div class="row py-lg-5">
	      <div class="col-lg-6 col-md-8 mx-auto">
	        <h1 class="fw-light">App De Imágenes</h1>
	        <p class="lead text-muted">
	        	Aquí puedes almacenar tus mejores Fotos
	        </p>
	        <p>
	          {{-- <a href="{{ route('images.create') }}" class="btn btn-primary my-2"> Subir Imagen </a> --}}
	          <a href="{{ route('images.index') }}" type="button" class="btn btn-outline-secondary"> Ver imagenes </a>


	        </p>
	      </div>
	    </div>
	</section>

@endsection