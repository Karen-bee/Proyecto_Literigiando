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
        echo "<button class='tooltiptext form-control ' data-toggle='tooltip' title='Estados'><i class='bi bi-x-circle-fill'></i></button>";
        echo "<button class='tooltiptext form-control ' data-toggle='tooltip' title='Agregar' data-bs-toggle='modal' data-bs-target='#pop_agregar'><i class='bi bi-plus-square-fill'></i></button>";
        // Aquí agregamos el atributo data-id con el valor del ID de la fila
        echo "<button class='tooltiptext form-control editar-button' data-id='" . $row["idpagina"] . "' data-rol='" . $row["nombrerol"] . "' data-toggle='tooltip' title='Actualizar' data-bs-toggle='modal' data-bs-target='#staticBackdrop'><i class='bi bi-pencil-square'></i></button>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay resultados.</td></tr>";
}


?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Selecciona todos los botones de edición
        var editButtons = document.querySelectorAll(".editar-button");

        // Agrega un evento click a cada botón de edición
        editButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                // Captura el valor del atributo data-id
                var id = button.getAttribute("data-id");
                var rol = button.getAttribute("data-rol"); // Obtén el valor de data-rol

                //document.write(rol);

                // Obtén los valores de la fila correspondiente
                var actividad = button.parentElement.parentElement.querySelector(".table-orange:nth-child(3)").textContent;
                //var rol = button.parentElement.parentElement.querySelector(".table-orange:nth-child(2)").textContent;

                // Rellena los campos del formulario en el popup con la información correspondiente
                var txtCodigo = document.getElementById("txt_codigo");
                var txtActividad = document.getElementById("txt_Actividad");
                var txtRol = document.getElementsByName("select_rol");
                var txtEstado = document.getElementById("txt_estado");

                // Asigna los valores a los campos del formulario
                txtCodigo.value = id;
                txtActividad.value = actividad;
                txtRol.value = rol.toString;
            });
        });


    });
</script>