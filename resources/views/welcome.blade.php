@include('fragments.headerOperador2')
@extends('fragments.main')

@section('contenido')


         <ul class="nav nav-tabs " id="myTab" role="tablist">
          <li class="nav-item ">
            <a class="nav-link active" id="nav_valuo_tab" data-toggle="tab" href="nav_valuo" role="tab" aria-controls="nav_valuo" aria-selected="true"><h3>PASO 1</h3>Valuador de Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav_pignorante_tab" data-toggle="tab" href="nav_pignorante" role="tab" aria-controls="nav_pignorante" aria-selected="false"><h3>PASO 2</h3>Pignorante</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="plan_id" data-toggle="tab" href="#contact" role="tab" aria-controls="plan_id" aria-selected="false"><h3>PASO 3</h3>Plan de pagos</a>
          </li>
        </ul>

<div class="tab-content" id="contenido_id">
        <div class="tab-pane fade show active" id="nav_valuo" role="tabpanel" aria-labelledby="nav_valuo_tab">   
                    <div class="card text-justiy">
              <div class="card-header">
                VALIDACIÓN
              </div>
              <div class="card-body">
                <div class="input-group mb-3">   
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="alhaja_id">Alhaja:</span>
                  </div>
                    <input type="text" class="form-control col-lg-3" placeholder="Aretes, anillos,pulseras...">
                   <div class="input-group-prepend">
                    <span class="input-group-text" id="peso_id ">Peso Total:</span>
                  </div>
                    <input type="text" class="form-control col-lg-2" placeholder="Gramos"> 
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="metal_id">Metal:</span>
                  </div>
                    <input type="text" class="form-control col-lg-2" placeholder="10k, 14k, plata...">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="gramos_id">Gramos metal:</span>
                  </div>
                    <input type="text" class="form-control col-lg-2" placeholder="Gramos" >
                </div>
                <div class="w-100"></div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                    <span class="input-group-text" id="precio_id">Precio x gramo:</span>
                  </div>
                    <input type="text" class="form-control col-lg-2" placeholder="" disabled="">
                   
                   <div class="input-group-prepend">
                    <span class="input-group-text" id="iva_id ">IVA / Cargo:</span>
                  </div>
                    <input type="text" class="form-control col-lg-2" disabled="" placeholder="0% / 0$ fijo"> 
                    
                    
                    <div class="input-group-prepend">
                <label class="input-group-text" for="plazo_id">Plazos:</label>
              </div>
              <select class="custom-select col-lg-2" id="plazo_id">   
                 <option value="4_semanas">4 SEMANAS (MXP)</option>
                 <option value="12_semanas">12 SEMANAS</option>
                 <option value="16_semanas">16 SEMANAS</option>
                 
              </select>
            </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Descripción</span>
                  </div>
                  <textarea class="form-control col-lg-6" id="descripcion_id" placeholder="Descripción del producto"></textarea>
                </div>
                <div class="w-100"></div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="">Agregar >></button>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal3">Detalle de pagos</button>
                <div class="w-100"></div>
                <br>

                <div class="input-group mb-3"> 
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="pesoT_id ">Peso Total:</span>
                  </div>
                    <input type="text" class="form-control col-lg-2" disabled="" placeholder="0.00">
                   <div class="input-group-prepend">
                    <span class="input-group-text" id="avaluo_id ">Total Avalúo:</span>
                  </div>
                    <input type="text" class="form-control col-lg-2" disabled="" placeholder="0.00"> 
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="prestamo_id">Total Préstamo:</span>
                  </div>
                    <input type="text" class="form-control col-lg-1" placeholder="0.00" ">
              <select class="custom-select col-lg-1" id="cambiar_id">  
                <option value="cambiar">Cambiar</option> 
                 <option value="monto">Monto</option>
              </select>
            </div>
              </div>
                </div>
            </div>
              <div class="card-footer text-right">    
              <button type="button" class="btn btn-secondary" disabled="">Anterior</button>
              <button type="button" class="btn btn-secondary">Siguiente</button>
              <button type="button" class="btn btn-secondary">Empeñar</button>
              </div>
        </div>
   
          <div class="tab-pane fade show active" id="nav_pignorante" role="tabpanel" aria-labelledby="nav_pignorante_tab">   
              



          </div>

          <div class="tab-pane fade" id="contact" role="plan_id" aria-labelledby="plan_id">...</div>
        </div>

            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Máximo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Valor máximo:</label>
                        <input type="text" class="form-control" id="maximo_id" disabled="">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Valor mínimo:</label>
                        <input type="text" class="form-control" id="minimo_id" disabled="">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Valúo:</label>
                        <input type="text" class="form-control" id="valuo_id" >
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancelar_id">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="agregar_id">Agregar</button>
                  </div>
                </div>
              </div>
            </div>



        <!-- Modal -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalle de los pagos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              
              </div>
            </div>
          </div>
        </div>

            <script type="text/javascript">

              
              $('#contenido_id').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) // Button that triggered the modal
              var recipient = button.data('whatever') // Extract info from data-* attributes
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this)
              modal.find('.modal-title').text('New message to ' + recipient)
              modal.find('.modal-body input').val(recipient)
            })



              $('#nav_valuo').on('click', function (e) {
              e.preventDefault()
              $(this).tab('show')
            })
          </script>
@endsection