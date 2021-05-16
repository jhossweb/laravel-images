<div class="album col-lg-10 py-5 bg-light">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach ($galerys as $galery)

        <div class="col">
          <div class="card shadow-sm">

              <img src="{{ asset($galery->url) }}" alt="" width="100%" height="100px" class="img-fluid img-card">
              <div class="card-body">
                <p class="card-text"> {{ $galery->description }} </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="{{ route('images.show', $galery) }}" type="button" class="btn btn-sm btn-outline-secondary"> Ver </a>
                    <a href="{{ route('images.destroy', $galery) }}" type="button" class="btn btn-sm btn-outline-secondary"> Eliminar </a>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
      @endforeach
    </div>

  </div>
</div>

