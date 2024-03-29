function mostrarInformacion(seleccion, elemento) {

  var historiaInfo = document.getElementById('historia-info');
  var objetivosInfo = document.getElementById('objetivos-info');

  // Restablece el contenido de ambos elementos
  historiaInfo.innerHTML = '';
  objetivosInfo.innerHTML = '';

  // Obtener info historia
  const title = elemento.getAttribute('data-original-title');
  const content = elemento.getAttribute('data-content');
  const img = elemento.getAttribute('data-img');
  const imgnino = elemento.getAttribute('data-nino');
  const imgnino1 = elemento.getAttribute('data-nino1');
  const imgnino2 = elemento.getAttribute('data-nino2');

  // Obtener info Objetivos
  const SecuTittle = elemento.getAttribute('data-secun-title');
  const SecunDescrip = elemento.getAttribute('data-secun-descr');

  // Obtener info Servicios 

  const Item1 = elemento.getAttribute('data-contentItem1');
  const Item2 = elemento.getAttribute('data-contentItem2');
  const Item3 = elemento.getAttribute('data-contentItem3');
  const Item4 = elemento.getAttribute('data-contentItem4');

  const dataInfoItem2 = elemento.getAttribute('data-infoItem1');
  const dataInfoItem3 = elemento.getAttribute('data-infoItem2');
  const dataInfoItem4 = elemento.getAttribute('data-infoItem3');
  const dataInfoItem5 = elemento.getAttribute('data-infoItem4');


  const imgItem1 = elemento.getAttribute('data-imgItem1');
  const imgItem2 = elemento.getAttribute('data-imgItem2');
  const imgItem3 = elemento.getAttribute('data-imgItem3');
  const imgItem4 = elemento.getAttribute('data-imgItem4');


  // INFO GENEROS LITERARIOS 

  const titlegeneros = elemento.getAttribute('data-titlegenero');
  const titlegeneros2 = elemento.getAttribute('data-titlegenero2');
  const titlegeneros3 = elemento.getAttribute('data-titlegenero3');
  const titlegeneros4 = elemento.getAttribute('data-titlegenero4');
  const titlegeneros5 = elemento.getAttribute('data-titlegenero5');
  const titlegeneros6 = elemento.getAttribute('data-titlegenero6');
  const titlegeneros7 = elemento.getAttribute('data-titlegenero7');


  const infogeneros = elemento.getAttribute('data-infogenero');
  const infogeneros2 = elemento.getAttribute('data-infogenero2');
  const infogeneros3 = elemento.getAttribute('data-infogenero3');
  const infogeneros4 = elemento.getAttribute('data-infogenero4');
  const infogeneros5 = elemento.getAttribute('data-infogenero5');
  const infogeneros6 = elemento.getAttribute('data-infogenero6');
  const infogeneros7 = elemento.getAttribute('data-infogenero7');



  // INFO PROFESORAS

  const CIRCLEPRO = elemento.getAttribute('data-img');

  const imgpro = elemento.getAttribute('data-img-prof');
  const imgpro2 = elemento.getAttribute('data-img-prof2');
  const imgpro3 = elemento.getAttribute('data-img-prof3');


  const NombrePro = elemento.getAttribute('data-name');
  const NombrePro2 = elemento.getAttribute('data-name2');
  const NombrePro3 = elemento.getAttribute('data-name3');


  const TItleNombrePro = elemento.getAttribute('data-titleName');
  const Facul = elemento.getAttribute('data-facul');











  // Comprueba la selección y muestra la información correspondiente
  if (seleccion === 'historia') {
    historiaInfo.innerHTML = `
        ${img}
        <h4 class='tittle'>${title}</h4>
        <p class='content'>${content}</p>
        <div class="posionImg">
          <div class="cuadro-negro">
            <div class="image-container">
              ${imgnino}
            </div>
          </div>
          <div class="cuadro-negro2">
            <div class="image-container2">
              ${imgnino1}
            </div>
          </div>
          <div class="cuadro-negro3">
            <div class="image-container3">
              ${imgnino2}
            </div>
          </div>
        </div>
      `;
  } else if (seleccion === 'objetivos') {
    objetivosInfo.innerHTML = `
    <div class="fondo">
      <div class='fondoobj'>
      <div class="mancha"></div>
      </div>
      <div class='imgObj'> ${img}</div>
      <h4 class='tittleObj'>${title}</h4>
      <p class='contentObj'>${content}</p>
     <div class='img2' >${img}</div>
     <h4 class='SecundObj'>${SecuTittle}</h4>
     <div class='fondoobj2'>
     <div class="mancha2"></div>
     </div>
     <p class='contentObj2'>${SecunDescrip}</p>
     </div>
    `;
  } else if (seleccion === 'servicios') {
    objetivosInfo.innerHTML = `
    <blockquote class="styled-quote">
    <h4 class='titleservicios'>${title}</h4>
    <div class="straight-line"></div>
    </blockquote>
   
    <div class='fondo1'>
    <div class='imgCuadrado' >${img}</div>
    <div class="square"></div>
    <div class='textitem1'>${Item1}</div>
    <div class='straight-lineItem1'></div>
    <div class='dataItem1'>${dataInfoItem2}</div>
    <div class='imgItem1'>${imgItem1}</div>

    <div class='imgCuadrado2' >${img}</div>
    <div class="square2"></div>
    <div class='textitem2'>${Item2}</div>
    <div class='straight-lineItem2'></div>
    <div class='dataItem2'>${dataInfoItem3}</div>
    <div class='imgItem2'>${imgItem2}</div>

    <div class='imgCuadrado3'>${img}</div>
    <div class="square3"></div>
    <div class='textitem3'>${Item3}</div>
    <div class='straight-lineItem3'></div>
    <div class='dataItem3'>${dataInfoItem4}</div>
    <div class='imgItem3'>${imgItem3}</div>

    <div class='imgCuadrado4'>${img}</div>
    <div class="square4"></div>
    <div class='textitem4'>${Item4}</div>
    <div class='straight-lineItem4'></div>
    <div class='dataItem4'>${dataInfoItem5}</div>
    <div class='imgItem4'>${imgItem4}</div>
</div>
    `;
  } else if (seleccion === 'Generos') {
    objetivosInfo.innerHTML = `
    <div class="cloud">
    <h4 class='titleGeneros'>${title}</h4>
  </div>
  <div class='lineaGeneros'></div>
  <div class="linea-recta"></div>
  <div class="linea-recta2"></div>
  <div class="cuadradogen"></div>
  <h4 class="titlegenero">${titlegeneros}</h4>
  <div class="straight-cuadrado"></div>
  <div class="infogenero">${infogeneros}</div>

  <div class="cuadradogen2"></div>
  <h4 class="titlegenero2">${titlegeneros2}</h4>
  <div class="straight-cuadrado2"></div>
  <div class="infogenero2">${infogeneros2}</div>


  <div class="cuadradogen3"></div>
  <h4 class="titlegenero3">${titlegeneros3}</h4>
  <div class="straight-cuadrado3"></div>
  <div class="infogenero3">${infogeneros3}</div>

  <div class="cuadradogen4"></div>
  <h4 class="titlegenero4">${titlegeneros4}</h4>
  <div class="straight-cuadrado4"></div>
  <div class="infogenero4">${infogeneros4}</div>

  <div class="cuadradogen5"></div>
  <h4 class="titlegenero5">${titlegeneros5}</h4>
  <div class="straight-cuadrado5"></div>
  <div class="infogenero5">${infogeneros5}</div>


  <div class="cuadradogen6"></div>
  <h4 class="titlegenero6">${titlegeneros6}</h4>
  <div class="straight-cuadrado6"></div>
  <div class="infogenero6">${infogeneros6}</div>

  <div class="cuadradogen7"></div>
  <h4 class="titlegenero7">${titlegeneros7}</h4>
  <div class="straight-cuadrado7"></div>
  <div class="infogenero7">${infogeneros7}</div>


    `;
  } else if (seleccion === 'profesoras') {
    objetivosInfo.innerHTML = `
    <div class="cuadradoProfe"></div>
    <h4 class='titleProfe'>${title}</h4>
    <div class="cuadradoImg"></div>

    <div class="circlepro">${CIRCLEPRO}</div>
    <div class="imagen-circular">${imgpro}</div>
    <div class="figura-ovalada"></div>
    <div class="NombrePro">${NombrePro}</div>
    <div class="TItleNombrePro">${TItleNombrePro}</div>
    <div class="Facul">${Facul}</div>


    <div class="circlepro2">${CIRCLEPRO}</div>
    <div class="imagen-circular2">${imgpro2}</div>
    <div class="figura-ovalada2"></div>
    <div class="NombrePro2">${NombrePro2}</div>
    <div class="TItleNombrePro2">${TItleNombrePro}</div>
    <div class="Facul2">${Facul}</div>

    <div class="circlepro3">${CIRCLEPRO}</div>
    <div class="imagen-circular3">${imgpro3}</div>
    <div class="figura-ovalada3"></div>
    <div class="NombrePro3">${NombrePro3}</div>
    <div class="TItleNombrePro3">${TItleNombrePro}</div>
    <div class="Facul3">${Facul}</div>


    `;

  }
}




