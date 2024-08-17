{{ html()->hidden('id') }}

{{-- Contenedor para el campo del nombre del usuario --}}
<div>
    {{ html()->label('Nombre')->class('form-label') }}
    {{ html()->text('name')->placeholder('Ingrese su nombre')->class('form-control')}}
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<br>

{{-- Contenedor para el campo del correo electronico del usuario --}}
<div>
    {{ html()->label('Correo electronico')->class('form-label') }}
    {{ html()->text('email')->placeholder('Ingrese su correo electronico')->class('form-control') }}
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<br>

{{-- Contenedor para el campo de la contraseña del usuario --}}
<div>
    {{ html()->label('Contraseña')->class('form-label') }}
    {{ html()->password('password')->placeholder('Ingrese su contraseña')->class('form-control') }}
    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
