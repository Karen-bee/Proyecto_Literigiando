<?php
// 1. Invocar conexión
include '../Models/conexion.php';

$sql = "SELECT DISTINCT ap.estado AS estado , ap.id_asignacion AS idpagina, ru.nombrerol 
AS nombrerol, p.nombre_pagina AS nombrepagina FROM asignacion_paginas 
AS ap INNER JOIN rol_usuario AS ru ON ap.idrolusuario = ru.idrolusuario
 INNER JOIN pagina AS p ON ap.idpagina = p.id_pagina";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $estado = ($row["estado"] == 1) ? "Actividad en Curso" : "Desactivada";
        echo "<tr>";
        echo "<td class='table-orange'>" . $row["idpagina"] . "</td>";
        echo "<td class='table-orange'>" . $row["nombrerol"] . "</td>";
        echo "<td class='table-orange'>" . $row["nombrepagina"] . "</td>";
        echo "<td class='table-orange'>" .  $estado . "</td>";
        echo "<td class='col-sm-1 justificarIcon table-orange'>";

        // Botón para cambiar el estado
        echo "<button class='tooltiptext form-control cambiar-estado' title='Estados' data-id_asignacion=\"" . $row['idpagina'] . "\" data-estado=\"" . $row['estado'] . "\">
        <i class='bi " . ($row['estado'] == 1 ? 'bi-check-circle-fill' : 'bi-x-circle-fill') . "'></i>
        </button>";

        // Botón para editar
        echo "<button class='tooltiptext form-control editar-button' data-toggle='tooltip' title='Actualizar' data-bs-toggle='modal' data-bs-target='#staticBackdrop' 
        data-idpagina='" . $row['idpagina'] . "' 
        data-nombrerol='" . $row['nombrerol'] . "' 
        data-nombrepagina='" . $row['nombrepagina'] . "' 
        data-estado='" . $row['estado'] . "'>
        <i class='bi bi-pencil-square'></i>
        </button>";

        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay resultados.</td></tr>";
}


?>

<script>
    function cambiarEstado(id_asignacion, estadoActual) {
        // Envía una solicitud POST al servidor
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../Controllers/desactivar_actividad.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    // Muestra la respuesta del servidor
                    alert(xhr.responseText);
                    // Recarga la página después de mostrar la alerta
                    location.reload();
                    // Puedes realizar otras acciones después de cambiar el estado
                } else {
                    // Manejar errores si es necesario
                }
            }
        };

        // Envía los datos al servidor
        xhr.send("id_asignacion=" + id_asignacion + "&estado=" + estadoActual);
    }

    document.addEventListener("DOMContentLoaded", function() {
        // Agrega un event listener al documento para manejar clics en cualquier parte del documento
        document.addEventListener('click', function(event) {
            // Verifica si el clic proviene de un botón con la clase 'cambiar-estado'
            if (event.target.classList.contains('cambiar-estado')) {
                // Obtiene el ID de usuario y el estado actual desde los atributos de datos
                var id_asignacion = event.target.getAttribute('data-id_asignacion');
                var estadoActual = event.target.getAttribute('data-estado');

                // Llama a la función cambiarEstado
                cambiarEstado(id_asignacion, estadoActual);
            }
        });

        // ...
    });

    // MODAL EDITAR 
    document.addEventListener("DOMContentLoaded", function() {
        document.addEventListener('click', function(event) {
            // Verifica si el clic proviene de un botón con la clase 'editar-button'
            if (event.target.classList.contains('editar-button')) {
                // Obtiene el ID de usuario desde el atributo data
                var id_asignacion = event.target.getAttribute('data-idpagina');
                var estado = event.target.getAttribute('data-estado');

                // Verifica si el estado es 0 (desactivado)
                if (estado == 0) {
                    // Muestra un mensaje de alerta
                    alert("No puedes editar un elemento desactivado.");
                    // Recarga la página después de mostrar la alerta
                    window.location.reload();
                } else {
                    // Realiza una solicitud AJAX para obtener detalles del usuario
                    var xhr = new XMLHttpRequest();
                    xhr.open("GET", "../Controllers/ObtenerDetalle_Actividad.php?id_asignacion=" + id_asignacion, true);
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            // Parsea la respuesta JSON
                            var userDetails = JSON.parse(xhr.responseText);
                            console.log(userDetails);

                            // Llena los campos del modal con los detalles del usuario
                            document.getElementById('select_rol').value = userDetails.idrolusuario;
                            document.getElementById('select_estado').value = userDetails.estado;
                            document.getElementById('select_actividades').value = userDetails.id_asignacion;

                            // Configura el campo oculto de ID de usuario en el formulario
                            document.getElementById('actividades').value = userDetails.id_asignacion;
                        }
                    };
                    xhr.send();
                }
            }
        });
    });
</script>