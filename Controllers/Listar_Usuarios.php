<?php
// 1. Invocar conexión
include '../Models/conexion.php';

$sql = "SELECT DISTINCT p.idusuario, p.idtipodedocumento, p.documento_usuario, p.nombrecompleto_usuario,p.idrolusuario , p.direccion_usuario, p.telefono_usuario, p.username, p.correo_usuario, p.estado, p.foto_usuario
FROM usuario as p
INNER JOIN rol_usuario as rol ON p.idrolusuario = rol.idrolusuario
INNER JOIN tipodocumento AS Td ON p.idtipodedocumento = Td.idtipodocumento";

// Preparar la consulta

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $estado = ($row["estado"] == 1) ? "Usuario Activado" : "Usuario Desactivado";
        $tipo_documento = ($row["idtipodedocumento"] == 1) ? "Cedula de Ciudadania" : (($row["idtipodedocumento"] == 2) ? "Tarjeta de Identidad" : (($row["idtipodedocumento"] == 3) ? "Cedula Extranjeria" :
            "Ese tipo de documento no existe"));

        $rol = ($row["idrolusuario"] == 1) ? "Administrador" : (($row["idrolusuario"] == 2) ? "Estudiante" :
            "Ese rol de usuario no existe");

        echo "<tr>";
        echo "<td class='table-orange'>" . $row["idusuario"] . "</td>";
        echo "<td class='table-orange'>" . $tipo_documento . "</td>";
        echo "<td class='table-orange'>" . $row["documento_usuario"] . "</td>";
        echo "<td class='table-orange'>" . $rol . "</td>";
        echo "<td class='table-orange'>" . $row["nombrecompleto_usuario"] . "</td>";
        echo "<td class='table-orange'>" . $row["direccion_usuario"] . "</td>";
        echo "<td class='table-orange'>" . $row["telefono_usuario"] . "</td>";
        echo "<td class='table-orange'>" . $row["username"] . "</td>";
        echo "<td class='table-orange'>" . $row["correo_usuario"] . "</td>";
        echo "<td class='table-orange'>" .  $estado . "</td>";
        echo "<td class='table-orange'><img src='" . $row["foto_usuario"] . "' alt='Foto de usuario' width='50' height='50'></td>";
        echo "<td class='col-sm-1 justificarIcon table-orange'>";

        // Botón para cambiar el estado
        echo "<button class='tooltiptext form-control cambiar-estado' title='Estados' data-idusuario=\"" . $row['idusuario'] . "\" data-estado=\"" . $row['estado'] . "\">
        <i class='bi " . ($row['estado'] == 1 ? 'bi-check-circle-fill' : 'bi-x-circle-fill') . "'></i>
        </button>";

        // Botón para editar
        echo "<button class='tooltiptext form-control editar-button' data-toggle='tooltip' title='Actualizar' data-bs-toggle='modal' data-bs-target='#staticBackdrop' 
        data-idusuario='" . $row['idusuario'] . "' 
        data-estado='" . $row['estado'] . "' 
        data-tipodocumento='" . $row['idtipodedocumento'] . "' 
        data-nombrecompleto='" . $row['nombrecompleto_usuario'] . "' 
        data-telefono='" . $row['telefono_usuario'] . "' 
        data-correo='" . $row['correo_usuario'] . "' 
        data-direccion='" . $row['direccion_usuario'] . "' 
        data-username='" . $row['username'] . "' 
        data-idrolusuario='" . $row['idrolusuario'] . "'>
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
    function cambiarEstado(idUsuario, estadoActual) {
        // Envía una solicitud POST al servidor
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../Controllers/desactivar_Usuario.php", true);
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
        xhr.send("idusuario=" + idUsuario + "&estado=" + estadoActual);
    }

    document.addEventListener("DOMContentLoaded", function() {
        // Agrega un event listener al documento para manejar clics en cualquier parte del documento
        document.addEventListener('click', function(event) {
            // Verifica si el clic proviene de un botón con la clase 'cambiar-estado'
            if (event.target.classList.contains('cambiar-estado')) {
                // Obtiene el ID de usuario y el estado actual desde los atributos de datos
                var idUsuario = event.target.getAttribute('data-idusuario');
                var estadoActual = event.target.getAttribute('data-estado');

                // Llama a la función cambiarEstado
                cambiarEstado(idUsuario, estadoActual);
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
                var idUsuario = event.target.getAttribute('data-idusuario');

                // Realiza una solicitud AJAX para obtener detalles del usuario
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "../Controllers/Obtener_Detalle_Usuario.php?idusuario=" + idUsuario, true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Parsea la respuesta JSON
                        var userDetails = JSON.parse(xhr.responseText);

                        // Llena los campos del modal con los detalles del usuario
                        document.getElementById('select_tipodocumento').value = userDetails.idtipodedocumento;
                        document.getElementById('txt_numero_documento').value = userDetails.documento_usuario;
                        document.getElementById('txt_nombre_completo').value = userDetails.nombrecompleto_usuario;
                        document.getElementById('txt_telefono').value = userDetails.telefono_usuario;
                        document.getElementById('txt_email').value = userDetails.correo_usuario;
                        document.getElementById('txt_direccion').value = userDetails.direccion_usuario;
                        document.getElementById('txt_usuario').value = userDetails.username;
                        document.getElementById('txt_tipoUsuario').value = userDetails.idrolusuario;

                        // Configura la URL de la imagen
                        var modalImage = document.getElementById('modalImage');
                        modalImage.src = userDetails.foto_usuario;
                        modalImage.alt = "Foto de usuario";

                        // Configura el campo oculto de ID de usuario en el formulario
                        document.getElementById('idUsuario').value = userDetails.idusuario;
                    }
                };
                xhr.send();
            }
        });
    });


    // CARGAR ARCHIVOS
    document.getElementById('modalImage').src = userDetails.foto_usuario;

    // Añade un event listener para detectar cambios en el campo de carga de archivos
    document.getElementById('txt_file').addEventListener('change', function(event) {
        var input = event.target;
        var reader = new FileReader();

        reader.onload = function() {
            document.getElementById('modalImage').src = reader.result;
        };

        reader.readAsDataURL(input.files[0]);
    });
</script>