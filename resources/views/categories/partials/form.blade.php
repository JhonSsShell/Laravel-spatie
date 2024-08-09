{{ html()->hidden('id') }}

<div>
    {{ html()->label('Nombre de la categoria') }}
    {{ html()->text('name')->placeholder('Ingrese el nombre de la categoria') }}
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>