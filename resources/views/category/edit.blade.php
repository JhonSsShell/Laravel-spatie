<div>
    {{ html()->modelForm($category)->route('categories.update', $categoria->id)->open() }}
        @include('category.partials.form')
        <button type="submit">Actualizar</button>
    {{ html()->closeModelForm() }}
</div>