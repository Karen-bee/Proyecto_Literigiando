<!DOCTYPE html>
<html lang="en">
<head>
    <!--Meta sirve para tener una pagina web responsive-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Header/Footer/General literagiando</title>
    <!--Enlazae para obtener estilos-->
    <link rel="stylesheet" href="estilo.css">
     <!--Iconos-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="rectangulo">  
        <img src="img/Logo_Lite.png" alt="" class="logolite">
        <img src="img/Logo_Uni.png" alt="" class="logouni">
      </div>


 <!--Encabezado-->
 <header>
  <nav class="navbar">
    <div class="logo">
      <a href="#"><i class="fas fa-home"></i></a>
      <a href="#"><i class="fas fa-user"></i></a>
    </div>
    <input type="checkbox" id="check">
    <label for="check" class="mostrar-menu">&#8801</label>
    <ul class="menu">
      <li><a href="#">Sobre nosotros</a></li>
      <li><a href="#">Noticias</a></li>
      <li><a href="#">Eventos</a></li>
      <li><a href="#">Blog</a></li>
      <li><label for="#">Inicio Sesion</label></li>
      <label for="check" class="esconder-menu">&#215</label>
    </ul>
  </nav>
</header>


 <!--Cuerpo de la pagina-->
<main>
	<div class="cuerpo">
		<article>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce bibendum, tortor ut commodo elementum, felis dui pharetra arcu, id vulputate neque orci ut velit. Vestibulum facilisis mauris sapien, ut rutrum lacus sollicitudin eu. Curabitur odio ligula, eleifend sodales nisl et, feugiat mattis sapien. Nulla commodo gravida est a lacinia. Fusce cursus eleifend dui at tincidunt. Aliquam eu metus odio. Morbi metus erat, mattis sit amet ultricies ullamcorper, dignissim nec ante. Nulla congue purus quis interdum tincidunt. Nam at libero leo. Nunc dignissim auctor turpis sit amet ornare. Duis vulputate faucibus sem id dignissim. Vivamus sed orci odio. Maecenas nec dapibus mauris. Pellentesque a massa et lectus volutpat gravida eget id neque.
			</p>
			<p>
				Nunc eleifend venenatis est vel finibus. Mauris vel arcu sit amet risus vulputate gravida a pulvinar felis. In nulla turpis, dignissim ac orci sit amet, suscipit luctus eros. Ut luctus blandit mi. Donec lacinia vehicula fringilla. Vivamus nec ligula ut dui vestibulum iaculis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ac sem in mi pulvinar eleifend vitae in sapien. Mauris vel dui nibh. Maecenas fermentum ante cursus nisi tincidunt mattis. Phasellus quis sapien sollicitudin, tempor diam nec, ullamcorper sapien.
			</p>
			<p>
				Fusce tempor arcu nec ante congue, nec tempor ipsum eleifend. Pellentesque consequat ac ipsum et euismod. Donec posuere massa in felis scelerisque feugiat. Mauris id arcu enim. Curabitur pulvinar elit nec turpis mollis tincidunt. Curabitur lectus elit, scelerisque nec facilisis ac, semper vel libero. Pellentesque efficitur velit nunc, eu vehicula est pretium quis. Nunc urna tellus, tempus vitae eros eget, efficitur molestie lorem. Phasellus ut facilisis libero. Mauris laoreet libero diam, a tempor risus pharetra eget. Mauris nibh urna, accumsan vel accumsan euismod, lobortis nec lectus. Mauris elementum urna vel feugiat ultrices. Nulla sodales nisl sit amet ante fermentum, sit amet porttitor diam sollicitudin. Pellentesque ut pellentesque turpis. In rutrum augue dui, vel molestie ipsum pulvinar facilisis.
			</p>
		</article>
</main>

 <!--Pie de pagina-->
<footer>
    <div class="contenedor">

        <img class="logo1" src="img/Logo_Universidad.png" alt="">
        <img class="logo2" src="img/Logo_Literagiando.png" alt="">
      </div>
      <div class="social-media">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-whatsapp"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-youtube"></a>
      </div>
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
        <div class="vertical-line"></div>
        <div class="column2">
          <h1>Literagiando</h1>
          <ul>
            <li><label href="#">Biblioteca Literagiando,</label></li>
            <li><label href="#">literagiando nuestros cuentos</label></li>
            <li><label href="#">vamos contando.</label></li>
          </ul>
        </div><br>
      </div>
      <div class="line"></div>
      <div class="text2">
        <small>&copy; 2023 <b>Literagiando</b> | Desarrollado por Semillero TecnoSoft.</small>
    </div>
    </div>
</footer>
<script src="script.js"></script>
</body>
</html>
