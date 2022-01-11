<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('css')

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="Favicon.png">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <title>dashboard</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->

    @yield('content')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <!-- <script src="{{ mix('js/app.js') }}"></script> -->
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     @yield('js')
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@meilisearch/instant-meilisearch@0.3.2/dist/instant-meilisearch.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@4"></script>
 
</html>