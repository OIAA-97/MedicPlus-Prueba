@extends('layouts.plantillabase')

@section('contenido')
<h1>Vista</h1>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PASSWORD</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $usuarios)
        <tr>
            <td>{{$usuarios -> id}}</td>
            <td>{{$usuarios -> name}}</td>
            <td>{{$usuarios -> email}}</td>
            <td>{{$usuarios -> password}}</td> <!-- CONTRASENA ENCRIPTADA -->
            
        </tr>
       
        @endforeach
    </tbody>
</table>
@endsection