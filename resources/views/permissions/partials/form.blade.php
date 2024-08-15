<div>
    {{ html()->label('Nombre del permiso') }}
    {{ html()->text('name')->placeholder('Ingrese el nombre del permiso') }}
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>