// FUNCION ACTIVAR TIMELINE NOSOTROS 

// Obtener todos los elementos con la clase "timeline-step"
const timelineSteps = document.querySelectorAll('.timeline-step');

// Iterar sobre cada clase "timeline-step"
timelineSteps.forEach((step) => {
  // Agregar un event listener al hacer clic en la clase "timeline-step"
  step.addEventListener('click', () => {
    // Remover la clase "active" de todas las clases "timeline-step"
    timelineSteps.forEach((step) => {
      step.querySelector('.inner-circle').classList.remove('active');
    });

    // Agregar la clase "active" a la clase "timeline-step" seleccionada
    step.querySelector('.inner-circle').classList.add('active');
  });
});


// PRUEBA DASBOARD 

$(function () {
  $('[data-toggle="tooltip"]').tooltip();
  $(".side-nav .collapse").on("hide.bs.collapse", function () {
    $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
  });
  $('.side-nav .collapse').on("show.bs.collapse", function () {
    $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");
  });
})


// NO PERMITIR CARACTERES ESPECIALES INPUT TEXT

$(document).ready(function () {
  // Seleccionamos el campo de entrada por su ID
  var inputField = $("#txt_telefono");
  var inputField2 = $("#txt_numeroDocumento");

  // Usamos el evento "input" para detectar cambios en el campo
  inputField.on("input", function () {
    // Obtenemos el valor actual del campo
    var inputValue = inputField.val();

    // Reemplazamos cualquier caracter no numérico con una cadena vacía
    var cleanedValue = inputValue.replace(/[^0-9]/g, "");

    // Actualizamos el valor del campo con la versión limpia
    inputField.val(cleanedValue);
  });


  // Segunda opcion 

  // Usamos el evento "input" para detectar cambios en el campo
  inputField2.on("input", function () {
    // Obtenemos el valor actual del campo
    var inputValue2 = inputField2.val();

    // Reemplazamos cualquier caracter no numérico con una cadena vacía
    var cleanedValue2 = inputValue2.replace(/[^0-9]/g, "");

    // Actualizamos el valor del campo con la versión limpia
    inputField2.val(cleanedValue2);
  });
});


// CLAVE VERIFICACION 

$(document).ready(function () {
  $('#txt_pass').on('input', function () {
    var password = $(this).val();
    var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&+=!]).{8,}$/;

    if (regex.test(password)) {
      $('#message').text('Contraseña válida').css('color', 'green');
    } else {
      $('#message').text('la contraseña deberá tener una longitud minima de 8 caracteres, entre ellos mayusculas, minúsculas, números y carateres especioales (@$#?¿%_)').css('color', 'red');
    }
  });
});

// REPCAPHA 

