@extends('master')

@section('content')

    

    <!----------------------------------------Termina el Modal Login---------------------------->
    <!----------------------------------------termina el navbar---------------------------->

    <!----------------------------------------Inicio Carousel Principal------------------------------>

    <div id="myCarousel" class="carousel slide">
        <!-- Indicadores -->

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Diapositivas -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Primera imágen de fondo. -->
                <div class="fill" style="background-image:url('img/carousel-1comp.jpg');"></div>
                <div class="carousel-caption">
                    <h2 class="animated fadeInLeft">La salud es más fácil con CEF.</h2>
                    <p class="animated fadeInUp">Invertí en tu salud, ¡ahora!</p>
                    <p class="animated fadeInUp"><a href="#info-creditos" class="btn btn-transparent btn-rounded btn-large">Cómo funciona</a></p>
                </div>
            </div>
            <div class="item">
                <!-- Segunda imágen de fondo. -->
                <div class="fill" style="background-image:url('img/carousel-2comp.jpg');"></div>
                <div class="carousel-caption">
                    <h2 class="animated fadeInDown">Belleza, salud y bienestar es posible con CEF</h2>
                    <p class="animated fadeInUp">Podes financiar hasta en 12 cuotas, ¿qué esperas?</p>
                    <p class="animated fadeInUp"><a href="#carousel_chico" class="btn btn-transparent btn-rounded btn-large">Cómo funciona</a></p>
                </div>
            </div>
            <div class="item">
                <!-- Tercera imágen de fondo. -->
                <div class="fill" style="background-image:url('img/carousel-3comp.jpg');"></div>
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight">En el momento preciso cuando lo necesites.</h2>
                    <p class="animated fadeInRight">Tenemos una atención personalizada 24/7.</p>
                    <p class="animated fadeInRight"><a href="redPrestadores.html" class="btn btn-transparent btn-rounded btn-large">Cómo funciona</a></p>
                </div>
            </div>
        </div>

        <!-- Controles (prev,next) -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </div>
    <!----------------------------------------FIN Carousel Principal------------------------------>
    <!----------------- Return to Top ----------------------------------------------------------------------------->
    <a href="javascript:" id="return-to-top"><i class="uil uil-arrow-up"></i></a>
    <!----------------- Return to Top ----------------------------------------------------------------------------->


    <!----------------------------------------Cuadritos informacion-------------------------------------------->

    <section class="carrou__container" id="info-creditos">
        <div class="titulo__infor">
            <h1 class="scroll-content fadeTop"> Elige pagar con CEF</h1>
            <h1> <span>100%</span> digital, <span>100%</span> fácil.</h1>
        </div>
        <div class="infor__contenedores scroll-content fadeTop">
            <div class="box__carrou">
                <div class="carrousel__elemento">
                    <h3 class="min__title_">intereses</h3>
                    <h3 class="min__title">bajos</h3>
                    <i class="fas fa-money-bill-wave"></i>
                </div>
            </div>

            <div class="box__carrou">
                <div class="carrousel__elemento">
                    <h3 class="min__title_">créditos</h3>
                    <h3 class="min__title">inmediatos</h3>
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
            </div>

            <div class="box__carrou">
                <div class="carrousel__elemento">
                    <h3 class="min__title_">sin</h3>
                    <h3 class="min__title">complicaciones</h3>
                    <i class="fas fa-people-arrows"></i>
                </div>
            </div>
        </div>

        <div class="titulo__infor__ scroll-content fadeTop">
            <div class="scroll-content fadeTop">
                <p>Sólo necesitas tu DNI y tu WhatsApp. Recuerda leer nuestros <a href="{{ route('terminos') }}">Términos y condiciones</a>.
                </p>
            </div>

        </div>



    </section>
    <!----------------------------------------Fin Cuadritos informacion-------------------------------------------->
    <!----------------- Return to Top ----------------------------------------------------------------------------->
    <a href="javascript:" id="return-to-top"><i class="uil uil-arrow-up"></i></a>
    <!----------------- Return to Top ----------------------------------------------------------------------------->
    <!----------------------------------------INICIO de carrousel chico-------------------------------------------->

    <section class="carrou__container__e" id="carousel_chico">
        <div class="titulo__carrous scroll-content fadeTop">
            <h1 class="titulo__carrous__"> Red de Prestadores </h1>

        </div>
        <div class="carousel__e owl-carousel scroll-content fadeTop">
            <div class="card__e primera__categoria">
                <a class="btn__categoria__letra">
                    Médicos
                </a>
                <div class="img__categorias">
                    <a href="redPrestadores.html#cirujanos" target="blank_"><img src="img/medicoscomprimida.jpg" alt=""></a>
                </div>
            </div>
            <div class="card__e primera__categoria">
                <a class="btn__categoria__letra">
                    Farmacias
                </a>
                <div class="img__categorias">
                    <a href="redPrestadores.html#farmacia"><img src="img/farmaciascomprimida.jpg" alt=""></a>
                </div>
            </div>
            <div class="card__e primera__categoria">
                <a class="btn__categoria__letra">
                    Odontólogos
                </a>
                <div class="img__categorias">
                    <a href="redPrestadores.html#odontologos"><img src="img/odontologoscomprimida.jpg" alt=""></a>
                </div>
            </div>
            <div class="card__e primera__categoria">
                <a class="btn__categoria__letra">
                    Bienestar
                </a>
                <div class="img__categorias">
                    <a href="redPrestadores.html#spa"><img src="img/bienestarcomprimida.jpg" alt=""></a>
                </div>
            </div>
            <div class="card__e primera__categoria">
                <a class="btn__categoria__letra">
                    Laboratorios
                </a>
                <div class="img__categorias">
                    <a href="redPrestadores.html#laboratorio"><img src="img/laboratoriocomprimida.jpg" alt=""></a>
                </div>
            </div>

        </div>


    </section>

    @include('layouts.subscribite')
@stop