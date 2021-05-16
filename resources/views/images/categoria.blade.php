@extends('layouts.layouts')

@section('title', 'Images')

@section('content')

	<h3 class="text-center py-4"> {{ $categorias->name }} </h3>


	<x-category :categories="$categories">
		<x-album :galerys="$imgs" />
	</x-category>


@endsection