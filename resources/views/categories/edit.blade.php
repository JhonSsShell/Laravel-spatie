<div>
    {{ html()->modelForm($categoria)->route('categories.update', $categoria->id)->open() }}
        @include('categories.partials.form')
        <button type="submit">Actualizar</button>
    {{ html()->closeModelForm() }}
</div>