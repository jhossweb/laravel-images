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


	<x-album>
	    @foreach ($imgs as $img)

	      	<div class="col">
		        <div class="card shadow-sm">
		            <img src="{{ asset($img->url) }}" alt="" width="100%" height="100px" class="img-fluid img-card">
		            <div class="card-body">
		            	<a href=""> {{ $img->categoria->name }} </a>
		              	<p class="card-text">
		              		{{ $img->description }}
		              	</p>
		              	<div class="d-flex justify-content-between align-items-center col-sm-12">
		                	<div class="btn-group">
		                  		<a href="{{ route('images.show', $img->id) }}" type="button" class="btn btn-sm btn-outline-secondary"> Ver </a>
		                  		<form action="{{ route('images.destroy', $img) }}" method="POST">
		                  			@csrf @method("delete")
		                  			<button type="submit" class="btn btn-sm btn-outline-secondary"> Eliminar </button>
		                  		</form>
		                	</div>
		                	<small class="text-muted text-center">{{ $img->created_at->diffForHumans() }}</small>
		              	</div>
		            </div>
		        </div>
		    </div>
		@endforeach
	 </x-album>



@endsection