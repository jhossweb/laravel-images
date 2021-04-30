@extends('layouts.layouts')

@section('title', 'Subir Imagen')
@section('alpinejs')

@endsection

@section('content')

	<div class="p-4 mt-4">
		<h3 class="text-center">Subir Imagen</h3>
	</div>

{{-- 	<x-forms>
		<div class="card col-md-10 mx-auto justify-content-center justify-items-center mt-4">
			<div class="card-header">
				<input type="file" id="img" class="form-control">
			</div>

			 <div class="card-body">
				<div class="row">
					<div class="col-md-6">
			  			<div class="bg-image hover-overlay ripple" id="prevImg" data-mdb-ripple-color="light"></div>
					</div>

					<div class="col-md-6">
			   			<textarea name="" class="form-control"  rows="10"></textarea>
					</div>
			  	</div>
			</div>

			<div class="card-footer">
				<button type="submit" class="btn btn-primary"> Subir Imagen </button>
			</div>
		</div>
	</x-forms> --}}

	<x-forms>
		<x-slot name="prevImg">
			<div class="col-md-6">
		  		<div class="bg-image hover-overlay ripple" id="prevImg" data-mdb-ripple-color="light"></div>
			</div>
		</x-slot>
	</x-forms>

<script src="{{ asset('js/prevImg.js') }}"></script>
@endsection