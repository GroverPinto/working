<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!--El logotipo y el icono que despliega el menú se agrupan
  para mostrarlos mejor en los dispositivos móviles -->

  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
    data-target=".navbar-ex1-collapse">
    <span class="sr-only">Menu</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">La Illa</a>
  </div>

<!-- Agrupar los enlaces de navegación, los formularios y cualquier
otro elemento que se pueda ocultar al minimizar la barra -->
<div class="container">
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="#">Inicio</a></li> -->
      <li ><a href="#">Tienda</a></li>
      <li ><a href="#">¿Que es?</a></li>
      <li ><a href="#">¿Como funciona?</a></li>
      <li ><a href="#">¿Como participo?</a></li>
      <!-- <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos <b class="caret"></b></a>
      <ul class="dropdown-menu">
      <li><a href="#">Evento #1</a></li>
      <li><a href="#">Evento #2</a></li>
      <li><a href="#">Evento #3</a></li>
      <li><a href="#">Evento #4</a></li>
      <li><a href="#">Evento #5</a></li>
    </ul>
  </li> -->

  <!-- <li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <b class="caret"></b></a>
  <ul class="dropdown-menu">
  <li><a href="#">Servicios #1</a></li>
  <li><a href="#">Servicios #2</a></li>
  <li><a href="#">Servicios #3</a></li>
  <li><a href="#">Servicios #4</a></li>
  <li><a href="#">Servicios #5</a></li>
</ul>
</li> -->
<!-- <li ><a href="#">Archivos</a></li>
<li ><a href="#">La Illa</a></li>
<li ><a href="#">¿Quienes Somos?</a></li> -->
</ul>

<p class="navbar-text navbar-right">
  <a href="#{!!URL::to('/usuario')!!}">Registro</a>
  <a href="#">Ingresar</a>
</a></p>
<!-- <form class="navbar-form navbar-left" role="search">
<div class="form-group">
<input type="text" class="form-control" placeholder="Buscar">
</div>
<button type="submit" class="btn btn-default">Enviar</button>
</form> -->


</div>

</div>

</nav>
