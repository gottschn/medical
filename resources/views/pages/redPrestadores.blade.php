@extends('master')

@section('content')

    <section class="redprestadores">
        <div class="container-fluid">
            <div class="row">

                <div class="redprestadores-titulo" style="background-image: url('img/red_prestadores/red-prestadores2.jpg')">
                    <h1>¡NUESTRO EQUIPO!
                        <!--<span class="punto">.</span>-->
                    </h1>
                    <!--<h3 class="titulo-h3">Compra ahora, paga después con CEF-MEDICAL. </h3>-->
                </div>

            </div>
        </div>
    </section>

    <!-- FILTROS -->
    <h5 class="titulo_filtros">Encuentra lo que buscas</h5>
    <hr>

    <section class="filtros">

    <div class="container ordenado">
        
        <!-- FILTRO BUSCADOR -->
        <i class="fas fa-search"></i>
        <input type="text" id="search-text"  placeholder="Busque un especialista por nombre/apellido o local por nombre" class="search-box">
        <i class="fas fa-search-location"></i> <input type="text" id="search-text2" placeholder="Busque un especialista por su localidad" class="search-box">
        <!-- <span class="list-count"></span> -->

    

        <!-- FILTRO CATEGORÍA -->
        <div class="dropdown">
            <i class="fas fa-filter"></i><button onclick="myFunction()" class="dropbtn">Seleccione una categoría</button>
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Busque una categoría..." id="myInput"
                    onkeyup="filterFunction()">
                    <a href="#cirujanos" onclick="myFunction()">Cirujanos</a>
                    <a href="#odontologos"onclick="myFunction()" >Odontólogos</a>
                    <a href="#traumatologos" onclick="myFunction()">Traumatólogos</a>
                    <a href="#farmacia" onclick="myFunction()">Farmacias</a>
                    <a href="#laboratorio" onclick="myFunction()">Laboratorios</a>
                    <a href="#spa" onclick="myFunction()">SPA</a>
            </div>
        </div>
        
    </div>
    </section>
    <hr>

    <div class="paddinf-off tmm-team">

        <div class="tmm-container">

            <div class="tmm-row">
                
                    <!-- EMPIEZA SECCIÓN DE MÉDICOS -->
                    <section class="medicos in" id="list">

                        <!-- CIRUJANOS -->
                        <h2 class="titulo_medicos" id="cirujanos">Cirujanos plásticos</h2>

                        <!--MÉDICO CIRUJANO 1-->
                        <div class="item-circled ">
                            <div class="item-content face-container in">
                                <div class="title">
                                    <p class="face in"><img src="img/red_prestadores/medicos/medico_cirujano_1.jpg" alt="" /></p>
                                    <h3>Dr. Martín Sánchez <br>MP: 8740</h3>
                                    <h4>Especialista en Cirugía plástica y reparadora.</h4>
                                    <h4>Dirección: <a class="direccion-consultorio"
                                            href="https://www.google.com/maps/dir/-26.8366424,-65.2263446/torre+de+salud/@-26.8209507,-65.262156,13z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x94225d025ae03a7b:0x1a9fa5aed0ef99b0!2m2!1d-65.1980897!2d-26.8250651"
                                            target="_blank">Santiago 157 <br> - San Miguel de Tucumán.</a></h4>
                                    <h4>Horarios de atención:<br>Lunes de 16:00 a 20:00 hs.<br>Martes y jueves de 17:00
                                        a 20:00 hs. </h4>

                                    <p class="footer">
                                    <p class="boton-medicos"><a href="https://wa.me/message/IFJ3KQMLQWTKH1"
                                            class="btn">Sacar turno</a></p>
                                    <ul class="social-icons">
                                        <li><a target="_blank" href="https://www.facebook.com/dr.martin.e.sanchez/"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a target="_blank" href="https://www.instagram.com/dr_martin_sanchez/"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <!--<li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
                                    </ul>
                                </p>
                                </div>
                            </div>
                        </div>

                        <!--MÉDICO CIRUJANO 2-->

                        <div class="item-circled">
                            <div class="item-content face-container in">
                                <div class="title">
                                    <p class="face"><img src="img/red_prestadores/medicos/medico_cirujano_2.jpeg"
                                            alt="" /></p>
                                    <h3>Dr. Matías Luján <br>MP: 8437</h3>
                                    <h4>Especialista en Cirugía plástica y reparadora.</h4>
                                    <h4>Dirección: <a class="direccion-consultorio"
                                            href="https://www.google.com/maps/dir//25+de+Mayo+730,+San+Miguel+de+Tucum%C3%A1n,+Tucum%C3%A1n/@-26.8212506,-65.2069954,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94225c22ab6a9cdd:0xf3addade2ad4ee80!2m2!1d-65.2025322!2d-26.8209155"
                                            target="_blank"> 25 de Mayo 730<br> - San Miguel de Tucumán. </a></h4>
                                    <h4>Horarios de atención: <br>Lunes, martes y jueves de 17 a 20hs.
                                        <br>-------------------------------------------------</h4>

                                    <p class="footer">
                                    <p class="boton-medicos"><a href="https://wa.me/message/IFJ3KQMLQWTKH1"
                                            class="btn">Sacar turno</a></p>
                                    <ul class="social-icons">
                                        <li><a target="_blank"
                                                href="https://www.facebook.com/Dr.MatiasLujan.Tucuman/"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a target="_blank"
                                                href="https://www.instagram.com/dr.matiaslujancirujanoplastico/?hl=es"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li><a target="_blank"
                                                href="https://www.linkedin.com/in/matias-luj%C3%A1n-08a990b6/?originalSubdomain=ar"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--MÉDICO CIRUJANO 3-->

                        <div class="item-circled in">
                            <div class="item-content face-container in">
                                <div class="title">
                                    <p class="face"><img src="img/red_prestadores/medicos/medico_cirujano_3.jpeg"
                                            alt="" /></p>
                                    <h3>Dr. Juan José Bonari <br>MP: 9268</h3>
                                    <h4>Especialista en Cirugía plástica. <br>Salud y belleza.<br>SPA y cuidado
                                        personal.</h4>
                                    <h4>Dirección: <a class="direccion-consultorio"
                                            href="https://www.google.com/maps/dir//Laprida+871,+T4000IFQ+San+Miguel+de+Tucum%C3%A1n,+Tucum%C3%A1n/@-26.8194585,-65.2024678,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94225c228d38bdcb:0x974e15e50bb5950d!2m2!1d-65.2002791!2d-26.8194585"
                                            target="_blank"> Laprida 871 <br>- San Miguel de Tucumán.</a></h4>
                                    <h4>Horarios de atención: <br>Martes y jueves de 18:30 a 21:30 hs.</h4>

                                    <p class="footer">
                                    <p class="boton-medicos"><a href="https://wa.me/message/IFJ3KQMLQWTKH1"
                                            class="btn">Sacar turno</a></p>
                                    <ul class="social-icons">
                                        <li><a target="_blank" href="https://www.facebook.com/drbonari/"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a target="_blank" href="https://www.instagram.com/drbonari/?hl=es-la"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li><a target="_blank"
                                                href="https://www.linkedin.com/in/juan-jos%C3%A9-bonari-59193a59/?originalSubdomain=ar"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--MÉDICO CIRUJANO 4-->

                        <div class="item-circled">
                            <div class="item-content face-container in">
                                <div class="title">
                                    <p class="face"><img src="img/red_prestadores/medicos/medico_cirujano_4.jpeg"
                                            alt="" /></p>
                                    <h3>Dr. Diego Andjel <br>MP: 8298</h3>
                                    <h4>Especialista en Cirugía plástica y reparadora.</h4>
                                    <h4>Dirección: <a class="direccion-consultorio"
                                            href="https://www.google.com/maps/dir//Gral.+Paz+576,+T4000+San+Miguel+de+Tucum%C3%A1n,+Tucum%C3%A1n/@-26.8362927,-65.2092799,17z/data=!4m16!1m7!3m6!1s0x94225c0e8d0271b7:0x7946062ac490db30!2sGral.+Paz+576,+T4000+San+Miguel+de+Tucum%C3%A1n,+Tucum%C3%A1n!3b1!8m2!3d-26.8362927!4d-65.2070912!4m7!1m0!1m5!1m1!1s0x94225c0e8d0271b7:0x7946062ac490db30!2m2!1d-65.2070912!2d-26.8362927"
                                            target="_blank">Gral. Paz 576 <br>- San Miguel de Tucumán.</a></h4>
                                    <h4>Horarios de atención:<br>Lunes y miércoles de 18 a 21 hs.<br>Jueves de 15:00 a
                                        18:00 hs. <br>-------------------------------------------------</h4>

                                    <p class="footer">
                                        <p class="boton-medicos"><a href="https://wa.me/message/IFJ3KQMLQWTKH1"
                                            class="btn">Sacar turno</a></p>
                                        <ul class="social-icons">
                                            <li><a target="_blank" href="https://www.facebook.com/diego.andjel"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                            <li><a target="_blank"
                                                href="https://www.instagram.com/dr_diego_andjel/?hl=es-la"><i
                                                    class="fab fa-instagram"></i></a></li>
                                            <li><a target="_blank"
                                                href="https://www.linkedin.com/in/diego-andjel-33597b162/?originalSubdomain=ar"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    


                    <!-- MEDICOS ODONTOLOGOS -->

                    <!--<hr>-->
                    <!-- <section class="medicos_odontologos" id="list"> -->

                        <h2 class="titulo_medicos" id="odontologos">Odontólog@s</h2>

                        <!--MÉDICO ODONTÓLOGO 1-->
                        <div class="item-circled">
                            <div class="item-content face-container in">
                                <div class="title">
                                    <p class="face"><img src="img/red_prestadores/medicos/odontologo_1.jpeg" alt="" /></p>
                                    <h3>Dr. Santiago Mora<br>MP: 1879</h3>
                                    <h4>Odontólogo.</h4>
                                    <h4>Dirección: <a class="direccion-consultorio"
                                            href="https://www.google.com/maps/dir//Pcia+de+Salta+78,+T4000IRN+San+Miguel+de+Tucum%C3%A1n,+Tucum%C3%A1n/@-26.8290258,-65.2130652,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94225c139ab68577:0xfb39c0733d0ec237!2m2!1d-65.2108765!2d-26.8290258"
                                            target="_blank"> Salta 78 - 5° C <br>- San Miguel de Tucumán. </a></h4>
                                    <h4>Horarios de atención: <br>Lun-Mar-Miér. y Viernes de 9 a 18 hs.<br>Jueves de
                                        09:00 a 17:00 hs.</h4>
                                </div>

                                <p class="footer">
                                    <p class="boton-medicos"><a href="https://wa.me/message/IFJ3KQMLQWTKH1"
                                            class="btn">Sacar turno</a></p>
                                    <ul class="social-icons">
                                        <li><a target="_blank" href="https://www.facebook.com/santiago.mora.7712"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a target="_blank"
                                                href="https://instagram.com/dr_santiago_mora81?utm_medium=copy_link"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li><a target="_blank"
                                                href="https://www.linkedin.com/in/dr-santiago-mora-929161b9/?originalSubdomain=ar"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </p>
                            </div>
                        </div>

                        <!--MÉDICO ODONTÓLOGO 2-->
                        <div class="item-circled">
                            <div class="item-content face-container in">
                                <div class="title">
                                    <p class="face"><img src="img/red_prestadores/medicos/odontologo_2.jpg" alt="odontólogo cef medical" /></p>
                                    <h3>Dr. Nicolás Panico<br>MP: 1873</h3>
                                    <h4>Odontólogo.</h4>
                                    <h4>Dirección: <a class="direccion-consultorio"
                                            href="https://www.google.com/maps/dir//Combate+de+San+Lorenzo+935,+T4000+San+Miguel+de+Tucum%C3%A1n,+Tucum%C3%A1n/@-26.8322692,-65.2142558,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94225c12f3eba35d:0x5635ba2f4eecffd1!2m2!1d-65.2120671!2d-26.8322692?hl=es-419"
                                            target="_blank"> San Lorenzo 935<br>- San Miguel de Tucumán. </a></h4>
                                    <h4>Horarios de atención: <br>Lunes a jueves de 17:00 a 21:00 hs.
                                        <br>-------------------------------------------------</h4>
                                </div>

                                <p class="footer">
                                    <p class="boton-medicos"><a href="https://wa.me/message/IFJ3KQMLQWTKH1"
                                            class="btn">Sacar turno</a></p>
                                    <ul class="social-icons">
                                        <li><a target="_blank"
                                                href="https://m.facebook.com/nicolas.panico.9?locale2=es_LA"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                         <!-- <li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                                         <li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
                                    </ul>
                                </p>
                            </div>
                        </div>

                        <!--MÉDICO ODONTÓLOGO 3-->
                        <div class="item-circled">
                            <div class="item-content face-container in">
                                <div class="title">
                                    <p class="face"><img src="img/red_prestadores/medicos/odontologo_3.jpeg"
                                        alt="odontólogo cef medical" /></p>
                                    <h3>Dra. Ana Eulogia Adad <br>MP: 2533</h3>
                                    <h4>Odontóloga.</h4>
                                    <h4>Dirección: <a class="direccion-consultorio"
                                            href="https://www.google.com/maps/dir//Pcia+de+Corrientes+961,+T4000+San+Miguel+de+Tucum%C3%A1n,+Tucum%C3%A1n/@-26.821157,-65.2119011,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94225c3e14136dcb:0xc6575b008e05e173!2m2!1d-65.2097124!2d-26.821157"
                                            target="_blank"> Corrientes 961<br>- San Miguel de Tucumán.</a></h4>
                                    <h4>Horarios de atención: <br>Lunes y jueves de 09:00 a 12:00<br>Martes, jueves
                                        y viernes de 16 a 21 hs.</h4>
                                </div>

                                <p class="footer">
                                    <p class="boton-medicos"><a href="https://wa.me/message/IFJ3KQMLQWTKH1"
                                            class="btn">Sacar turno</a></p>
                                    <ul class="social-icons">
                                        <li><a target="_blank" href="https://www.facebook.com/eulogia.adad"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a target="_blank" href="https://www.instagram.com/euloadad/?hl=es-la"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <!-- <li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
                                    </ul>
                                </p>
                            </div>
                        </div>

                        <!--MÉDICO ODONTÓLOGO 4-->
                        <div class="item-circled">
                            <div class="item-content face-container in">
                                <div class="title">
                                    <p class="face"><img src="img/red_prestadores/medicos/odontologo_4.jpg"
                                        alt="odontólogo cef medical" /></p>
                                    <h3>Dra. Flor. Bonacina <br>MP: ...</h3>
                                    <h4>Odontóloga.</h4>
                                    <h4>Dirección: <a class="direccion-consultorio"
                                            href="https://www.google.com/maps/dir//Pcia+de+Salta+78,+T4000IRN+San+Miguel+de+Tucum%C3%A1n,+Tucum%C3%A1n/@-26.8290258,-65.2130652,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94225c139ab68577:0xfb39c0733d0ec237!2m2!1d-65.2108765!2d-26.8290258"
                                            target="_blank"> Salta 78 - 5° C<br>- San Miguel de Tucumán.</a></h4>
                                    <h4>Horarios de atención: <br>Lun-Mar-Miér. y Viernes de 9 a 18 hs.<br>Jueves de
                                        09:00 a 17:00 hs.</h4>
                                </div>

                                <p class="footer">
                                    <p class="boton-medicos"><a href="https://wa.me/message/IFJ3KQMLQWTKH1"
                                            class="btn">Sacar turno</a></p>
                                    <ul class="social-icons">
                                        <li><a target="_blank"
                                                href="https://m.facebook.com/florencia.bonacina?locale2=es_LA"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <!--<li><a target="_blank" href="https://www.instagram.com/euloadad/?hl=es-la"><i class="fab fa-instagram"></i></a></li>
                                         <li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
                                    </ul>
                                </p>
                            </div>
                        </div>
                    <!-- </section> -->

                    <!--<hr>-->

                    <!-- TRAUMATÓLOGOS -->
                    <!-- <section class="medicos_ortopedia_traumatologia" id="list"> -->

                        <h2 class="titulo_medicos" id="traumatologos">Traumatólogos</h2>


                        <!--MÉDICO TRAUMATÓLOGO 1-->
                        <div class="item-circled">
                            <div class="item-content face-container in">
                                <div class="title">
                                    <p class="face"><img src="img/red_prestadores/medicos/ortopedia_traumatologia.jpg"
                                        alt="" /></p>
                                    <h3>Dr. Maxi. Aparicio<br>MP: 8433</h3>
                                    <h4>Especialista en Ortopedia y traumatología.</h4>
                                    <h4>Dirección: <a class="direccion-consultorio"
                                            href="https://www.google.com/maps/dir//San+Juan+417,+T4000+San+Miguel+de+Tucum%C3%A1n,+Tucum%C3%A1n/@-26.8256499,-65.204431,17z/data=!4m16!1m7!3m6!1s0x94225c19e3f9135f:0x8bb9b18c1ef1c659!2sSan+Juan+417,+T4000+San+Miguel+de+Tucum%C3%A1n,+Tucum%C3%A1n!3b1!8m2!3d-26.8256499!4d-65.2022423!4m7!1m0!1m5!1m1!1s0x94225c19e3f9135f:0x8bb9b18c1ef1c659!2m2!1d-65.2022423!2d-26.8256499"
                                            target="_blank"> San Juan 417<br>- San Miguel de Tucumán.</a></h4>
                                    <h4>Horarios de atención: <br>Miércoles y viernes desde 15 hs.</h4>
                                </div>

                                <p class="footer">
                                    <p class="boton-medicos"><a href="https://wa.me/message/IFJ3KQMLQWTKH1"
                                            class="btn">Sacar turno</a></p>
                                    <ul class="social-icons">
                                        <li><a target="_blank"
                                                href="https://www.facebook.com/Dr-Maximiliano-Aparicio-109381787485406/"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a target="_blank"
                                                href="https://www.instagram.com/dr.maximilianoaparicio/"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <!-- <li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
                                    </ul>
                                </p>
                            </div>
                        </div>
                    <!-- </section> -->
                    <!--<hr>-->

                    <!-- FARMACIAS -->

                    <!-- <section class="farmacias" id="list"> -->
                        <h2 class="titulo_medicos" id="farmacia">Farmacias</h2>
                        
                        <!--FARMACIA N° 1-->
                        <div class="item-circled">
                            <div class="item-content face-container in">
                                <div class="title">
                                    <p class="face"><img src="img/red_prestadores/farmacias.jpg"
                                        alt="farmacias cefmedical" /></p>
                                    <h3>Avellaneda Norte</h3>
                                    <h4>Dirección: <a class="direccion-consultorio"
                                            href="https://www.google.com/maps/dir//farmacia+avellaneda+norte/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x94225c221b47b673:0x4843583107780415?sa=X&ved=2ahUKEwiL4bX83ZDzAhW9rJUCHUkeBegQ9Rd6BAhJEAM"
                                            target="_blank">Av. Sarmiento 199<br>- San Miguel de Tucumán.</a></h4>
                                    <h4>Horarios de atención: <br>Lunes a sábado de 8:30 a 13:00 y de 17:00 a 21:30 hs.
                                    </h4>
                                </div>

                                <p class="footer">
                                    <p class="boton-medicos"><a href="tel:3814219399" class="btn">Llamar</a></p>
                                </p>
                            </div>
                        </div>
                    <!-- </section> -->

                    <!--<hr>-->

                    <!-- LABORATORIOS -->

                    <!-- <section class="laboratorios" id="list"> -->
                        <h2 class="titulo_medicos" id="laboratorio">Laboratorios</h2>

                        <!--LABORATORIO N° 1-->
                        <div class="item-circled">
                            <div class="item-content face-container in">
                                <div class="title">
                                    <p class="face"><img src="img/red_prestadores/laboratorios/presti.jpeg"
                                        alt="laboratorios cefmedical" /></p>
                                    <h3>Laboratorio Presti</h3>
                                    <h4>Dirección: <a class="direccion-consultorio"
                                            href="https://www.google.com/maps/dir//laboratorio+presti/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x94225b8538d9d0fb:0xb77668edd8c6e8e?sa=X&ved=2ahUKEwj0tdvy6JDzAhVxqpUCHYk4CQIQ9Rd6BAhWEAM"
                                            target="_blank">Gral. Lamadrid 612<br>- San Miguel de Tucumán. </a></h4>
                                    <h4>Horarios de atención: <br>Lunes a viernes de 7:00 a 20:00 hs. <br>Sábado de
                                        08:00 a 12:00 hs.</h4>
                                </div>

                                <p class="footer">
                                    <p class="boton-medicos"><a href="tel:3814241056" class="btn">Llamar</a></p>

                                </p>
                                <ul class="social-icons">
                                    <li><a target="_blank"
                                            href="https://www.facebook.com/prestilaboratoriobioquimico/"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a target="_blank"
                                            href="https://www.instagram.com/laboratoriopresti/?hl=es"><i
                                                class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    <!-- </section> -->
                    <!--<hr>-->

                    <!-- SPA'S -->
                    <!-- <section class="SPA" id="list"> -->
                        <h2 class="titulo_medicos" id="spa">SPA</h2>


                        <!--SPA N° 1-->
                        <div class="item-circled">
                            <div class="item-content face-container in">
                                <div class="title">
                                    <p class="face"><img src="img/red_prestadores/spa/kuwana.jpeg" alt="spa cefmedical" /></p>
                                    <h3>Kuwana <br>__________</h3>
                                    <h4>Dirección: <a class="direccion-consultorio"
                                            href="https://www.google.com/maps/dir//kuwana+spa/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x942242d423766393:0x3cf10e6648f9f086?sa=X&ved=2ahUKEwj787Ta75DzAhWgJLkGHXo0DdwQ9Rd6BAgOEAQ"
                                            target="_blank">Remedios de Escalada 150.</a> - Yerba Buena.</h4>
                                    <h4>Horarios de atención: <br>Lunes a viernes de 09:00 a 21:00 hs.</h4>
                                    <h4>------------------------------------------------- <br>------------------------------------------------- <br>-------------------------------------------------</h4>
                                </div>

                                <p class="footer">
                                    <p class="boton-medicos"><a href="tel:3815610334" class="btn">Llamar</a></p>
                                    <ul class="social-icons">
                                        <li><a target="_blank" href="https://www.facebook.com/kuwanacentromedico/"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </p>
                            </div>
                        </div>


                        <!--SPA N° 2-->
                        <div class="item-circled">
                            <div class="item-content face-container in">
                                <div class="title">
                                    <p class="face"><img src="img/red_prestadores/spa/esbelta.jpeg"
                                        alt="spa cefmedical" /></p>
                                    <h3>Esbelta<br>__________</h3>
                                    <h4>Dirección: <a class="direccion-consultorio"
                                            href="https://www.google.com/maps/dir//spa+esbelta+tucuman/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x94225d990a33b4a9:0x86af7fc2420002f7?sa=X&ved=2ahUKEwjZifWP-ZDzAhVdqJUCHb6rD1gQ9Rd6BAhLEAU"
                                            target="_blank">San Juan 27.</a><br>- San Miguel de Tucumán.</h4>
                                    <h4>Horarios de atención: <br>Lunes a viernes de 09:00 a 19:00 hs.</h4>
                                    <h4>------------------------------------------------- <br>------------------------------------------------- <br>-------------------------------------------------</h4>
                                </div>

                                <p class="footer">
                                    <p class="boton-medicos"><a href="tel:3813462979" class="btn">Llamar</a></p>
                                    <ul class="social-icons">
                                        <li><a target="_blank"
                                                href="https://m.facebook.com/Esbelta-Centro-de-Est%C3%A9tica-Corporal-100606442060908/?ref=bookmarks"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <!--<li><a target="_blank" href="https://www.instagram.com/dr.maximilianoaparicio/"><i class="fab fa-instagram"></i></a></li>
                                            <li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
                                    </ul>
                                </p>
                            </div>
                        </div>

                        
                        <!--SPA N° 3-->
                        <div class="item-circled">
                            <div class="item-content face-container in">
                                <div class="title">
                                    <p class="face"><img src="img/red_prestadores/spa/griselda_goritz.jpeg"
                                        alt="spa cefmedical" /></p>
                                    <h3>Griselda Goritz <br>M.P: 890</h3>
                                    <h4>Dermatocosmiatra matriculada <br>Tratamientos - Faciales - Corporales - Aparatología.</h4>
                                    <h4>Dirección: <a class="direccion-consultorio"
                                            href=""
                                            target="_blank">------</a><br>- San Miguel de Tucumán.</h4>
                                    <h4>Horarios de atención: <br>Lunes a viernes de 09:00 a 19:00 hs.</h4>
                                </div>

                                <p class="footer">
                                    <p class="boton-medicos"><a href="tel:3813462979" class="btn">Llamar</a></p>
                                    <ul class="social-icons">
                                        <li><a target="_blank"
                                                href="https://www.facebook.com/griselda.goritz.9"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a target="_blank" href="https://www.instagram.com/griseldagoritz/?hl=es"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    <!-- </section> -->
                    <!--<hr>-->
                    <span class="empty-item">No hay resultados</span>
                </section>
                
            </div>
            
        </div>


        <!----------------------------------------Fin RED-PRESTADORES------------------------------>
            <!----------------- Return to Top ----------------------------------------------------------------------------->
             <a href="javascript:" id="return-to-top"><i class="uil uil-arrow-up"></i></a>

             <script src="js/redPrestadores.js"></script>

@stop