
  	<select class="form-select" aria-label="Default select example" name="{{ $name }}">
       	@foreach ($categorias as $categoria)
       		<option value="{{ $categoria }}"> {{ $categoria->name }} </option>
       	@endforeach
   	</select>
