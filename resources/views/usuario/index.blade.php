@extends('layouts.plantillabase')
@section('title', 'Usuarios')

@section('css')
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"> -->
@endsection

@section('contenido')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    
<h1>Vista</h1>


<table id="usuarios" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $usuarios)
        <tr>
            <td>{{$usuarios -> id}}</td>
            <td>{{$usuarios -> name}}</td>
            <td>{{$usuarios -> email}}</td>
            <td>
                <form action="{{ route ('usuario.destroy',$usuarios->id)}}" method="POST" class="form-eliminar">
                <!-- <a href="/usuario/{{$usuarios->id}}/edit" class="btn btn-info">Editar</a> -->
                <a href="{{ route ('usuario.edit', $usuarios->hashid) }}" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                 @if (auth()->check() && auth()->id() != $usuarios->id)
                    @canBeImpersonated($usuarios)
                        <a class="btn btn-primary" href="{{ route('impersonate', $usuarios->id) }}">Loguearse como {{ $usuarios->name }}</a>
                    @endCanBeImpersonated
                @endif
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

@section('js')
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->

<script>
    $(document).ready(function() {
        $('#usuarios').DataTable();
});
</script>


    @if (session('eliminar') == 'ok') {
      <script>
        Swal.fire(
          'Usuario Eliminado',
          'Este usuario se ha eliminado correctamente',
          'success'
        )
      </script>
    }
    @endif

<script>

    $('.form-eliminar').submit(function(e){
        e.preventDefault(); //Detiene el envio del formulario.

    Swal.fire({
      title: 'Estas seguro?',
      text: "Este usuario dejara de existir en tu lista",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, eliminar'
    }).then((result) => {
      if (result.isConfirmed) {
        // Swal.fire(
        //   'Usuario Eliminado',
        //   'Este usuario se ha eliminado correctamente',
        //   'success'
        // )
        this.submit();
      }
    })
    });

</script>

@endsection


