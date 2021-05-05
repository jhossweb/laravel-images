@props(['method'])

<form {{ $attributes }} method="{{ strtoupper($method) == 'GET' ? 'GET' : 'POST' }}" >
	@if (strtoupper($method) != 'GET')
		@csrf
	@endif

	@if (in_array(strtoupper($method), ['PUT', 'DELETE']))
		@method($method)
	@endif

	<div class="card col-md-10 mx-auto justify-content-center justify-items-center mt-4">
			<div class="card-header">
				{{ $cardHeader }}
			</div>

			 <div class="card-body">
			 	{{ $cardBody }}
			</div>

			<div class="card-footer">
				{{ $cardFooter }}
			</div>
		</div>
</form>