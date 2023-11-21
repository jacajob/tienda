@extends('layouts.main')


@section('hijos')
<h1>Personas</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Edad</td>
        </tr>
    </thead>

    <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{$persona->id}}</td>
                    <td>{{$persona->nombre}}</td>
                    <td>{{$persona->apellido}}</td>
                    <td>{{$persona->edad}}</td>
                </tr>
            @endforeach

    </tbody>


</table>


@endsection