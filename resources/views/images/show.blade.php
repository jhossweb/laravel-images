@extends('layouts.layouts')

@section('title', 'Detalle de foto')

@section('content')

<div class="p-4 mt-4">
	<h3 class="text-center">Detalle de la Imagen</h3>
</div>

<div class="row">
    <div class="col-md-12 col-lg-12">
      	<div class="row g-0 border rounded flex-md-row mb-4 ">
        	<div class="col col-12 col-sm-12 col-md-8 col-xl-8 d-flex flex-column position-static">
          	<img class="bd-placeholder-img img-fluid"  src="{{ asset($images->url) }}" />
        	</div>
        	<div class="col col-12 col-sm-12 col-md-4 p-4 d-md-block d-lg-block">
	          	Categoria: <strong class="d-inline-block mb-2 text-primary">World</strong>

	          	<div class="mb-1 text-muted">
	          		 Fecha de Subida:
	          		 <strong class="d-inline-block mb-2 text-secundary">
	          		 	{{ $images->created_at->diffForHumans() }}
	          		 </strong>
	          	</div>
	          	<p class="card-text mb-auto">
	          		{{ $images->description }}
	          	</p>
	          	<div class="mt-4">
		          	<a href="{{ route('images.edit', $images) }}" class="btn btn-primary">Editar</a>
		          	<a href="" class="btn btn-secundary">Inicio</a>
	          	</div>
        	</div>
     	</div>
    </div>

</div>

@endsection