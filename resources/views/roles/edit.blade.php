<a href="{{ route('roles.index') }}">Volver a la tabla de roles</a>

<div>
    {{ html()->modelForm($rol)->route('roles.update', $rol->id)->open() }}
        @include('roles.partials.form')
        <button type="submit">Actualizar</button>
    {{ html()->closeModelForm() }}
</div>