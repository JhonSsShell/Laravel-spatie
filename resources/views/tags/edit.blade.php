<a href="{{ route('tags.index') }}">Volver atras</a>
<div>
    {{ html()->modelForm($tag)->route('tags.update', $tag->id)->open() }}
        @include('tags.partials.form')
        <button type="submit">Actualizar</button>
    {{ html()->closeModelForm() }}
</div>
