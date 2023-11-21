@extends('layouts.main')

@section('hijos')
<h1>Autos</h1>
<a href="autos/create" class="btn btn-light">Crear</a>
<table class="table table-striped table-hover table-success">
    <thead>
            <tr>

            <th>ID</th>
            <th>Nombre</th>
            <th>Model</th>
            <th>Anio</th>
            <th>
                Acciones
            </th>
            </tr>

    </thead>

        <tbody>
            @forEach ($autos as $auto)

                <tr>
                    <th>{{$auto->id}}</th>
                    <th>{{$auto->nombre}}</th>
                    <th>{{$auto->modelo}}</th>
                    <th>{{$auto->anio}}</th>
                    <th>
                    <a href="" class="btn btn-light">Editat</a>
                <a href="" class="btn btn-light">Eliminar</a>
                    </th>
                </tr>

            @endforeach


        </tbody>

</table>




</table>


@endsection