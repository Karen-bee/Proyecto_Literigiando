<?php
// 1. Incluir el archivo de conexión
include '../Models/conexion.php';

// 2. Realizar la consulta SQL para seleccionar valores distintos de 'nombrerol'
$sql = "SELECT p.id_pagina, p.nombre_pagina 
        FROM pagina AS p
        INNER JOIN asignacion_paginas AS ap ON p.id_pagina = ap.idpagina";
        
$result = $conexion->query($sql);

// 3. Imprimir solo las opciones del select
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id_pagina = $row["id_pagina"];
        $nombre_pagina = $row["nombre_pagina"];
        echo '<option value="' . $id_pagina . '">' . $nombre_pagina . '</option>';
    }
} else {
    echo '<option value="0">No hay resultados</option>';
}

// 4. Cerrar la conexión a la base de datos (si es necesario)
$conexion->close();
