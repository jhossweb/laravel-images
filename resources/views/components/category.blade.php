<div class="row col-lg-12">

	<div class="col-lg-2">
		<div class="d-flex flex-column p-3 text-dark bg-with" style="width: 280px;">
		    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
		      	<span class="fs-4"> Categorias </span>
		    </a>
			<hr>
			<ul class="nav nav-pills flex-column mb-auto">
			    <li class="nav-item">
			       	<a href="{{ route('images.index') }}" class="nav-link active" aria-current="page">
			       		Todas las Imágenes
			       	</a>
			    </li>
			    @foreach ($categories as $category)
				   	<li>
				       	<a href="{{ route('images.categoria', $category) }}" class="nav-link text-dark">
				       		{{ $category->name }}
				       	</a>
				   	</li>
			    @endforeach
			</ul>
		</div>
	</div>

	{{ $slot }}

</div>