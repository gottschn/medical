@extends('master')

@section('content')
<body>
     <!----------------------------------------Navbar---------------------------->
     @include('layouts.header')
    <!----------------------------------------termina el navbar---------------------------->

<!-- REVIEWS -->.



<section class="pacientes">

    <div class="pacientes-titulo">
        <h2>Nuestros pacientes te comparten su experiencia.</h2>

  </div>
  
<div class="container">
  <div class="reviews-slider">
    <div class="reviews-slider__item">
        <a class="reviews-slider__photo-wrapper" href="#">
          <img src="img/pacientes/paciente_1.jpg" alt="" class="reviews-slider__photo" />
        </a>
        <div class="reviews-slider__text">
          <div class="reviews-slider__message">
            <p>Siempre me sorprendió la excelencia en servicio al cliente que tiene CEF. Lo recomiendo siempre a todas mis amigas por la efectividad del servicio y la calidad de atención, ¡excelente!</p>
          </div>
          <div class="reviews-slider__author-name">Yiyi Silman</div>
        </div>
    </div>
    <div class="reviews-slider__item">
        <a class="reviews-slider__photo-wrapper" href="#">
          <img src="img/pacientes/paciente_2.jpg" alt="" class="reviews-slider__photo" />
        </a>
        <div class="reviews-slider__text">
          <div class="reviews-slider__message">
            <p>Ya a un mes de mi implante mamario, estoy muy feliz con el resultado que obtuve. ¡Muchas gracias a CEF Medical por hacer esto posible!</p>
          </div>
          <div class="reviews-slider__author-name">Celeste Cede</div>
        </div>
    </div>
    <div class="reviews-slider__item">
        <a class="reviews-slider__photo-wrapper" href="#">
          <img src="img/pacientes/paciente_3.jpg" alt="" class="reviews-slider__photo" />
        </a>
        <div class="reviews-slider__text">
          <div class="reviews-slider__message">
            <p>Por lejos la mejor experiencia que tuve, la atención es excelente y la financiación súper accesible. Gracias a su ayuda pude realizarme mi rinoplastia.</p>
          </div>
          <div class="reviews-slider__author-name">Luciana Colombres</div>
        </div>
    </div>
    <div class="reviews-slider__item">
        <a class="reviews-slider__photo-wrapper" href="#">
          <img src="img/pacientes/paciente_4.jpg" alt="" class="reviews-slider__photo" />
        </a>
        <div class="reviews-slider__text">
          <div class="reviews-slider__message">
            <p>Pude hacer mi cirugía gracias a la facilidad que me dio CEF, ahora estoy pagando mi operación tranquila y feliz.</p>
          </div>
          <div class="reviews-slider__author-name">Flavia Isa</div>
        </div>
    </div>
    <div class="reviews-slider__item">
        <a class="reviews-slider__photo-wrapper" href="#">
          <img src="img/pacientes/paciente_5.jpg" alt="" class="reviews-slider__photo" />
        </a>
        <div class="reviews-slider__text">
          <div class="reviews-slider__message">
            <p>Con la ayuda que me dio CEFMedical, ¡pude realizarme mi bariátrica financiada! Muy agradecida.</p>
          </div>
          <div class="reviews-slider__author-name">Sofía Ortíz</div>
        </div>
    </div>

    <div class="reviews-slider__item">
        <a class="reviews-slider__photo-wrapper" href="#">
          <img src="img/pacientes/paciente_6.jpeg" alt="" class="reviews-slider__photo" />
        </a>
        <div class="reviews-slider__text">
          <div class="reviews-slider__message">
            <p>CEFMedical ES LO MÁS, gracias a ellos pude realizarme mi mamoplastía y pagarla en cómodas cuotas.</p>
          </div>
          <div class="reviews-slider__author-name">Giuliana Quiroga</div>
        </div>
    </div>
  </div>
</div>
</section>
<!----------------------------------------Footer------------------------------------------------------------>

@include('layouts.subscribite')
@include('layouts.footer')

<!----------------------------------------Fin Footer------------------------------------------------------------>
  <!--ICONOS-->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script><script  src="JS/pacientes.js"></script>
  
@stop
