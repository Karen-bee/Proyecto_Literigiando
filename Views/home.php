<!DOCTYPE html>
<html lang="en">

<?php
include("../Views/Header.php")
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literagiando</title>
</head>

<body>
    <main>

        <!--Section 1 Carrusel de fotos-->
        <section id="container-slider">
            <a href="javascript: funcionEjecutar('anterior');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
            <a href="javascript: funcionEjecutar('siguiente');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
            <ul class="listslider">
                <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
                <li><a itlist="itList_1" href="#"></a></li>
                <li><a itlist="itList_2" href="#"></a></li>
            </ul>
            <!--Imagen 1-->
            <ul id="slider">
                <li style="background-image: url('../Storage/Imagenes/imagen_carrusel1.jpg'); z-index:0; opacity: 1;">
                    <div class="content_slider"></div>
                </li>

                <!--Imagen 2-->
                <li style="background-image: url('../Storage/Imagenes/imagen_carrusel2.jpg'); ">
                    <div class="content_slider">
                        <div>
                </li>

                <!--Imagen 3-->
                <li style="background-image: url('../Storage/Imagenes/imagen_carrusel3.jpg'); ">
                    <div class="content_slider">
                        <div>
                </li>

            </ul>
        </section>


        <!--Section 2 Card o tarjetas informativas-->
        <section id="seccion2">

            <!--Card 1-->
            <div class="container">
                <div class="card">
                    <figure>
                        <img src="../Storage/Imagenes/Logo_1.jpg">
                    </figure>
                    <div class="contenido">
                        <h3>TALLER INFANTIL</h3>
                        <button>Ver Más</button>
                    </div>
                </div>
            </div>

            <!--Card 2-->
            <div class="container">
                <div class="card">
                    <figure>
                        <img src="../Storage/Imagenes/Logo_2.jpg">
                    </figure>
                    <div class="contenido">
                        <h3>LIBRO HECHO A MANO</h3>
                        <button>Ver Más</button>
                    </div>
                </div>
            </div>

            <!--Card 3-->
            <div class="container">
                <div class="card">
                    <figure>
                        <img src="../Storage/Imagenes/Logo_3.jpg">
                    </figure>
                    <div class="contenido">
                        <h3>TALLER DE SEÑAS</h3>
                        <button>Ver Más</button>
                    </div>
                </div>
            </div>

            <!--Card 4-->
            <div class="container">
                <div class="card">
                    <figure>
                        <img src="../Storage/Imagenes/Logo_3.jpg">
                    </figure>
                    <div class="contenido">
                        <h3>DIBUJA CON LITERAGIANDO</h3>
                        <button>Ver Más</button>
                    </div>
                </div>
            </div>
        </section>


        <!--Section 3 Barra de ubicacion-->
        <section id="seccion3">
            <div class="barra">
                <h3>NOS ENCONTRAMOS EN:</h3>
            </div>
        </section>


        <!--Section 4 ubicacion de google maps y video-->
        <section id="seccion4">

            <!-- Contenido de tu ubicacion aquí -->
            <div class="columna">
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.107418991662!2d-74.03249842537006!3d4.751366395223834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8f7df50575cd%3A0xd21bdff9aaaa136!2sUniversidad%20De%20San%20Buenaventura!5e0!3m2!1ses!2sco!4v1689399795917!5m2!1ses!2sco" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Contenido de tu video aquí -->
            <div class="columna">
                <div class="video">
                </div>
            </div>
        </section>
    </main>
</body>

<?php
include("../Views/Footer.php")
?>

</html>