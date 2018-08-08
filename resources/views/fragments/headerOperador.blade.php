
@section('header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img width="35%" src="{{ asset('img/logomonte.jpg') }}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="boleta_id" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Boleta
        </a>
        <div class="dropdown-menu" aria-labelledby="boleta_id">
          <a class="dropdown-item" href="#">Reimpresión</a>
          <a class="dropdown-item" href="#">Reposición</a>
          <a class="dropdown-item" href="#">Modificar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="reporte_id" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reporte
        </a>
        <div class="dropdown-menu" aria-labelledby="reporte_id">
          <a class="dropdown-item" href="#">Corte de Caja</a>
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
    Modulo Azul | Ventanilla | ISABEL RAMIREZ ROMERO
  </div>
</div>
    @endsection

