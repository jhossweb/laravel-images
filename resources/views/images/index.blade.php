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
	    	@foreach ($imgs as $img)

		      	<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
		        	<div class="col">
		          <div class="card shadow-sm">

		            <img src="{{ asset($img->url) }}" alt="" width="100%" class="">

		            <div class="card-body">
		              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		              <div class="d-flex justify-content-between align-items-center">
		                <div class="btn-group">
		                  <a href="{{ route('images.show', $img->id) }}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
		                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
		                </div>
		                <small class="text-muted">9 mins</small>
		              </div>
		            </div>
		          </div>
		        	</div>
	      		</div>

	        @endforeach
	    </div>
  	</div>

@endsection