@include('fragments.headerOperador')
@extends('fragments.main')

@section('contenido')
<div class="row" style="margin:5%">
    <div class="container">
        
        <div class="card-deck">
            <!-- Empeños ---------------------------------->
            
                  <div class="card">
                    <a href="#">
                    <img style="max-width: 100%; min-width: 20%" class="card-img-top" src="{{ asset('img/empenio.png') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">EMPEÑOS</h5>
                      </div>
                    </a>
                  </div>
            
          	<!-- Operaciones ----------------------------------->

            
                  <div class="card">
                    <a href="#">
                    <img style="max-width: 100%; min-width: 20%" class="card-img-top" src="{{ asset('img/operaciones.png') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">OPERACIONES</h5>
                      </div>
                    </a>
                  </div>

    		<!-- Multiples ----------------------------------->

            
                  <div class="card">
                    <a href="#">
                    <img style="max-width: 100%; min-width: 20%" class="card-img-top" src="{{ asset('img/multiple.png') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">MULTIPLES</h5>
                      </div>
                    </a>
                  </div>

			<!-- Subasta ----------------------------------->

            
                  <div class="card">
                    <a href="#">
                    <img style="max-width: 100%; min-width: 20%" class="card-img-top" src="{{ asset('img/subasta.png') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">SUBASTA</h5>
                      </div>
                    </a>
                  </div>

    <!-- Venta ----------------------------------->

            
                  <div class="card">
                    <a href="#">
                    <img style="max-width: 100%; min-width: 20%" class="card-img-top" src="{{ asset('img/venta.png') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">VENTA</h5>
                      </div>
                    </a>
                  </div>              
                 
        </div>
   </div>
</div>
 
@endsection