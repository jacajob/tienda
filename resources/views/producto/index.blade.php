@extends('layouts.main')


@section('hijos')
<a href="/productos/create" class="btn btn-primary">Crear</a>
<table class="table table-striped table-hover table-light">
        <thead>
            <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                
            </tr>

        </thead>
        
        <tbody>
            @foreach ($productos as $producto)
                    <tr>
                        <th>{{$producto->codigo}}</th>
                        <th>{{$producto->nombre}}</th>
                        <th>{{$producto->descri}}</th>
                        <th>{{$producto->precio}}</th>
                        <td>
                            <a href="" class="btn btn-primary">editar</a>
                            <a href="" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
            @endforeach

        </tbody>


</table>




@endsection