<a href="{{ route('posts.index') }}">Volver a la tabla de posts</a>

{{ html()->form()->route('posts.store')->open() }}
    @include('posts.partials.form')
    <button type="submit">Subir</button>
{{ html()->form()->close() }}
