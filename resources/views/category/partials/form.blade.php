<div>
    {{ html()->label('Nombre de la categoria')->class('form-label') }}
    {{ html()->text('name')->placeholder('Ingrese el nombre de la categoria')->class('form-control') }}
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>