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
</head>
<body>
    
      <form action={{ route('palabras') }} method="POST">
        @csrf

        <div class="form-group"> 
            <label class="control-label">Digite las letras para búsqueda</label>
            <input type="text" class="form-control" id="palabra" name="palabra" placeholder="Palabra">
        </div>    
    
        <div class="form-group"> 
            <label class="control-label">Digite la cantidad de letras</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad">
        </div>                    

        <div class="form-group"> <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>     

    </form>

</body>
</html>