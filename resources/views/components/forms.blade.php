@props(['method'])

<form {{ $attributes }} method="{{ strtolower($method) == 'GET' ? 'GET' : 'POST' }}" >
	@if (strtolower($method) != 'GET')
		@csrf
	@endif

	@if (in_array(strtolower($method), ['PUT', 'DELETE']))
		@method($method)
	@endif

	<div class="card col-md-{{ $col }} mx-auto justify-content-center justify-items-center mt-4">
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