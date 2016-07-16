<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('titulo')</title>
  @include('plantillas.cabecera')
</head>
<body >
  <!-- <div style="margin:50px 10px 0px 10px"> -->
  <div class="container" style="margin-top:70px">
    @include('plantillas.menu')
    @yield('content')
  </div>

</body>
</html>
