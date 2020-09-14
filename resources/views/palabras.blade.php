<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="utf-8">
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <title>Palabras</title>
</head>
<body>
    <h1>Busqueda finalizada</h1>
    <h3>Coinciden {{ $cantidad }} palabras con tu busqueda</h3>
    <h3>El programa tardó {{ $tiempo }} segundos en ejecutarse</h3>
    

    <a href={{ route('formulario') }} class="btn btn-success d-inline-flex btn-sm">Inicio</a>
    <br/>
    <br/>
    <ul class="list-group">
        
        @foreach ($salida as $data)
            <li class=list-group-item>{{ $data }}</li>
        @endforeach
    </ul>

</body>
</html>
