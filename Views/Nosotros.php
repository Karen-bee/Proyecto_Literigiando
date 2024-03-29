<!doctype html>
<html lang="en">


<!-- Header -->

<?php
include("../Views/Header.php")
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@700&display=swap" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="../Resources/Css/style.css">

    <!-- jquery -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <title>Literagiando</title>
</head>

<body style="overflow-x: hidden;">
    <!-- BANNER PRINCIPAL -->
    <div class="dj-banner">
        <div class="dj-bg">
            <img src="../Storage/Imagenes/jardin.jpg" alt="Niños" width="1355px" height="320px" style=" opacity: 51%;">
            <div class="dj-text">
                <div class="cuadrobajo">
                    <div class="cuadradoNosotros">Sobre Nosotros: Literagiando</div>
                </div>
            </div>
        </div>
    </div>

    <!-- TIMELINE NOSOTROS -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                    <div class="timeline-step">
                        <div class="timeline-content" onclick="mostrarInformacion('historia', this)" data-toggle="popover" data-trigger="hover" data-placement="top" title="Historia" data-content="El proyecto de desarrollo social Literagiando, se inicio con el trabajo de mas de 6 años, se ha venido consolidando como un medio de formación y promoción, Literagiando ha visitado mas de 10 instituciones educativas de la ciudad de Bogotá, ofreciendo experiencias para el aprendizaje de niños, niñas y sus cuidadores" data-original-title="Historia" data-img="<img  src='../Storage/Imagenes/circulo.jpeg' alt='Niños' width='267px' height='240px'>" data-nino="<img src='../Storage/Imagenes/niños.jpeg' alt='Descripción de la imagen' width='270px' height='213px'>" data-nino1="<img src='../Storage/Imagenes/niños.jpeg' alt='Descripción de la imagen' class='imagetam'  width='270px' height='213px'>" data-nino2="<img src='../Storage/Imagenes/niños.jpeg' alt='Descripción de la imagen' class='imagetam'  width='270px' height='213px'>">
                            <div class="inner-circle"></div>
                            <p class="parrafo">Historia</p>
                        </div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-content" onclick="mostrarInformacion('objetivos', this)" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="Generar espacios para el desarrollo de las habilidades comunicativas, a través de la creación de ambientes lúdico – pedagógicos, promoción de hábitos en torno a la lectura y la escritura y animación a la lectura desde la biblioteca fija e itinerante y los espacios de difusión que posee el proyecto." data-original-title="Objetivo Principal" data-img="<img  src='../Storage/Imagenes/circulo.jpeg' alt='Niños' width='267px' height='240px'>" data-secun-title="Objetivos Especificos" data-secun-descr="- Promover en la comunidad infantil Bonaventuriana y de la Localidad de Usaquén el hábito por la lectura y la escritura de manera armónica.
- Valorar, difundir y publicar las producciones creativas de los maestros en formación en beneficio de los aprendizajes de los niños.
- Transformar las concepciones de la lectura y la escritura como rutina a un hábito con sentido.
- Fomentar el trabajo que desde el Programa de la Licenciatura en Educación Infantil se realiza a través del aporte a la educación de los niños y niñas.">
                            <div class="inner-circle"></div>
                            <p class="parrafo">Objetivos</p>
                        </div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-content" onclick="mostrarInformacion('servicios', this)" data-toggle="popover" data-trigger="hover" data-img="<img  src='../Storage/Imagenes/circulo.jpeg' alt='Niños' width='150px' height='150px'>" data-placement="top" title="" data-contentItem1="Material" data-contentItem2="Referencias" data-contentItem3="Apoyo" data-contentItem4="Estudiantes" data-infoItem1="Se realizan préstamos de material bibliográfico" data-infoItem2="Se mostrara la ficha tecnica o bibliografica del material" data-infoItem3="Servir como medio de apoyo a la universidad " data-infoItem4="Apoyo en el proceso estudiantil de niños, niñas y cuidadores" data-imgItem1="<img  src='../Storage/Imagenes/Imagen4.jpeg' alt='Niños' width='100px' height='100px'>" data-imgItem2="<img  src='../Storage/Imagenes/Imagen3.jpeg' alt='Niños' width='100px' height='100px'>" data-imgItem3="<img  src='../Storage/Imagenes/Imagen1.jpeg' alt='Niños' width='100px' height='100px'>" data-imgItem4="<img  src='../Storage/Imagenes/Imagen2.jpeg' alt='Niños' width='100px' height='100px'>" data-original-title="Servicios">
                            <div class="inner-circle"></div>
                            <p class="parrafo">Servicios</p>
                        </div>
                    </div>
                    <div class="timeline-step">
                        <div class="timeline-content" onclick="mostrarInformacion('Generos', this)" data-toggle="popover" data-titlegenero="Cuentos" data-titlegenero2="Audio Libros" data-titlegenero3="Novelas" data-titlegenero4="Relatos" data-titlegenero5="Historico" data-titlegenero6="Filosofico" data-titlegenero7="Mitología" data-infogenero="Narracion breve, oral o escrita, historias de ficcion" data-infogenero2="Grabacion de los contenidos de un libro" data-infogenero3="Narracion en prosa, extensa, historias de ficción" data-infogenero4="Cuento o narración corta, relatando un acontecimiento" data-infogenero5="Ofrece breves y sencillas historias de eventos reales" data-infogenero6="Es una narrativa sobre la curiosidad humana" data-infogenero7="Conjunto de mitos de una cultura o pueblo" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Generos Literarios">
                            <div class="inner-circle"></div>
                            <p class="parrafo">Géneros Literarios</p>
                        </div>
                    </div>
                    <div class="timeline-step mb-0">
                        <div class="timeline-content" onclick="mostrarInformacion('profesoras', this)" data-img="<img  src='../Storage/Imagenes/circulo-blanco.png' alt='Niños' width='300px' height='300px'>" data-img-prof="<img  src='../Storage/Imagenes/alberto.jpg' alt='Niños' width='300px' height='300px'>" data-img-prof3="<img  src='../Storage/Imagenes/gomez.jpg' alt='Niños' width='300px' height='300px'>" data-img-prof2="<img  src='../Storage/Imagenes/Acosta.jpg' alt='Niños' width='300px' height='300px'>" data-facul="Facultad de Humanidades y Ciencias de la Educación" data-titleName="Profesora" data-name="Diana Carolina Alberto Chapelles" data-name2="Diana Jennifer Acosta Pineda" data-name3="Pilar Tatiana Gomez Bohorquez" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Nuestro Equipo">
                            <div class="inner-circle"></div>
                            <p class="parrafo">Profesoras</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Linea -->

        <div class="hr"></div>


        <div id="historia-info" class="my-4">
            <!-- Contenido de la historia -->
        </div>

        <div id="objetivos-info" class="my-4">
            <!-- Contenido de los objetivos -->
        </div>



        <script src="../Resources/JavaScript/script.js"></script>



</body>

</html>