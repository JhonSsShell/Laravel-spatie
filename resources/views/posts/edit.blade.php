{{ html()->modelForm($post)->route('posts.update', $post->id)->acceptsFiles()->open() }}
    @include('posts.partials.form')
    <button type="submit">Actualizar</button>
{{ html()->closeModelForm() }}