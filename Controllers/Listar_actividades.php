
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
        echo "<td class='col-sm-1 justificarIcon table-orange'>
        <button class='tooltiptext form-control' data-toggle='tooltip' title='Estados'><i class='bi bi-x-circle-fill'></i></button>
        <button class='tooltiptext form-control' data-toggle='tooltip' title='Agregar' data-bs-toggle='modal' data-bs-target='#pop_agregar'><i class='bi bi-plus-square-fill'></i></button>
        <button class='tooltiptext form-control' data-toggle='tooltip' title='Actualizar' data-bs-toggle='modal' data-bs-target='#staticBackdrop'><i class='bi bi-pencil-square'></i></button>
        </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay resultados.</td></tr>";
}
