{{ html()->hidden('id') }}

{{-- Contenedor para el campo del nombre del usuario --}}
<div>
    {{ html()->label('Nombre') }}
    {{ html()->text('name')->placeholder('Ingrese su nombre')}}
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<br>

{{-- Contenedor para el campo del correo electronico del usuario --}}
<div>
    {{ html()->label('Correo electronico') }}
    {{ html()->text('email')->placeholder('Ingrese su correo electronico') }}
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<br>

{{-- Contenedor para el campo de la contraseña del usuario --}}
<div>
    {{ html()->label('Contraseña') }}
    {{ html()->password('password')->placeholder('Ingrese su contraseña') }}
    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
