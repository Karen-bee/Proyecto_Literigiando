<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario Prestamo</title>
    <link rel="stylesheet" href="StylePhpForm.css" />
  </head>
  <body>
    <div>
      <div class="FondoImg">
        <section class="Fondo">
          <img src="imagenes/ImagenPrincipal.png" alt="ImagenPrincipal" />
        </section>
      </div>

      <div class="Titulo">
        <h1>¿ERES NUEVO EN LITERAGIANDO?</h1>
        <p>
          Recuerda que unicamente puedes realizar un prestamo por tres libros.
          Ver politicas de prestamo.
        </p>
      </div>

      <div class="Icon">
      <img class="icon" src="imagenes/items.png" alt="Items" />
      </div>

      <form method="post">
        <h2>FORMULARIO PRESTAMO</h2>
        <p>DATOS PERSONALES</p>

        <div class="cajaF">
          <img class="iconos" src="imagenes/usuario.png" alt="Usuario" />
          <input
            type="text"
            name="NombreApellido"
            placeholder="Ingrese su nombre y apellido"
          />
        </div>

        <div class="cajaF">
          <img
            class="iconos"
            src="imagenes/tarjetaIdentidad.png"
            alt="Tarjeta Identificacion"
          />
          <input
            type="number"
            name="NumIdent"
            placeholder="Ingrese su número de identificación"
          />
        </div>

        <div class="cajaF">
          <img
            class="iconos"
            src="imagenes/correo-electronico.png"
            alt="Email"
          />
          <input
            type="text"
            name="CorreoElec"
            placeholder="Ingrese su correo electrónico"
          />
        </div>

        <p>DATOS MATERIAL</p>

        <div class="cajaF">
          <img class="iconos" src="imagenes/codigo-qr.png" alt="Codigo" />
          <input
            type="number"
            name="CodigoMat"
            placeholder="Ingrese el código del material"
          />
        </div>

        <div class="cajaF">
          <img class="iconos" src="imagenes/libro.png" alt="Titulo Material" />
          <input
            type="text"
            name="TituloMat"
            placeholder="Ingrese el titulo del material"
          />
        </div>

        <p>DATOS PRESTAMO</p>

        <div class="cajaF">
          <img
            class="iconos"
            src="imagenes/calendario.png"
            alt="Fecha Solicitud"
          />
          <input
            type="date"
            name="FechSolicitud"
            placeholder="dd / mm / aaaa"
          />
        </div>

        <div class="cajaF">
          <img
            class="iconos"
            src="imagenes/calendario.png"
            alt="Fecha Devolución"
          />
          <input
            type="date"
            name="FechaDevolucion"
            placeholder="dd / mm / aaaa"
          />
        </div>

        <input
          class="boton1"
          type="submit"
          name="Solicitud"
          value="Nueva Solicitud"
        />
      </form>
    </div>
  </body>
</html>
