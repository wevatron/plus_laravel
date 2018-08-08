
@section('header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img width="35%" src="{{ asset('img/logomonte.jpg') }}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="boleta_id" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Boleta
        </a>
        <div class="dropdown-menu" aria-labelledby="boleta_id">
          <a class="dropdown-item" href="#">Cancelar</a> 
          <a class="dropdown-item" href="#">Histórico</a>	
          <a class="dropdown-item" href="#">Reimpresión</a>
          <a class="dropdown-item" href="#">Modificar precio sugerido subasta</a>
          <a class="dropdown-item" href="#">Modificar precio sugerido vitrina</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pignatario_id" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pignatario
        </a>
        <div class="dropdown-menu" aria-labelledby="pignatario_id">
          <a class="dropdown-item" href="#">Modificar datos</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="reporte_id" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reporte
        </a>
        <div class="dropdown-menu" aria-labelledby="reporte_id">
          <a class="dropdown-item" href="#">Corte de Caja</a>
          <a class="dropdown-item" href="#">Detallado de Empeños</a>
          <a class="dropdown-item" href="#">Detallado Refrendos/Abono/Desempeño</a>
          <a class="dropdown-item" href="#">Detallado Refrendos Almoneda x mes</a>
          <a class="dropdown-item" href="#">Resumen Inventarios</a>
          <a class="dropdown-item" href="#">Corte Operaciones</a>
          <a class="dropdown-item" href="#">Reporte detallado ventas Subasta</a>
          <a class="dropdown-item" href="#">Reporte detallado ventas Vitrina</a>
          <a class="dropdown-item" href="#">Reporte operaciones diarias</a>
          <a class="dropdown-item" href="#">Reporte boletas canceladas</a>
          <a class="dropdown-item" href="#">Reporte Inventario final</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="demasias_id" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Demasias
        </a>
        <div class="dropdown-menu" aria-labelledby="demasias_id">
          <a class="dropdown-item" href="#">Reporte Demasias pagadas</a> 
          <a class="dropdown-item" href="#">Reporte Demasias pagadas anual</a>	
          <a class="dropdown-item" href="#">Reporte Demasias generadas, pagadas y caducas</a>
          <a class="dropdown-item" href="#">Reporte Demasias caducas por año</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="especial_id" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Especial
        </a>
        <div class="dropdown-menu" aria-labelledby="especial_id">
          <a class="dropdown-item" href="#">Reporte Operaciones Especiales</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="traspasos_id" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Traspasos
        </a>
        <div class="dropdown-menu" aria-labelledby="traspasos_id">
          <a class="dropdown-item" href="#">Resguardo</a> 
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
    Modulo Azul | Gerente | MARTHA NEREIDA LOPEZ VERGARA
  </div>
</div>
    @endsection

