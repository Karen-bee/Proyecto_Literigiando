
// FUNCION TIMELINE NOSOTROS

const timelineItems = document.getElementsByClassName('timeline-content');

// Asignar un evento de clic a cada elemento
for (let i = 0; i < timelineItems.length; i++) {
    timelineItems[i].addEventListener('click', function () {
        // Obtener el título y el contenido del elemento seleccionado
        const title = this.getAttribute('data-original-title');
        const content = this.getAttribute('data-content');

        // Actualizar el contenido del div 'selected-info'
        const selectedInfoDiv = document.getElementById('circle');
        selectedInfoDiv.innerHTML = `
       <img  src="./Imagenes/circulo.jpeg" alt="Niños" width="267px" height="240px">
      <h4 class='tittle'>${title}</h4>
      <p class='content'>${content}</p>
      <div class="posionImg">
      <div class="cuadro-negro">
      <div class="image-container">
      <img src="./Imagenes/niños.jpeg" alt="Descripción de la imagen" class="imagetam">
      </div>
      </div>
      <div class="cuadro-negro2">
      <div class="image-container2">
      <img src="./Imagenes/jardin.jpg" alt="Descripción de la imagen" class="imagetam" width="270px" height="213px">
      </div>
      </div>
      <div class="cuadro-negro3">
      <div class="image-container3">
      <img src="./Imagenes/jardin.jpg" alt="Descripción de la imagen" class="imagetam" width="270px" height="213px">
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