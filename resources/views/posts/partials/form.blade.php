{{-- Escribir el titulo del post --}}
<div>
    {{ html()->label('Titulo del post') }} {{-- Label para el title del post --}}
    {{ html()->text('title')->placeholder('Escriba el titulo del post') }} {{-- Titulo para el post, simula un input --}}
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<br>
{{-- Escribir el body del post --}}
<div>
    {{ html()->label('Descripcion del post') }} {{-- Label para el body del post --}}
    {{ html()->textarea('body')->placeholder('Escriba el contenido') }} {{-- Textarea para el body del post --}}
    @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<br>
{{-- Asignarle el id del usuario al post --}}
<div>
    {{ html()->label('Seleccion usuario') }} {{-- Label para el id del usuario --}}
    {{ html()->select('user_id', $users)->placeholder('Seleccione') }} {{-- Seleccionar en un combobox el id del usuario --}}
    @error('user_id')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<br>
{{-- Select para seleccionar la categoria del post --}}
<div>
    {{ html()->label('Seleccione categoria') }} {{-- Label para el id del usuario --}}
    {{ html()->select('category_id', $categoria)->placeholder('Seleccione') }} {{-- Seleccionar en un combobox el id del usuario --}}
    @error('category_id')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<br>
{{-- Checkbox para las tags existentes --}}
<div>
    @foreach ($tags as $tag)
        {{ html()->checkbox('tag_id[]', isset($tagsPost) ? $tagsPost->contains($tag->id) : false, $tag->id)->id('tag_'.$tag->id) }}
        {{ html()->label($tag->name, 'tag_'.$tag->id) }}
    @endforeach
    @error('tag_id')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>