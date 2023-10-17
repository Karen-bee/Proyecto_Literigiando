<?php 
                        $sql_opciones = $conexion ->query("SELECT p.nombre_pagina, p.url_pagina, p.icono FROM 
                        asignacion_paginas AS AP INNER JOIN pagina AS P ON AP.idpagina = p.id_pagina 
                        INNER JOIN rol_usuario AS R ON AP.idrolusuario = R.idrolusuario WHERE R.idrolusuario = $rol");
                        while($resultado5 = $sql_opciones -> fetch_assoc()){
                        ?>
                        <li>
                            <a href="../Views/<?php echo $resultado5["url_pagina"]?>">
                                <i class="<?php echo $resultado5["icono"] ?>"></i>
                                <span class="links_name"><?php echo $resultado5["nombre_pagina"] ?></span>
                            </a>
                                <span class="tooltip"><?php echo $resultado5["nombre_pagina"] ?></span>
                        </li>
                    <?php 
                        }
                    ?>

                    

