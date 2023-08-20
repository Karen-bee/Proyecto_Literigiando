<!doctype html>
<html lang="en">

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
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
                    .replace('Showing 1 to 1 of 1 entries', 'Mostrando 1 a 1 de 1 entradas');

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

<?php
include("../Views/Header.php")
?>

<body>
    <div class="contendorCard">
        <div class="card">
            <div class="selectortwo ">
                <div class="lineaIzquierda">
                    <div class="horizontal-line"></div>
                    <div class="horizontal-linetwo"></div>
                </div>
                <h1 class="custom-headingUsu">Administrador de Usuarios</h1>
                <div class="lineaderecha">
                    <div class="horizontal-derecha2"></div>
                    <div class="horizontal-derechatwo2"></div>
                </div>
                <div class="table-responsive media2">
                    <div style="overflow-x:auto;">
                        <table id="example" class="table table-hover table-striped table-bordered position table" style="width: 100%">
                            <thead>
                                <tr>
                                    <th scope="col-sm-2" class="table-Gray">Código</th>
                                    <th scope="col-sm-2" class="table-Gray">Nombre</th>
                                    <th scope="col-sm-2" class="table-Gray">Apellido</th>
                                    <th scope="col-sm-2" class="table-Gray">Dirección</th>
                                    <th scope="col-sm-2" class="table-Gray">Teléfono</th>
                                    <th scope="col-sm-2" class="table-Gray">Nombre de Usuario</th>
                                    <th scope="col-sm-2" class="table-Gray">Email</th>
                                    <th scope="col-sm-2" class="table-Gray">Rol</th>
                                    <th scope="col-sm-2" class="table-Gray">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-sm-2 table-orange">01875</td>
                                    <td class="col-sm-2 table-orange">Ana Maria</td>
                                    <td class="col-sm-2 table-orange">Cortez Carreño</td>
                                    <td class="col-sm-2 table-orange">Cra 105c # 25f-75</td>
                                    <td class="col-sm-2 table-orange">7690190</td>
                                    <td class="col-sm-2 table-orange">AnaM78</td>
                                    <td class="col-sm-2 table-orange">AnaM85Cortez@gmail.com </td>
                                    <td class="col-sm-2 table-orange">Usuario</td>
                                    <td class="col-sm-2 justificarIcon table-orange"><i class="bi bi-circle-fill"></i></td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <button class="button tooltiptext" data-toggle="tooltip" title="Agregar" data-bs-toggle="modal" data-bs-target="#pop_agregar">Agregar</button>
                    <button class="button tooltiptext" data-toggle="tooltip" title="Actualizar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Actualizar</button>

                </div>

            </div>
        </div>
    </div>
    <!-- POP UP EDITAR -->

    <div class="modal fade pop" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="custom-heading" id="staticBackdropLabel" style="margin-top:-16px;">Editar Usuarios</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="bi bi-x-circle-fill"></i></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="txt_codigo" class="letraform">Código</label>
                                    <input type="number" class="form-control" id="txt_codigo" placeholder="01875" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt_autor" class="letraform">Apellido</label>
                                    <input type="text" class="form-control" id="txt_apellido" placeholder="Cortez Carreño">
                                </div>
                                <div class="form-group">
                                    <label for="txt_codigo" class="letraform">Telefono</label>
                                    <input type="text" class="form-control" id="txt_telefono" placeholder="7690190">
                                </div>
                                <div class="form-group">
                                    <label for="txt_codigo" class="letraform">Email</label>
                                    <input type="email" class="form-control" id="txt_email" placeholder="AnaM85Cortez@gmail.com	">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="txt_titulo" class="letraform">Nombre</label>
                                    <input type="text" class="form-control" id="txt_nombre" placeholder="Ana Maria">
                                </div>
                                <div class="form-group">
                                    <label for="txt_fecha" class="letraform">Dirección</label>
                                    <input type="text" class="form-control" id="txt_direccion" placeholder="Cra 105c # 25f-75">
                                </div>
                                <div class="form-group">
                                    <label for="file_imagen" class="letraform">Nombre de Usuario</label>
                                    <input type="text" class="form-control" id="txt_usuario" placeholder="AnaM78">
                                </div>
                                <div class="form-group">
                                    <label for="file_imagen" class="letraform">Rol</label>
                                    <input type="text" class="form-control" id="txt_rol" placeholder="Usuario">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius:9px; height: 37px;">Cerrar</button>
                    <button type="button" class="botenesPopup">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- POP UP AGREGAR -->
    <div class="modal fade pop" id="pop_agregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="custom-heading" id="staticBackdropLabel" style="margin-top:-16px;">Agregar Usuarios</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="bi bi-x-circle-fill"></i></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="txt_codigo" class="letraform">Código</label>
                                    <input type="number" class="form-control" id="txt_codigo">
                                </div>
                                <div class="form-group">
                                    <label for="txt_autor" class="letraform">Apellido</label>
                                    <input type="text" class="form-control" id="txt_apellido">
                                </div>
                                <div class="form-group">
                                    <label for="txt_codigo" class="letraform">Telefono</label>
                                    <input type="text" class="form-control" id="txt_telefono">
                                </div>
                                <div class="form-group">
                                    <label for="txt_codigo" class="letraform">Email</label>
                                    <input type="email" class="form-control" id="txt_email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="txt_titulo" class="letraform">Nombre</label>
                                    <input type="text" class="form-control" id="txt_nombre">
                                </div>
                                <div class="form-group">
                                    <label for="txt_fecha" class="letraform">Dirección</label>
                                    <input type="text" class="form-control" id="txt_direccion">
                                </div>
                                <div class="form-group">
                                    <label for="file_imagen" class="letraform">Nombre de Usuario</label>
                                    <input type="text" class="form-control" id="txt_usuario">
                                </div>
                                <div class="form-group">
                                    <label for="file_imagen" class="letraform">Rol</label>
                                    <input type="text" class="form-control" id="txt_rol">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius:9px; height: 37px;">Cerrar</button>
                    <button type="button" class="botenesPopup">Guardar</button>
                </div>
            </div>
        </div>
    </div>


</body>

<?php
include("../Views/Footer.php")
?>

</html>