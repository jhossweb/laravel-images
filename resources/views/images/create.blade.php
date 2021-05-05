@extends('layouts.layouts')

@section('title', 'Subir Imagen')
@section('alpinejs')

@endsection

@section('content')

	<div class="p-4 mt-4">
		<h3 class="text-center">Subir Imagen</h3>
	</div>

	<x-forms method="post" :action="route('images.store')" enctype="multipart/form-data">
		<x-slot name="cardHeader">
			<input type="file" name="file" id="img" class="form-control">
		</x-slot>

		<x-slot name="cardBody">
			<div class="row">
				<div class="col-md-6">
			  		<div class="bg-image hover-overlay ripple" id="prevImg" data-mdb-ripple-color="light"></div>
				</div>

				<div class="col-md-6">
			   		<textarea name="description" class="form-control"  rows="10"></textarea>
				</div>
			</div>
		</x-slot>

		<x-slot name="cardFooter">
			<button type="submit" class="btn btn-primary"> Subir Imagen </button>
			<a href="{{ route('images.index') }}" class="btn btn-secundary">Inicio</a>
		</x-slot>
	</x-forms>


<script src="{{ asset('js/prevImg.js') }}"></script>
@endsection