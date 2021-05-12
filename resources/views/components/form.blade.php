@props(['method'])

<form {{ $attributes }} method="{{ strtolower($method) == 'get' ? 'get' : 'post' }}" >
	@if(strtolower($method) != 'get')
		@csrf
	@endif
	@if (in_array(strtolower($method), ['put', 'delete']))
		@method($method)
	@endif

	{{ $slot }}
</form>