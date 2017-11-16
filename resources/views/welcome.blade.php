@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Team7</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<style>
  section .imagenes-menu img{
    width: 10%;
    margin: 10px;
  }

  section .fa-btn {
    margin-right: 30px;
  }
  section .carousel{
    margin-top: 10px;
  }

  section .carousel .item{
      min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
  }
  section .carousel .item img{
      width: 0 auto;
      margin: 0 auto; /* Align slide image horizontally center */
  }

</style>
<!--Cuerpo de la pagina-->

<body>
<!--Seccion de temas-->
  <section class="main">
    <div class="container">

      <!--Seccion del carrucel-->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>

          </ol>
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
              <div class="item active">
                  <img src="{{ asset('images/desarrollo.png') }}" alt="First Slide" class="img-rounded">
              </div>
              <div class="item">
                  <img src="{{ asset('images/lenguajes.png') }}" alt="Second Slide" class="img-rounded">
              </div>
              <div class="item">
                  <img src="{{ asset('images/programacion.png') }}" alt="Third Slide" class="img-rounded">
              </div>

          </div>
          <!-- Carousel controls -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>
      <!--Seccion del carrucel-->

  </section>

</body>
</html>
@endsection
