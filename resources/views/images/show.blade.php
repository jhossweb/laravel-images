@extends('layouts.layouts')

@section('title', 'Detalle de foto')

@section('content')
	<img src="{{ asset($images->url) }}" alt="" class="object-cover">
	<textarea name="description" rows="10"> {{ $images->description }} </textarea>
	<a href="{{ route('images.edit', $images->id) }}"> Editar 	</a>
	{{-- <a href="{{ route('images.delete') }}"> Eliminar 	</a> --}}
@endsection