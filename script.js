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
    const imgObje = elemento.getAttribute('data-imgRec');


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
      <div class='imgObj'> ${imgObje}</div>
      <div class='imgObj'> ${img}</div>
      <h4 class='tittleObj'>${title}</h4>
      <p class='contentObj'>${content}</p>
     
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