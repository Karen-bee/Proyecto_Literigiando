<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion de eventos</title>

    <!--- Boostrap CSS --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--- FONTS --->
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

    <!--- style --->
    <link rel="stylesheet" href="style_cambiocontra.css">

    <!--data table CSS -->
    <link rel='stylesheet' type='text/css' href='https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css' />

</head>
<body>

  <div class = "contenedor">
    <div class="card border border border-5">
        <div class="card-body border border-warning">
        <div class = "row g-3">
          <div class = "col">
            <div>
              <hr>
            </div>
            <div>
              <hr>
            </div>
          </div>
          <div class = "col">
            <h1 class="card-title text-center">Administrar Eventos</h1>
          </div>
          <div class = "col">
            <div>
              <hr>
            </div>
            <div>
              <hr>
            </div>
          </div>
        </div>
          <div class = "d-flex justify-content-center mb-4">
            <table class="table table-hover" id = "tabla_eventos">
              <thead>
                <tr>
                  <th style =  "background-color: #D7DADD" scope="col">Codigo</th>
                  <th style =  "background-color: #D7DADD" scope="col">Titulo</th>
                  <th style =  "background-color: #D7DADD"  scope="col">Fecha</th>
                  <th style =  "background-color: #D7DADD"  scope="col">Tipo</th>
                  <th style =  "background-color: #D7DADD"  scope="col">Asistencia</th>
                  <th style =  "background-color: #D7DADD"  scope="col">Descripcion</th>
                  <th style =  "background-color: #D7DADD"  scope="col">Imagen</th>
                  <th style =  "background-color: #D7DADD"  scope="col">Opciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Teorias Pedagogicas</td>
                  <td>23/05/2023</td>
                  <td>taller</td>
                  <td>20</td>
                  <td>Tecnicas inclusivas para la pedagogia</td>
                  <td>imagen</td>
                  <td class = "botones"><button type="button" class = "btn2 m-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><i class="bi bi-pencil-square"></button></i>
                  <button type="button" class = "btn2"><i class="bi bi-x-circle"></i></button></td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Teorias Pedagogicas</td>
                  <td>23/05/2023</td>
                  <td>taller</td>
                  <td>20</td>
                  <td>Tecnicas inclusivas para la pedagogia</td>
                  <td>imagen</td>
                  <td class = "botones"><button type="button" class = "btn2 m-1"><i class="bi bi-pencil-square"></button></i>
                  <button type="button" class = "btn2"><i class="bi bi-x-circle"></i></button></td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Teorias Pedagogicas</td>
                  <td>23/05/2023</td>
                  <td>taller</td>
                  <td>20</td>
                  <td>Tecnicas inclusivas para la pedagogia</td>
                  <td>imagen</td>
                  <td class = "botones"><button type="button" class = "btn2 m-1"><i class="bi bi-pencil-square"></button></i>
                  <button type="button" class = "btn2"><i class="bi bi-x-circle"></i></button></td>
                </tr>
              </tbody>
            </table> 
          </div>
          <div>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Agregar
            </button>
          </div>
        </div>
    </div>
  </div>

<!-- Modal agregar evento -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar un nuevo evento</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="Titulo" class="form-label">Titulo</label>
        <input type="text" id="Titulo" class="form-control"
        placeholder="Ingrese el titulo" name = "Titulo"/>
      
      <label for="fecha_evento" class="form-label">Fecha</label>
        <input type="date" id="fecha_evento" class="form-control"
        placeholder="DD / MM / YY" name = "fecha_evento"/>

        <label for="tipo_evento" class="form-label">Tipo de evento</label>
          <select class="form-select" id="tipo_evento"
            aria-label="Default select example" name = "tipo_evento">
            <option value="Taller">Taller</option>
            <option value="Cuentos">Cuentos</option>
          </select>

          <label for="descripcion_evento" class="form-label">Descripcion del evento</label>
          <textarea class="form-control" id="descripcion_evento" name = "descripcion_evento" rows="3"></textarea>

          <label for="imagen_evento" class="form-label">Cargar imagen</label>
            <input class="form-control form-control-sm" id="imagen_evento" name = "imagen_evento" type="file">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn">Enviar</button>
      </div>
    </div>
  </div>
</div>
<!-- fin modal-->

<!-- modal editar evento -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar datos de un evento</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="Titulo" class="form-label">Titulo</label>
        <input type="text" id="Titulo" class="form-control"
        placeholder="Ingrese el titulo" name = "Titulo"/>
      
      <label for="fecha_evento" class="form-label">Fecha</label>
        <input type="date" id="fecha_evento" class="form-control"
        placeholder="DD / MM / YY" name = "fecha_evento"/>

        <label for="tipo_evento" class="form-label">Tipo de evento</label>
          <select class="form-select" id="tipo_evento"
            aria-label="Default select example" name = "tipo_evento">
            <option value="Taller">Taller</option>
            <option value="Cuentos">Cuentos</option>
          </select>

          <label for="descripcion_evento" class="form-label">Descripcion del evento</label>
          <textarea class="form-control" id="descripcion_evento" name = "descripcion_evento" rows="3"></textarea>

          <label for="imagen_evento" class="form-label">Cargar imagen</label>
            <input class="form-control form-control-sm" id="imagen_evento" name = "imagen_evento" type="file">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn">Enviar</button>
      </div>
    </div>
  </div>
</div>

<!-- fin modal evitar evento -->

<!-- data table -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<!-- fin data table -->

<!--boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<!-- script para relacionar la tabla a la clase datatable -->

<script>
  $(document).ready(function () {
    $('#tabla_eventos').DataTable();
  });
</script>

<!-- fin de la relcion de la table -->
</body>
</html>