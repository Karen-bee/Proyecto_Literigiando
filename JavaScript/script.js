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



  const infogeneros = elemento.getAttribute('data-infogenero');
  const infogeneros2 = elemento.getAttribute('data-infogenero2');
  const infogeneros3 = elemento.getAttribute('data-infogenero3');
  const infogeneros4 = elemento.getAttribute('data-infogenero4');








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