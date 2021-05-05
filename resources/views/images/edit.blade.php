@extends('layouts.layouts')

@section('title', 'Editar Imagen')

@section('content')

	<div class="p-4 mt-4">
		<h3 class="text-center">Editar Imagen</h3>
	</div>

	<x-forms method="put" :action="route('images.update', $images)" enctype="multipart/form-data">
		<x-slot name="cardHeader">
			<input type="file" name="file" id="img" class="form-control">
		</x-slot>

		<x-slot name="cardBody">
			<div class="row">
				<div class="col-md-6">
			  		<div class="bg-image hover-overlay ripple" id="prevImg" data-mdb-ripple-color="light">
			  			<img src="{{ asset($images->url) }}" alt="" class="img-fluid">
			  		</div>
				</div>
				@error('file')
					<small> {{ $message }} </small>
				@enderror

			  			<input type="hidden" name="id" value="{{ $images->id }}">
				<div class="col-md-6">
			   		<textarea name="description" class="form-control"  rows="10">{{ $images->description }}</textarea>
				</div>
				<br>
				@error('description')
					<small> {{ $message }} </small>
				@enderror
			</div>
		</x-slot>

		<x-slot name="cardFooter">
			<button type="submit" class="btn btn-primary"> Actualizar </button>
			<a href="{{ route('images.index') }}" class="btn btn-secundary">Inicio</a>
		</x-slot>
	</x-forms>

@endsection