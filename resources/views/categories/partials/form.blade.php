{{ html()->hidden('id') }}

<div>
    {{ html()->label('name') }}
    {{ html()->text('name') }}
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>