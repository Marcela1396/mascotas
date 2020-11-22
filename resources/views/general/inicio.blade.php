@extends('main')

@section('contenido')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://static.wixstatic.com/media/57032d_975a6841554b48cfb166c863f3c3e989~mv2.jpg/v1/fill/w_1882,h_367,al_c,q_85/57032d_975a6841554b48cfb166c863f3c3e989~mv2.webp" class="d-block w-100" alt="..." >
            </div>
            <div class="carousel-item">
                <img src="https://static.wixstatic.com/media/57032d_e792c4f9c1a04ec2b9ec2c7bd1a66f95~mv2.jpg/v1/fill/w_1882,h_367,al_c,q_85/57032d_e792c4f9c1a04ec2b9ec2c7bd1a66f95~mv2.webp" class="d-block w-100" alt="..." >
            </div>
            <div class="carousel-item">
                <img src="https://static.wixstatic.com/media/57032d_a648a4fbb13e4b28befd01c75f57c3f0~mv2.jpg/v1/fill/w_1882,h_367,al_c,q_85/57032d_a648a4fbb13e4b28befd01c75f57c3f0~mv2.webpg" class="d-block w-100" alt="..." >
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="{{url('mascotas/perros')}}">
                <img src="https://static.wixstatic.com/media/a17526_c851d034bdac480f8fd97ca55d6e75d7~mv2.png/v1/fill/w_566,h_480,al_c,q_85,usm_0.66_1.00_0.01/Sin_t%C3%ADtulo-1_Mesa_de_trabajo_1.webp">
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{url('mascotas/gatos')}}">
                <img src="img/2.png">
            </a>
        </div>
    </div>
</div>

@stop