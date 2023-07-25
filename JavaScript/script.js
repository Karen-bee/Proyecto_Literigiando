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
  const dataInfoItem2 = elemento.getAttribute('data-infoItem1');
  const imgItem1 = elemento.getAttribute('data-imgItem1');



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
    <div class='imgCuadrado' >${img}</div>
    <div class="square"></div>
    <div class='textitem1'>${Item1}</div>
    <div class='straight-lineItem1'></div>
    <div class='dataItem1'>${dataInfoItem2}</div>
    <div class='imgItem1'>${imgItem1}</div>
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