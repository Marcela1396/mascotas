@extends('main')
@section('contenido')

<div class="container" >
       <!-- Jumbotron -->
       <div class="jumbotron text-center" id="historia">
              <!-- Title -->
              <h4 class="card-title h4 pb-2"><strong>Nosotros</strong></h4>

              <!--Carousel Wrapper-->
              <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                     <!--Indicators-->
                     <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                     </ol>
                     <!--/.Indicators-->
                     <!--Slides-->
                     <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                   <div class="view">
                                          <img class="d-block w-100" src="https://static.wixstatic.com/media/5f3089_74bb2994ddb440c1b3ddb76bc10a3845~mv2.jpg/v1/fill/w_1224,h_350,al_c,q_85,usm_0.66_1.00_0.01/banner-home-01.webp"
                                          alt="First slide">
                                          <div class="mask rgba-black-light"></div>
                                   </div>
                            </div>
                            <div class="carousel-item">
                            <!--Mask color-->
                                   <div class="view">
                                          <img class="d-block w-100" src="https://static.wixstatic.com/media/a17526_68eb78cedc924c02bf6d102318cdc516~mv2.png/v1/fill/w_1225,h_344,al_c,q_90,usm_0.66_1.00_0.01/sEGSD_Mesa%2520de%2520trabajo%25201_edited.webp"
                                          alt="Second slide">
                                          <div class="mask rgba-black-light"></div>
                                   </div>
                            </div>
                     </div>
                     <!--/.Slides-->
                     <!--Controls-->
                     <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                     <!--/.Controls-->
               </div> 
              <br>

              <h5 class="indigo-text h5 mb-4">Nuestros Inicios</h5>

              <p class="card-text">
                La Misión de Tienda de Mascotas consiste en brindar una solución integral a la atención de la mascota, a partir de una inmejorable oferta de producto, precio, calidad y servicio.
              </p>

              <!-- Linkedin -->
              <a class="fa-lg p-2 m-2 li-ic"><i class="fab fa-linkedin-in grey-text"></i></a>
              <!-- Twitter -->
              <a class="fa-lg p-2 m-2 tw-ic"><i class="fab fa-twitter grey-text"></i></a>
              <!-- Dribbble -->
              <a class="fa-lg p-2 m-2 fb-ic"><i class="fab fa-facebook-f grey-text"></i></a>

       </div>
       <!-- Jumbotron -->
</div>

@stop