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
    <link rel="stylesheet" href="style.css">

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
            <h1 class="custom-heading">Administrar Blog</h1>
            <div class="lineaderecha">
                <div class="horizontal-derecha"></div>
                <div class="horizontal-derechatwo"></div>
            </div>
            <div class="table-responsive " style="position: relative;
                top: 80px;  width: 955px;
                height: 950px;
                left: 25px;">
                <table id="example" class="table table-hover table-striped table-bordered position table" style="width: 100%">
                    <thead>
                        <tr>
                            <th scope="col-sm-2" class="table-Gray">Código</th>
                            <th scope="col-sm-2" class="table-Gray">Titulo</th>
                            <th scope="col-sm-2" class="table-Gray">Autor</th>
                            <th scope="col-sm-2" class="table-Gray">Fecha</th>
                            <th scope="col-sm-2" class="table-Gray">Descripcion</th>
                            <th scope="col-sm-2" class="table-Gray">Imagen</th>
                            <th scope="col-sm-2" class="table-Gray">Estado</th>
                            <th scope="col-sm-2" class="table-Gray">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-sm-2 table-orange">02457</td>
                            <td class="col-sm-2 table-orange">Teorias Pedagogicas</td>
                            <td class="col-sm-2 table-orange">Regina de Miguel</td>
                            <td class="col-sm-2 table-orange">30/04/2023</td>
                            <td class="col-sm-2 table-orange">Tecnicas inclusivas para la pedagogia actualmente...</td>
                            <td class="col-sm-2 table-orange"><img src="./Imagenes/pedagogica.png" alt="MDN" width="50px" height="50px"></td>
                            <td class="col-sm-2 justificarIcon table-orange">Activo</td>
                            <td class="col-sm-2 justificarIcon table-orange">
                                <button class="form-control" data-toggle="tooltip" title="Editar"><i class="bi bi-pencil-square"></i></button>
                                <button class="form-control" data-toggle="tooltip" title="Desactivar"><i class="bi bi-x-circle-fill"></i></button>

                            </td>

                        </tr>

                    </tbody>
                </table>
                <button class="button tooltiptext" data-toggle="tooltip" title="Agregar">Agregar</button>
            </div>

        </div>
    </div>
</body>

</html>