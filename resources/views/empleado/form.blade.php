<h1>{{ $modo }} empleado</h1>

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
        @foreach( $errors -> all() as $error)
        <li> {{ $error }} </li>
        @endforeach
    </ul>
</div>

@endif



<div class="form-group">

    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">

</div>

<div class="form-group">

    <label for="Apellidos">Apellidos</label>
    <input type="text" class="form-control" name="Apellidos" value="{{ isset($empleado->Apellidos)?$empleado->Apellidos:old('Apellidos') }}" id="Apellidos">

</div>

<div class="form-group">
    <label for="Correo">Correo</label>
    <input type="text" class="form-control" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('correo') }}" id="Correo">

</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">

<a class="btn btn-primary" href="{{ url('empleado/') }}"> Regresar </a>

<br>