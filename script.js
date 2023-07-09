
// FUNCION TIMELINE NOSOTROS

const timelineItems = document.getElementsByClassName('timeline-content');

// Asignar un evento de clic a cada elemento
for (let i = 0; i < timelineItems.length; i++) {
    timelineItems[i].addEventListener('click', function () {

        // Obtener el título y el contenido del elemento seleccionado
        const title = this.getAttribute('data-original-title');
        const content = this.getAttribute('data-content');
        const img = this.getAttribute('data-img');
        const imgnino = this.getAttribute('data-nino');
        const imgnino1 = this.getAttribute('data-nino1');
        const imgnino2 = this.getAttribute('data-nino2');

        // Actualizar el contenido del div 'selected-info'
        const selectedInfoDiv = document.getElementById('circle');
        selectedInfoDiv.innerHTML = `
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

    });
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