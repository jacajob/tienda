@extends('layouts.main')

@section('hijos')
<h1>Autos</h1>

<form action="/autos" class="form" method="POST">
   @csrf
    <div class="mb-3">
        <label for="">codigo</label>
        <input type="text" class="form-control" id="codigo" name="codigo">
    </div>
    <div class="mb-3">
        <label for="">nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
     
    <div class="mb-3">
        <label for="">modelo</label>
        <input type="text" class="form-control" id="modelo" name="modelo">
    </div>

    <div class="mb-3">
        <label for="">anio</label>
        <input type="text" class="form-control" id="anio" name="anio">
    </div>
    <button type="submit" class="btn btn-primary">guardar</button>


</form>



@endsection