<!DOCTYPE html>
<html lang="en">
<head>
    <!--Meta sirve para tener una pagina web responsive-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Header/Footer/General literagiando</title>
    <!--Enlazace para obtener estilos-->
    <link rel="stylesheet" href="estilos.css">
     <!--Iconos-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--Header con dos logos de encabezado-->
    <div class="rectangulo">  
        <img src="img/Logo_Lite.png" alt="" class="logolite">
        <img src="img/Logo_Uni.png" alt="" class="logouni">
      </div>


 <!--Encabezado - Barra de navegacion-->
 <header>
  <nav class="navbar">
    <!--Logos-->
    <div class="logo">
      <a href="#"><i class="fas fa-home"></i></a>
      <a href="#"><i class="fas fa-user"></i></a>
    </div>
    <!--Items de barra de navegacion-->
    <input type="checkbox" id="check">
    <label for="check" class="mostrar-menu">&#8801</label>
    <ul class="menu">
      <li><a href="#">Sobre nosotros</a></li>
      <li><a href="#">Noticias</a></li>
      <li><a href="#">Eventos</a></li>
      <li><a href="prueba.php">Blog</a></li>
      <li><label for="#">Inicio Sesion</label></li>
      <label for="check" class="esconder-menu">&#215</label>
    </ul>
  </nav>
</header>


 <!--Cuerpo de la pagina-->
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
        <li style="background-image: url('img/imagen_carrusel1.jpg'); z-index:0; opacity: 1;">
          <div class="content_slider" ></div>
        </li>

        <!--Imagen 2-->
        <li style="background-image: url('img/imagen_carrusel2.jpg'); ">
          <div class="content_slider" ><div>
        </li>

        <!--Imagen 3-->
        <li style="background-image: url('img/imagen_carrusel3.jpg'); ">
        <div class="content_slider" ><div>
        </li>

     </ul>
   </section>


   <!--Section 2 Card o tarjetas informativas-->
    <section id="seccion2">

    <!--Card 1-->
    <div class="container">
        <div class="card">
            <figure>
                <img src="img/Logo_1.jpg">
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
                <img src="img/Logo_2.jpg">
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
                <img src="img/Logo_3.jpg">
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
                <img src="img/Logo_4.jpg">
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.107418991662!2d-74.03249842537006!3d4.751366395223834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8f7df50575cd%3A0xd21bdff9aaaa136!2sUniversidad%20De%20San%20Buenaventura!5e0!3m2!1ses!2sco!4v1689399795917!5m2!1ses!2sco" 
      width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <!-- Contenido de tu video aquí -->
     <div class="columna">
    <div class="video">
    </div>
    </div>
    </section>
</main>



 <!--Pie de pagina o Footer-->
<footer>
    <div class="contenedor">
         <!--Logos del Footer-->
        <img class="logo1" src="img/Logo_Universidad.png" alt="">
        <img class="logo2" src="img/Logo_Literagiando.png" alt="">
      </div> 
      <!--Iconos del Footer-->
      <div class="social-media">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-whatsapp"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-youtube"></a>
      </div>
      <!--Columna 1 del Footer-->
      <div class="column-container">
        <div class="column1">
          <h1>Contactanos</h1>
          <ul>
            <li><label href="#">Universidad de San Buenaventura, Sede Bogotá<label></li>
            <li><h4 href="#">Dirección:</h4></li>
            <li><a href="#">Carrera 8H # 172 -20</a></li>
            <li><h4 href="#">Teléfono:</h4></li>
            <li><a href="#">3208288872</a></li>
            <li><h4 href="#">E-mail:</h4></li>
            <li><a href="#"> bibliotecainfantilliteragiando@gmail.com</a></li>
          </ul>
        </div>
        <!--Linea vertical del Footer-->
        <div class="vertical-line"></div>
        <!--Columna 2 del Footer-->
        <div class="column2">
          <h1>Literagiando</h1>
          <ul>
            <li><label href="#">Biblioteca Literagiando,</label></li>
            <li><label href="#">literagiando nuestros cuentos</label></li>
            <li><label href="#">vamos contando.</label></li>
          </ul>
        </div><br>
      </div>
      <!--Linea horizontal del Footer-->
      <div class="line"></div>
       <!--Texto final del Footer-->
      <div class="text2">
        <small>&copy; 2023 <b>Literagiando</b> | Desarrollado por Semillero TecnoSoft.</small>
    </div>
    </div>
</footer>

<!--Enlazace para obtener los java script-->
<script src="script.js"></script>

</body>
</html>
