@extends('layouts.layouts')

@section('title', 'Images')

@section('content')

	<x-category :categories="$categories">
		<x-album :galerys="$imgs" />
	</x-category>

@endsection