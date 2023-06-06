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
        <img  src="./Imagenes/circulo.jpeg" alt="Niños" width="134px" height="320px">
      <h4 class='tittle'>${title}</h4>
      <p class='content'>${content}</p>
    `;
    });
}