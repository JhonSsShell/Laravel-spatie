<div>
    {{ html()->label('Nombre del permiso')->class('form-label') }}
    {{ html()->text('name')->placeholder('Ingrese el nombre del permiso')->class('form-control') }}
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>