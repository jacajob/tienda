@extends('layouts.main')


@section('hijos')


<h1>ingresar</h1>

<form action="/productos" class="form" method="POST">
    @csrf
    <div class="mb-3">
    <label for="" class="form-label">codigo</label>
    <input type="text" name="codigo" id="codigo" class="form-control">
    </div>
    
    <div class="mb-3">
    <label for="" class="form-label">nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control">
    </div>

    <div class="mb-3">
    <label for="" class="form-label">descripcion</label>
    <input type="text" name="decrip" id="decrip" class="form-control">

    <div class="mb-3">
    <label for="" class="form-label">precio</label>
    <input type="text" name="precio" id="precio" class="form-control">
    </div>
      
    <div class="mb-3">
         <a href="/productos" class="btn btn-secondary">Cancelar</a>
         <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
@endsection