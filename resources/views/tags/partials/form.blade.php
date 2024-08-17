{{-- Escribir el titulo de la tag --}}
<div>
    {{ html()->label('Nombre de la etiqueta')->class('form-label') }} {{-- Label para el title del post --}}
    {{ html()->text('name')->placeholder('Escriba el nombre de la etiqueta')->class('form-control') }} {{-- Titulo para el post, simula un input --}}
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>