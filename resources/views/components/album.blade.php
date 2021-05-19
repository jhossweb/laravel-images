<div class="album col-lg-10 py-5 bg-light">
  <div class="container">
      <a href="{{ route('images.create') }}" class="btn btn-primary">Subir Imagen</a>
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3">

      @foreach ($galerys as $galery)

        <div class="col">
          <div class="card shadow-sm">

              <img src="{{ asset($galery->url) }}" alt="" width="100%" height="100px" class="img-fluid img-card">
              <div class="card-body">
                <p class="card-text"> {{ $galery->description }} </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="{{ route('images.show', $galery) }}" type="button" class="btn btn-sm btn-outline-secondary"> Ver </a>
                    <form action="{{ route('images.destroy', $galery) }}" method="post">
                      @method('delete') @csrf
                      <button href="" type="submit" class="btn btn-sm btn-outline-secondary"> Eliminar </button>
                    </form>
                  </div>
                  <small class="text-muted">{{ $galery->created_at->diffForHumans() }}</small>
                </div>
              </div>
            </div>
          </div>
      @endforeach
    </div>

  </div>
</div>

