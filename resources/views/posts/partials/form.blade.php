{{-- Escribir el titulo del post --}}
<div>
    {{ html()->label('title') }} {{-- Label para el title del post --}}
    {{ html()->text('title')->placeholder('Escriba el titulo') }} {{-- Titulo para el post, simula un input --}}
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

{{-- Escribir el body del post --}}
<div>
    {{ html()->label('body') }} {{-- Label para el body del post --}}
    {{ html()->textarea('body')->placeholder('Escriba el contenido') }} {{-- Textarea para el body del post --}}
    @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

{{-- Asignarle el id del usuario al post --}}
<div>
    {{ html()->label('user_id') }} {{-- Label para el id del usuario --}}
    {{ html()->select('user_id', $users)->placeholder('Seleccione') }} {{-- Seleccionar en un combobox el id del usuario --}}
    @error('user_id')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div>
    {{ html()->label('category_id') }} {{-- Label para el id del usuario --}}
    {{ html()->select('category_id', $categoria)->placeholder('Seleccione') }} {{-- Seleccionar en un combobox el id del usuario --}}
    @error('category_id')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>