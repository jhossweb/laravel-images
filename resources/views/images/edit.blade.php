@extends('layouts.layouts')

@section('title', 'Editar foto')

@section('content')

	<form action="{{ route('images.update', $images->id) }}" method="POST" enctype="multipart/form-data">
		@csrf @method('PUT')

		<img src="{{ asset($images->url) }}" alt="" class="object-cover">
		<textarea name="description" rows="10"></textarea>
		<button type="submit"> Actualizar </button>
	</form>

@endsection