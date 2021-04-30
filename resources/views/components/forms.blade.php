<form action="" enctype="multipart/form-data">
	<div class="card col-md-10 mx-auto justify-content-center justify-items-center mt-4">
		<div class="card-header">
			<input type="file" id="img" class="form-control">
		</div>

		 <div class="card-body">
			<div class="row">

				{{ $prevImg }}

				<div class="col-md-6">
		   			<textarea name="" class="form-control"  rows="10"></textarea>
				</div>
		  	</div>
		</div>

		<div class="card-footer">
			<button type="submit" class="btn btn-primary"> Subir Imagen </button>
		</div>
	</div>
</form>