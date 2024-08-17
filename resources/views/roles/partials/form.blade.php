<div>
    {{ html()->label('Nombre del rol')->class('form-label') }}
    {{ html()->text('name')->placeholder('Ingrese el nombre del rol')->class('form-control') }}
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>