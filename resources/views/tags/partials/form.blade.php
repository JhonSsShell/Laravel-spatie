{{-- Escribir el titulo de la tag --}}
<div>
    {{ html()->label('name') }} {{-- Label para el title del post --}}
    {{ html()->text('name')->placeholder('Escriba el nombre de la tag') }} {{-- Titulo para el post, simula un input --}}
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>