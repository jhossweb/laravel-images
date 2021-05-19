<div class="mb-3 form-group mx-auto">
  <label for="{{ $label }}" class="form-label">{{ $label }}</label>
  <input type="{{ $type }}" name="{{ $name }}" class="form-control" id="{{ $label }}" placeholder="{{ $label }}" value="{{ old($name) }}">
  @error($name)
  		{{ $message }}
  @enderror
</div>