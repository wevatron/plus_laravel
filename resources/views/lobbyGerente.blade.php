@include('fragments.headerGerente')
@extends('fragments.main')

@section('contenido')
<div class="row" style="margin:5%">
    <div class="container">
        
        <div class="card-deck">
            <!-- Caja ---------------------------------->
            
                  <div class="card">
                    <a href="#">
                    <img style="max-width: 100%; min-width: 20%" class="card-img-top" src="{{ asset('img/caja2.png') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">CAJA</h5>
                      </div>
                    </a>
                  </div>
            
          	<!-- Resguardo ----------------------------------->

            
                  <div class="card">
                    <a href="#">
                    <img style="max-width: 100%; min-width: 20%" class="card-img-top" src="{{ asset('img/caja.png') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">RESGUARDO</h5>
                      </div>
                    </a>
                  </div>

    		<!-- Traspaso ----------------------------------->

            
                  <div class="card">
                    <a href="#">
                    <img style="max-width: 100%; min-width: 20%" class="card-img-top" src="{{ asset('img/traspaso.png') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">TRASPASOS</h5>
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