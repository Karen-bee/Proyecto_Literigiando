<!doctype html>
<html lang="en">

<?php include './layouts/header.php'; ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Estilos -->
    <link rel="stylesheet" href="../Resources/Css/style.css">

    <!-- BOOSTRAP -->
    <!-- JavaScript Bundle with Popper -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "searching": true, // Habilita la funcionalidad de búsqueda
                "paging": true, // Habilita la paginación
                // Otras opciones de configuración aquí
            });
        });


        // TIEMPO 
        const myTimeout = setTimeout(myGreeting, 5000);
        const myTimeout1 = setTimeout(myGreeting1, 5000);
        const myTimeout2 = setTimeout(myGreeting2, 5000);
        const myTimeout3 = setTimeout(myGreeting3, 5000);


        //FUNCIONES 

        // Buscar
        function myGreeting() {
            if (document.getElementById("example_filter") != null) {
                var strMessage1 = document.getElementById("example_filter");
                strMessage1.innerHTML = strMessage1.innerHTML
                    .replace('Search:', 'Buscar:');

            }
        }

        // Buscar
        function myGreeting1() {
            if (document.getElementById("example_info") != null) {
                var strMessage1 = document.getElementById("example_info");
                strMessage1.innerHTML = strMessage1.innerHTML
                    .replace('Showing 1 to 1 of 1 entries', 'Mostrando 3 a 1 de 1 entradas');

            }
        }

        // PREVIOUS

        function myGreeting2() {
            if (document.getElementById("example_previous") != null) {
                var strMessage1 = document.getElementById("example_previous");
                strMessage1.innerHTML = strMessage1.innerHTML
                    .replace('Previous', 'Previo');

            }
        }

        // SIGUIENTE 
        function myGreeting3() {
            if (document.getElementById("example_next") != null) {
                var strMessage1 = document.getElementById("example_next");
                strMessage1.innerHTML = strMessage1.innerHTML
                    .replace('Next', 'Siguiente');

            }
        }

        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })


        // Pop up 
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>


    <title>Literagiando</title>
</head>

<body>
    <div class="card">
        <div class="selectortwo ">
            <div class="lineaIzquierda">
                <div class="horizontal-line"></div>
                <div class="horizontal-linetwo"></div>
            </div>
            <h1 class="custom-headingUsu">Administrador de Actividades</h1>
            <div class="lineaderecha">
                <div class="horizontal-derecha2"></div>
                <div class="horizontal-derechatwo2"></div>
            </div>
            <button class='tooltiptext form-control-ms buttonAgregar' data-toggle='tooltip' title='Agregar' data-bs-toggle='modal' data-bs-target='#pop_agregar'>

                Agregar <i class='bi bi-plus-square-fill'></i>
            </button>
            <div class="table-responsive media2">
                <div style="overflow-x:auto;">
                    <table id="example" class="table table-hover table-striped table-bordered position table" style="width: 100%">
                        <thead>
                            <tr>
                                <th scope="col-sm-2" class="table-Gray">#</th>
                                <th scope="col-sm-2" class="table-Gray">Rol</th>
                                <th scope="col-sm-2" class="table-Gray">Actividad</th>
                                <th scope="col-sm-2" class="table-Gray">Estado</th>
                                <th scope="col-sm-2" class="table-Gray">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include '../Controllers/Listar_actividades.php'; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!-- POP UP EDITAR -->

    <div class="modal fade pop" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="custom-heading" id="staticBackdropLabel" style="margin-top:-16px;">Editar Actividades</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="../Controllers/UpdateTareas.php" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="hidden" id="actividades" name="actividades" value="">
                                </div>
                                <div class="form-group">
                                    <label for="txt_autor" class="letraform">Tipo de Rol</label>
                                    <select id="select_rol" class="form-control" name="select_rol" require>
                                        <option value="0">Elige un tipo de rol</option>
                                        <?php include '../Controllers/dropdown_rol.php'; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="txt_estado" class="letraform">Estado</label>
                                    <select name="select_estado" id="select_estado" class="form-control" require>
                                        <option value="" selected>Selecciona un estado</option>
                                        <option value="0" selected>Desactivar</option>
                                        <option value="1" selected>Activar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="txt_autor" class="letraform">Actividades</label>
                                    <select id="select_actividades" class="form-control" name="select_actividades" require>
                                        <option value="0">Elige un tipo de rol</option>
                                        <?php include '../Controllers/dropdown_actividad.php'; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius:9px; height: 37px;">Cerrar</button>
                        <button type="submit" class="botenesPopup" name="guardarActividad">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- POP UP AGREGAR -->
    <div class="modal fade pop" id="pop_agregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="custom-heading" id="pop_agregarLabel" style="margin-top:-16px;">Agregar Actividades</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="../Controllers/Insert_actividad.php" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="txt_autor" class="letraform">Tipo de Rol</label>
                                    <select id="select_rol" class="form-control" name="select_rol" require>
                                        <option value="0">Elige un tipo de rol</option>
                                        <?php include '../Controllers/dropdown_rol.php'; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="txt_estado" class="letraform">Estado</label>
                                    <select name="select_estado" class="form-control" require>
                                        <option value="0" disabled>Selecciona un estado</option>
                                        <option value="1" selected>Activar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="txt_autor" class="letraform">Actividades</label>
                                    <select id="select_actividades" class="form-control" name="select_actividades" require>
                                        <option value="0">Elige una Actividad</option>
                                        <?php include '../Controllers/dropdown_actividad.php'; ?>
                                    </select>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius:9px; height: 37px;">Cerrar</button>
                        <button type="submit" class="botenesPopup" name="guardarActividad">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




</body>
<?php include './layouts/footer.php'; ?>

</html>