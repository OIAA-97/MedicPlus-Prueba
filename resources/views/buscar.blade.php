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


