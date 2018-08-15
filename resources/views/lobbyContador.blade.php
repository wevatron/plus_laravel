@include('fragments.headerContador')
@extends('fragments.main')

@section('contenido')
<div class="row" style="margin:5%">
    <div class="container">
        <div class="row">
            <!-- Caja ---------------------------------->
            
                  <div class="card col-sm-6 offset-lg-1 col-md-4 offset-md-1 col-lg-4 offset-lg-1">
                    <a href="#">
                    <img style="max-width: 100%; min-width: 20%" class="card-img-top" src="{{ asset('img/caja2.png') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">CAJA</h5>
                      </div>
                    </a>
                  </div>
            
            <!-- Resguardo ----------------------------------->

            
                  <div class="card col-sm-6 offset-lg-1 col-md-4 offset-md-1 col-lg-4 offset-lg-1">
                    <a href="#">
                    <img style="max-width: 100%; min-width: 20%" class="card-img-top" src="{{ asset('img/caja.png') }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">RESGUARDO</h5>
                      </div>
                    </a>
                  </div>
        </div>         
   </div>
</div>
 
@endsection