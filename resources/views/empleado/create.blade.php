@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/empleado') }}" method="post">
@csrf
@include('empleado.form',['modo'=>'Crear'])


</form>
</div>
@endsection