<form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
	@csrf
	{{ $slot }}
</form>