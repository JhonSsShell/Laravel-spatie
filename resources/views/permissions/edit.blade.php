<a href="{{ route('permisos.index') }}">Volver a la tabla de roles</a>

<div>
    {{ html()->modelForm($permiso)->route('permisos.update', $permiso->id)->open() }}
        @include('permissions.partials.form')
        <button type="submit">Actualizar</button>
    {{ html()->closeModelForm() }}
</div>