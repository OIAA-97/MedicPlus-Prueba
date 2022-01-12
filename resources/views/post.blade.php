@extends('layouts.plantillabase')
@section('title', 'Export Excel')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection

@section('contenido')

 <h1>Lista de Posts</h1>

 <div class="col">
        <a href="{{ url('posts/export-excel') }}" class="btn btn-info btn-prymary">Exportar a Excel</a>
    </div>

    
<input type="search" id="inputBusqueda">
 <div id="resultados">
    <!-- <button type="submit">Search</button> -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TITULO</th>
      <th scope="col">Contenido del Post</th>
      <th scope="col">CREADO POR</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post -> id}}</td>
            <td>{{$post -> title}}</td>
            <td>{{$post -> details}}</td>
            <td>{{$post -> user->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>


@endsection

<!-- <!doctype html>
<html lang="en">
  <head> -->
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <!-- <div class="col">
        <a href="{{ url('posts/export-excel') }}" class="btn btn-sm btn-prymary float-right mt-3">Exportar a Excel</a>
    </div> -->

    <!-- <title>Exportar datos a Excel</title>
  </head>
  <body> -->
   

    <!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TITULO</th>
      <th scope="col">Contenido del Post</th>
      <th scope="col">CREADO POR</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post -> id}}</td>
            <td>{{$post -> title}}</td>
            <td>{{$post -> details}}</td>
            <td>{{$post -> user->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  @section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!-- <script>
    $(document).ready(function() {
    $('#usuarios').DataTable();
});
</script> -->

<script>
    // $(document){ $('#posts').DataTable(); }

    /*
    *
    *
     El AJAX 'SETUP' ENVIA EL TOKEN EN CADA PETICION QUE HAGA EL QUERY.
    *
    */

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

     $("#inputBusqueda").keyup(function(){
        $.post("{{ route('buscar') }}", {'q': $("#inputBusqueda").val()}, (data) => {
            $("#resultados").html(data);
        });
    });
</script>


@endsection