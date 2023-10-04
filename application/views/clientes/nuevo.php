<br>
<h1>
  <center>REGISTRO DE AGENDA</center>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</h1>
<!--COLUMNA 1 enctype="multipart/form-data" agregar para qeu se suban los archivos-->
<form action="<?php echo site_url(); ?>/clientes/guardarCliente" method="post" id="frm_nuevo_cliente" enctype="multipart/form-data">

  <!--COLUMNA 1 -->
  <br>

  <b><label for="">CIUDAD</label></b>
  <select class="form-control" name="fk_id_pais" id="fk_id_pais" required>
    <option value="">Seleccione la ciudad del cliente</option>
    <?php if ($listadoPaises) : ?>
      <?php foreach ($listadoPaises->result() as $paisTemporal) : ?>
        <option value="<?php echo $paisTemporal->id_pais; ?>">
          <?php echo $paisTemporal->nombre_pais; ?>
        </option>
      <?php endforeach; ?>
    <?php endif; ?>

  </select>
  <br>

  <b>NOMBRE: </b>
  <br>
  <input type="text" class="form-control" name="nombre_cli" id="nombre_cli" value="" placeholder="Ingrese el nombre del cliente" class="form-control input-sm " required>
  <br>
  <b>APELLIDO: </b>
  <br>
  <input type="text" class="form-control" name="apellido_cli" id="apellido_cli" value="" placeholder="Ingrese el apellido del cliente" class="form-control input-sm " required>
  <br>
  <b>TELEFONO: </b>
  <br>
  <input type="number" class="form-control" name="telefono_cli" id="telefono_cli" value="" placeholder="Ingrese el numero de telefono del cliente" class="form-control input-sm " required>
  <br>
  <b>EMAIL: </b>
  <br>
  <input type="email" class="form-control" name="email_cli" id="email_cli" value="" placeholder="Ingrese el email si le proporciona el cliente" class="form-control input-sm ">
  <br>
  <b>DIRECCION: </b>
  <br>
  <input type="text" class="form-control" name="direccion_cli" id="direccion_cli" value="" placeholder="Ingrese la direccion del cliente" class="form-control input-sm " required>
  <br>
  <b>REFERENCIA: </b>
  <br>
  <input type="text" class="form-control" name="referencia_cli" id="referencia_cli" value="" placeholder="Ingrese la referencia del domicilio del cliente" class="form-control input-sm " required>
  <br>
  <b>CITA: </b>
  <br>
  <input type="datetime-local" class="form-control" name="hora_cli" id="hora_cli" value="" placeholder="Ingrese la cita programada del cliente" class="form-control input-sm " required>
  <br>
  <b>PORCIONES: </b>
  <br>
  <input type="number" class="form-control" name="porciones_cli" id="porciones_cli" value="" placeholder="Ingrese las porciones que debe llevar el chef" class="form-control input-sm " required>
  <br>
  <b> OBSERVACIONES: </b>
  <br>
  <input type="text" class="form-control" name="observaciones_cli" id="observaciones_cli" value="" placeholder="Ingrese alguna observacion de la cita" class="form-control input-sm " required>
  <br>
  <b> FECHA: </b>
  <br>
  <input type="text" class="form-control" name="fecha_registro" id="fecha_registro" value="" placeholder="Ingrese alguna observacion de la cita" class="form-control input-sm " required>
  <br>
  <script>
    // Obtener la fecha actual
    var fechaActual = new Date();

    // Formatear la fecha en el formato deseado (por ejemplo, YYYY-MM-DD)
    var fechaActualFormato = fechaActual.toISOString().split('T')[0];

    // Establecer el valor del campo de fecha con la fecha actual
    document.getElementById('fecha_registro').value = fechaActualFormato;
  </script>

  <div class="row">
    <div class="col-md-12">


      <b><label for="">ESTADO:</label></b>
      <select class"form-control" type="text" name="estado_cli" id="estado_cli" class="form-control input-sm " required>
        <option value="">SELECCIONE PORFAVOR</option>
        <option value"MATRICULADO">DISPONIBLE</option>
        <option value="NO DISPONIBLE">NO DISPONIBLE</option>

      </select>
    </div>
  </div>


  <!--para crear y poner una foto accept para que unicamente seleccione imagenes-->
  <br>
  <br>

  <!--hasta aqui antes del boton guardar -->
  <button type="submit" name="button" class="btn btn-primary">GUARDAR</a></button>
  <!--PARA DAR ESPACICOS HACIA LA DERECHA-->
  &nbsp;&nbsp;&nbsp;
  <button type="button" name="button"><a href="<?php echo site_url(); ?>/clientes/index" class="btn btn-warning"><i class="fa solid fa-ban"></i> CANCELAR</a></button>

</form>

<script type="text/javascript">
  $("#frm_nuevo_cliente").validate({
    rules: {
      fk_id_pais: {
        required: true
      },

      nombre_cli: {
        letras: true,
        required: true
      },
      apellido_cli: {
        letras: true,
        required: true
      },
      telefono_cli: {

        required: true,
        minlength: 10,
        maxlength: 10,
        digits: true
      },
      email_cli: {
        email: true,

      },
      direccion_cli: {
        required: true
      },
      referencia_cli: {
        required: true
      },
      porciones_cli: {
        required: true
      },
      estado_cli: {
        required: true
      }
    },
    messages: {
      fk_id_pais: {
        required: "Por favor seleccione la ciudad"
      },
      identificacion_cli: {
        required: "Por favor ingrese el número de cédula",
        minlength: "La cédula debe tener mínimo 10 digitos",
        maxlength: "La cédula debe tener máximo 10 digitos",
        digits: "La cédula solo acepta números"
      },
      nombre_cli: {
        required: "Porfavor ingrese su nombre",
        letras: "Porfavor no ingrese numeros",
      },
      apellido_cli: {
        required: "Porfavor ingrese su apellido",
        letras: "Porfavor no ingrese numeros",
      },
      telefono_cli: {
        required: "Porfavor ingrese su telefono",
        minlength: "El telefono debe tener mínimo 10 digitos",
        maxlength: "El telefono debe tener máximo 10 digitos",
        digits: "El telefono solo acepta números",
      },
      email_cli: {
        required: "Porfavor ingrese su email",
        email: "Email no valido utiliza un @ en el email precioso porfavor"
      },
      direccion_cli: {
        required: "Porfavor ingrese su direccion"
      },
      referencia_cli: {
        required: "Porfavor ingrese la referencia"
      },
      hora_cli: {
        required: "Porfavor ingrese la cita"
      },
      porciones_cli: {
        required: "Porfavor ingrese el numero total de las porciones a llevar"
      },
      estado_cli: {
        required: "Porfavor ingrese su estado"
      }

    }
  });
</script>
<!--nueva importacion clase 29/6/2022-->
<script type="text/javascript">
  $('#foto_cli').fileinput({
    allowedFileExtensions: ['jpeg', 'jpg', 'png'],
    dropZoneEnable: true,
    language: 'es'

  });
</script>