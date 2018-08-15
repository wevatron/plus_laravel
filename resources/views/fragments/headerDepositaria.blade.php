
@section('header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img width="35%" src="{{ asset('img/logomonte.jpg') }}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="depositaria_id" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Depositaría
        </a>
        <div class="dropdown-menu" aria-labelledby="depositaria_id">
          <a class="dropdown-item" href="#">Detallado de empeños</a>
          <a class="dropdown-item" href="#">Depositaria / Refrendos / Abono / Desempeño</a>
          <a class="dropdown-item" href="#">Diario General de Almacen</a>
           <a class="dropdown-item" href="#">Reporte de Inventario</a>
          <a class="dropdown-item" href="#">Reporte boletas canceladas</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="almoneda_id" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Almoneda
        </a>
        <div class="dropdown-menu" aria-labelledby="almoneda_id">
          <a class="dropdown-item" href="#">Refrendo / Desempeño</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="traspaso_id" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Traspasos
        </a>
        <div class="dropdown-menu" aria-labelledby="traspaso_id">
          <a class="dropdown-item" href="#">Traspaso Almoneda</a>
          <a class="dropdown-item" href="#">Traspaso Subasta</a>
        </div>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="perfil_id" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Perfil
        </a>
        <div class="dropdown-menu" aria-labelledby="perfil_id">
          <a class="dropdown-item" href="#">Cambiar Contraseña</a>
          <a class="dropdown-item" href="#">Cerrar Sesión</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="card">
  <div class="card-body text-right">
    Modulo Azul | Depositaría | SERGIO ANGEL GÓMEZ ROSAS
  </div>
</div>
    @endsection

