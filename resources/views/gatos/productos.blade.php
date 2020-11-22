@extends('main')

@section('contenido')
<div class="container">
    <div class = "row">
        @foreach ($productos as $p)
        <div class = "col-md-4">
            <!-- Card -->
            <div class="card" id ="tarjeta2">

                <!-- Card image -->
                <div class="view overlay" >
                    <img class="card-img-top" src='{{url("/img/$p[foto]")}}' alt="Card image cap" height="350">
                </div>

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title"> {{ $p['nombre'] }} </h4>
                    <!-- Text -->
                    <h6> Codigo : {{$p['id'] }}  </h6>
                    <h6> Precio : {{$p['precio']}}  </h6>
                    <!-- Button -->
                    <a href="#" class="btn btn-primary">Comprar</a>

                </div>
            </div>
        <!-- Card -->
        </div>
    
        @endforeach
    </div>
</div>

@stop

