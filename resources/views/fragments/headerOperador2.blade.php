
@section('header')
<nav class="navbar navbar-expand-lg navbar-light  d-flex bd-highlight mb-3 ">
  <a class="navbar-brand" href="#"><img width="35%" src="{{ asset('img/logomonte.jpg') }}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="listado_id">
  <ul class="navbar-nav p-2 bd-highlight">
      <li class="nav-item active">
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="">Agregar pignorante</button>
      </li>
      <li class="nav-item">
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal5" data-whatever="@calculadora"> @Calculadora</button>
      </li>
      <li class="nav-item ">
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal4" data-whatever="@pignorante">Buscar @pignorante</button>
      </li>
       </ul>
      <ul class="navbar-nav ml-auto p-2 bd-highlight">
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Perfil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Editar Perfil</a>
          <a class="dropdown-item" href="#">Cambiar contraseña</a>
          <a class="dropdown-item" href="#">Salir</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="card">
  
  <div class="card-body">
    <button class="btn btn-danger " type="button">Concentrado</button> 
    <ul class="navbar-nav ml-auto p-2 flex-row-reverse bd-highlight">
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Modulo Azul</a></li>
    <li class="breadcrumb-item"><a href="#">Ventanilla</a></li>
    <li class="breadcrumb-item"><a href="#">Alhajas</a></li>
    <li class="breadcrumb-item active" aria-current="page">ISABEL RAMIREZ ROMERO</li>
  </ol>
</nav>
    </ul>
  </div>

</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pignorante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="clave_id class="col-form-label">* Clave de elector:</label>
            <input type="text" class="form-control" id="clave_id">
          </div>
          <div class="form-group">
            <label for="rfc_id" class="col-form-label">* RFC:</label>
            <input type="text" class="form-control" id="rfc_id">
          </div>
          <div class="form-group">
            <label for="nomb" class="col-form-label">* Nombre completo:</label>
            <input type="text" class="form-control" id="nombre_id">
          </div>
          <div class="form-group">
            <label for="tel_id" class="col-form-label">* Teléfono:</label>
            <input type="number" class="form-control" id="tel_id">
          </div>
          <div class="form-group">
            <label for="direccion_id" class="col-form-label">* Dirección:</label>
            <input type="text" class="form-control" id="direccion_id">
          </div>
          <div class="form-group">
            <label for="estado_id" class="col-form-label">* Estado:</label>
            <input type="text" class="form-control" id="estado_id">
          </div>
          <div class="form-group">
            <label for="municipio_id" class="col-form-label">* Municipio:</label>
            <input class="form-control" id="municipio_id"></input>
          </div>
        </form>
         <p class="text-center"> * Todos los campos son obligatorios  </p>
      </div>
      <div class="modal-footer">
        <br>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelar_id">Cancelar</button>
        <button type="button" class="btn btn-primary" id="agregar_id">Agregar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buscar Pignorante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="clave_id class="col-form-label">Nombre pignorante o IFE:</label>
            <input type="text" class="form-control" id="nomIfe_id" placeholder="Nombre o clave de elector">
          </div>
          <div class="form-group">
            <label for="rfc_id" class="col-form-label">Clave de elector:</label>
            <input type="text" class="form-control" id="clave_id" disabled="">
          </div>
          <div class="form-group">
            <label for="tel_id" class="col-form-label">Teléfono:</label>
            <input type="number" class="form-control" id="tel_id" disabled="">
          </div>
          <div class="form-group">
            <label for="direccion_id" class="col-form-label">Dirección:</label>
            <input type="text" class="form-control" id="direccion_id" disabled="">
          </div>
          <div class="form-group">
            <label for="municipio_id" class="col-form-label">Pignatario solidario:</label>
            <input class="form-control" id="solidario_id" disabled=""></input>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <br>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelar_id">Cancelar</button>
        <button type="button" class="btn btn-primary" id="editar_id">Editar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Valuador de alhajas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="input-group mb-3">   
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="alhaja_id">Metal:</span>
                  </div>
                    <input type="text" class="form-control col-lg-3" placeholder="Oro 10k, 14k, plata..">
                   <div class="input-group-prepend">
                    <span class="input-group-text" id="precio_id ">Precio gramo:</span>
                  </div>
                    <input type="text" class="form-control col-lg-4" disabled="">
                       <div class="class w-100"></div>
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="gramos_id">Gramos metal:</span>
                  </div>
                    <input type="text" class="form-control col-lg-3" placeholder="Gramos" >
                     <div class="input-group-prepend">
                    <span class="input-group-text" id="alhaja_id">Préstamo máximo:</span>
                  </div>
                    <input type="text" class="form-control col-lg-2" disabled="">
            </div>
           <div class="input-group mb-3">   
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="alhaja_id">IVA / Cargo:</span>
                  </div>
                    <input type="text" class="form-control col-lg-3" placeholder="0% / 0$ Fijo" disabled="">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="alhaja_id">Plazos:</span>
                  </div>
                   <select class="form-control" id="palzos_id">
                    <option value="4_semanas">4 SEMANAS (MXP)</option>
                    <option value="12_semanas">12 SEMANAS </option>
                    <option value="16_semanas">16 SEMANAS </option>
                     
                   </select>

            </div>

        </form>
      </div>
      <div class="modal-footer">
        <br>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelar_id">Cancelar</button>
        <button type="button" class="btn btn-primary" id="agregarCal_id">Agregar>></button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  
  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>

    @endsection

