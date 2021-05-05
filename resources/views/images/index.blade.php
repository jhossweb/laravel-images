@extends('layouts.layouts')

@section('title', 'Images')

@section('content')
	<section class="py-5 text-center container">
	    <div class="row py-lg-5">
	      <div class="col-lg-6 col-md-8 mx-auto">
	        <h1 class="fw-light">App De Imágenes</h1>
	        <p class="lead text-muted">
	        	Aquí puedes almacenar tus mejores Fotos y Compartirlas en tus Redes Sociales Favoritas
	        </p>
	        {{-- botones para registrar con redes sociales --}}
	        <p>
	          <a href="{{ route('images.create') }}" class="btn btn-primary my-2"> Subir Imagen </a>
	        </p>
	      </div>
	    </div>
	 </section>


	  <div class="album py-5 bg-light">
	    <div class="container">
	    	<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3">
	    		@foreach ($imgs as $img)

			       	<div class="col">
				        <div class="card shadow-sm">
				            <img src="{{ asset($img->url) }}" alt="" width="100%" height="100px" class="img-fluid img-card">

				            <div class="card-body">
				              	<p class="card-text">
				              		{{ $img->description }}
				              	</p>
				              	<div class="d-flex justify-content-between align-items-center col-sm-12">
				                	<div class="btn-group">
				                  		<a href="{{ route('images.show', $img->id) }}" type="button" class="btn btn-sm btn-outline-secondary"> Ver </a>
				                  		<button type="button" class="btn btn-sm btn-outline-secondary"> Eliminar </button>
				                	</div>
				                	<small class="text-muted text-center">{{ $img->created_at->diffForHumans() }}</small>
				              	</div>
				            </div>
				        </div>
			        </div>
		     	 @endforeach
		    </div>
	    </div>
  	</div>

@endsection