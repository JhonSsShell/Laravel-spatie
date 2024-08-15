<div>
    {{ html()->label('Nombre del rol') }}
    {{ html()->text('name')->placeholder('Ingrese el nombre del rol') }}
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>