<br>
<h1>
  <center>Registro de clientes</center>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</h1>
<form action="<?php echo site_url(); ?>/clientes/procesarActualizacion" method="post" enctype="multipart/form-data">

  <!--CAMBIAR ESTO PARA QUE APARESCA EL ID Y CAMBIAR ARRIBITA NOMAS -->
  <input type="hidden" name="id_cli" id="id_cli" value="<?php echo $cliente->id_cli; ?>">


  <br>

  <b><label for="">PAÍS</label></b>
  <select class="form-control" name="fk_id_pais" id="fk_id_pais" required>
    <option value="">SELECCIONE UN PAIS PORFAVOR</option>
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
  <input type="text" class="form-control" value='<?php echo $cliente->nombre_cli; ?>' name="nombre_cli" id="nombre_cli" placeholder="Ingrese su nombre" class="form-control input-sm " required>
  <br>
  <b>APELLIDO: </b>
  <br>
  <input type="text" class="form-control" value="<?php echo $cliente->apellido_cli; ?>" name="apellido_cli" id="apellido_cli" value="" placeholder="Ingrese el apellido" class="form-control input-sm " required>
  <br>
  <b>TELEFONO: </b>
  <br>
  <input type="number" class="form-control" value="<?php echo $cliente->telefono_cli; ?>" name="telefono_cli" id="telefono_cli" placeholder="Ingrese su numero de telefono" class="form-control input-sm " required>
  <br>
  <b>EMAIL: </b>
  <br>
  <input type="email" class="form-control" value="<?php echo $cliente->email_cli; ?>" name="email_cli" id="email_cli" placeholder="Ingrese su email" class="form-control input-sm ">
  <br>
  <b>DIRECCION: </b>
  <br>
  <input type="text" class="form-control" value="<?php echo $cliente->direccion_cli; ?>" name="direccion_cli" id="direccion_cli" placeholder="Ingrese su direccion" class="form-control input-sm " required>
  <br>
  <b>REFERENCIA: </b>
  <br>
  <input type="text" class="form-control" value="<?php echo $cliente->referencia_cli; ?>" name="referencia_cli" id="referencia_cli" placeholder="Ingrese la referencia del domicilio del cliente" class="form-control input-sm " required>
  <br>
  <b>CITA: </b>
  <br>
  <input type="datetime-local" class="form-control" value="<?php echo $cliente->hora_cli; ?>" name="hora_cli" id="hora_cli" placeholder="Ingrese la cita programada del cliente" class="form-control input-sm " required>
  <br>
  <b>PORCIONES: </b>
  <br>
  <input type="text" class="form-control" value="<?php echo $cliente->porciones_cli; ?>" name="porciones_cli" id="porciones_cli" placeholder="Ingrese las porciones que debe llevar el chef" class="form-control input-sm " required>
  <br>
  <b> OBSERVACIONES: </b>
  <br>
  <input type=text" class="form-control" name="observaciones_cli" id="observaciones_cli" value="<?php echo $cliente->observaciones_cli; ?>" placeholder="Ingrese alguna observacion de la cita" class="form-control input-sm " required>
  <br>




  <div class="row">
    <div class="col-md-12">

      <b><label for="">ESTADO:</label></b>
      <select class"form-control" type="text" name="estado_cli" id="estado_cli" class="form-control input-sm " required>
        <option>SELECCIONE PORFAVOR</option>
        <option value"MATRICULADO">DISPONIBLE</option>
        <option value="NO DISPONIBLE">NO DISPONIBLE</option>
        

      </select>
    </div>
  </div>
  <!--para crear y poner una foto accept para que unicamente seleccione imagenes-->
  <br>

  <!--hasta aqui antes del boton guardar -->
  <br>

  <!--PARA DAR ESPACICOS HACIA LA DERECHA-->
  &nbsp;&nbsp;&nbsp;
  <div class="text-center">

    <button type="button" name="button"><a href="<?php echo site_url(); ?>/clientes/index" class="btn btn-warning">REGRESAR A LA LISTA</a></button>
  </div>


</form>


<script type="text/javascript">
  //activando el pais seleccionado para el cliente
  $('#fk_id_pais').val('<?php echo $cliente->fk_id_pais; ?>');
  $('#estado_cli').val('<?php echo $cliente->estado_cli; ?>');
  $('#llamada_cli').val('<?php echo $cliente->llamada_cli; ?>');
</script>

<script type="text/javascript">
  $("#frm_nuevo_cliente").validate({
    rules: {
      fk_id_pais: {
        required: true
      },
      identificacion_cli: {
        required: true,
        minlength: 10,
        maxlength: 10,
        digits: true
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
        required: true
      },
      email_cli: {
        email: true,
        required: true
      },
      direccion_cli: {
        required: true
      },
      estado_cli: {
        required: true
      }
    },
    messages: {
      fk_id_pais: {
        required: "Por favor seleccione el pais"
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
      estado_cli: {
        required: "Porfavor ingrese su estado"
      }

    }
  });
</script>

<script type="text/javascript">
  $('#foto_cli').fileinput({
    allowedFileExtensions: ['jpeg', 'jpg', 'png'],
    dropZoneEnable: true,
    language: 'es'

  });
</script>