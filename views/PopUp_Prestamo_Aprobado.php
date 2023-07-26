<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewp	ort" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="estilos.css">
	<title>Carrito de prestamo</title>
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
	<div class="contenedor">
		<article>
			<br>

			<h1>Literagiando</h1>
			<button id="btn-abrir-popup" class="btn-abrir-popup">Finalizar Prestamo</button>
			<p>
				Literagiando.
			</p>
			<p>
				Desarrollo de la tematica
				Hecho
				--Encabezado--C
				cuerpo
			</p>
			<p>
				Prestamo aprobado.
			</p>
		</article>

		<div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h3>¡Felicidades!</h3>
				<h4>Tu prestamo ha sido aprobado.</h4>
				<h6>Literagiando te espera de regreso.</h6>
				<form action="">
					<div class="contenedor-inputs">
						<img src="img/Prestamo_Aprobado.jpg" alt="Imagen de prestamos aprobado">
					</div>
					<input type="submit" class="btn-submit" value="Inicio">
				</form>
			</div>
		</div>
	</div>
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


	<script src="popup.js"></script>
</body>
</html>
