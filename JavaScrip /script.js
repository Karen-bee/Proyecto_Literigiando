document.getElementById('check').addEventListener('change', function() {
    var menu = document.querySelector('.menu');
    if (this.checked) {
      menu.classList.add('active');
    } else {
      menu.classList.remove('active');
    }
  });

  // Obtener referencias a los elementos
const nav = document.querySelector('nav');
const header = document.querySelector('header');

// Función para cambiar la altura de la barra de navegación y el encabezado
function cambiarAltura(elemento, altura) {
  elemento.style.height = altura + '135px';
}

// Evento del botón para cambiar la altura
const botonCambiarAltura = document.querySelector('#botonCambiarAltura');
botonCambiarAltura.addEventListener('click', () => {
  const nuevaAltura = parseInt(prompt('Ingrese la nueva altura:'));
  
  if (!isNaN(nuevaAltura)) {
    cambiarAltura(nav, nuevaAltura);
    cambiarAltura(header, nuevaAltura * 0.5);
  }
});


if (document.querySelector('#container-slider')) {
  setInterval(function() {
    funcionEjecutar("siguiente");
  }, 5000);
}

//------------------------------ LIST SLIDER -------------------------

if (document.querySelector('.listslider')) {
  let links = document.querySelectorAll(".listslider li a");
  links.forEach(function(link) {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      let item = this.getAttribute('itlist');
      let arrItem = item.split("_");
      funcionEjecutar(arrItem[1]);
      return false;
    });
  });
}

function funcionEjecutar(side) {
  let parentTarget = document.getElementById('slider');
  let elements = parentTarget.getElementsByTagName('li');
  let curElement, siguienteElement;
  for (var i = 0; i < elements.length; i++) {
    if (elements[i].style.opacity == 1) {
      curElement = i;
      break;
    }
  }
  if (side == 'anterior' || side == 'siguiente') {
    if (side == "anterior") {
      siguienteElement = (curElement == 0) ? elements.length - 1 : curElement - 1;
    } else {
      siguienteElement = (curElement == elements.length - 1) ? 0 : curElement + 1;
    }
  } else {
    siguienteElement = parseInt(side);
    side = (curElement > siguienteElement) ? 'anterior' : 'siguiente';
  }
  
  //PUNTOS INFERIORES
  let elementSel = document.getElementsByClassName("listslider")[0].getElementsByTagName("a");
  elementSel[curElement].classList.remove("item-select-slid");
  elementSel[siguienteElement].classList.add("item-select-slid");
  
  elements[curElement].style.opacity = 0;
  elements[curElement].style.zIndex = 0;
  elements[siguienteElement].style.opacity = 1;
  elements[siguienteElement].style.zIndex = 1;
}

      
$(".step").click( function() {
    $(this).addClass("active").prevAll().addClass("active");
    $(this).nextAll().removeClass("active");
  });

  $(".step01").click( function() {
    $("#line-progress").css("width", "10%");
    $(".discovery").addClass("active").siblings().removeClass("active");
  });

  $(".step02").click( function() {
    $("#line-progress").css("width", "50%");
    $(".strategy").addClass("active").siblings().removeClass("active");
  });

  $(".step03").click( function() {
    $("#line-progress").css("width", "100%");
    $(".creative").addClass("active").siblings().removeClass("active");
  });
