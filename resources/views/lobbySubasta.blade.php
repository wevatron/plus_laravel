@include('fragments.headerSubasta')
@extends('fragments.main')

@section('contenido')

<div class="row" style="margin:5%">
    <div class="container">
        
        <div class="card col-lg-4 offset-lg-4">
            <a href="#">
                <img style="max-width: 100%; min-width: 20%" class="card-img-top" src="{{ asset('img/subasta.png') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">SUBASTA</h5>
                </div>
            </a>
         </div>
        
   </div>
</div>            
 
@endsection