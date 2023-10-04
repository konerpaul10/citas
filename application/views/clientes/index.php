<br>
<center>
  <h2>LISTADO DE CLIENTES AGENDADOS</h2>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK10YPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">



</center>


<hr>
<br>
<center>
  <?php if ($this->session->userdata('c0nectadoUTC')->perfil_usu == 'ADMINISTRADOR') :  ?>
    <a href=" <?php echo site_url(); ?>/clientes/nuevo" class="btn btn-primary btn-sm">Agregar Nuevo</a>
  <?php endif; ?>
</center>

<br>
<?php if ($listadoClientes) : ?>
  <!--TABLE-HOVER FUNCIONA PARAPONERUNA SOBRECUANDOPASA POR LA TABLA EL CURSOR-->
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="tbl-clientes">
      <thead>
        <tr>
          <th class="text-center">ID</th>

          <th class="text-center">TELEFONO</th>
          <th class="text-center">NOMBRE</th>
          <th class="text-center">APELLIDO</th>
          <th class="text-center">DIRECCION</th>
          <th class="text-center">CIUDAD</th>
          <th class="text-center">REFERENCIA</th>
          <th class="text-center">HORA</th>
          <th class="text-center">PORCIONES</th>
          <th class="text-center">OBSERVACIONES</th>
          <th class="text-center">FECHA REGISTRO</th>
          <th class="text-center">ESTADO</th>
          <th class="text-center">OPCIONES</th>


        </tr>
      </thead>
      <tbody>
        <?php foreach ($listadoClientes->result() as $filaTemporal) :  ?>
          <tr>
            <td class="text-center">
              <?php echo $filaTemporal->id_cli; ?>
            </td>
            <!--PARA PONER VISUALIZAR LAS IMAGENES EN EL FORMULARIO DEL INDEX-->

            <td class="text-center">
              <?php echo $filaTemporal->telefono_cli; ?>
            </td>
            <td class="text-center">
              <?php echo $filaTemporal->nombre_cli; ?>
            </td>
            <td class="text-center">
              <?php echo $filaTemporal->apellido_cli; ?>
            </td>

            <td class="text-center">
              <?php echo $filaTemporal->direccion_cli; ?>
            </td>

            <td class="text-center">
              <?php echo $filaTemporal->nombre_pais; ?>
            </td>
            <td class="text-center">
              <?php echo $filaTemporal->referencia_cli; ?>
            </td>
            <td class="text-center">
              <?php echo $filaTemporal->hora_cli; ?>
            </td>

            <td class="text-center">
              <?php echo $filaTemporal->porciones_cli; ?>
            </td>
            <td class="text-center">
              <?php echo $filaTemporal->observaciones_cli; ?>
            </td>
            <td class="text-center">
              <?php echo $filaTemporal->fecha_registro; ?>
            </td>


            <td class="text-center">
              <?php if ($filaTemporal->estado_cli == "DISPONIBLE") : ?>
                <div class="alert alert-success">
                  <?php echo $filaTemporal->estado_cli; ?>
                </div>
              <?php else : ?>
                <div class="alert alert-danger">
                  <?php echo $filaTemporal->estado_cli ?>
                </div>

              <?php endif; ?>


            <td class="text-center">

              <a class="btn btn-success" href="<?php echo site_url(); ?>/clientes/editar/<?php echo $filaTemporal->id_cli; ?>"> <i class="fa fa-eye"></i></a>



              <!--<a  href='javascript:void(0)'
            onclick="confirmarEliminacion('<?php echo $filaTemporal->id_cli; ?>');"
              class="btn btn-danger">
              <i class="fa fa-trash"></i>-->
              </a>
              <?php if ($this->session->userdata('c0nectadoUTC')->perfil_usu == 'ADMINISTRADOR') :  ?>
                <a href='javascript:void(0)' onclick="confirmarEliminacion('<?php echo $filaTemporal->id_cli; ?>');" class="btn btn-danger">
                  <i class="fa fa-trash"></i>
                </a>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>





    </table>
  </div>


<?php else : ?>
  <div class="alert alert-danger">
    <h1>NO SE ENCONTRARON CLIENTES AGENDADOS</h1>
  </div>
<?php endif; ?>





<script type="text/javascript">
  function confirmarEliminacion(id_cli) {
    iziToast.question({
      timeout: 10000,
      close: false,
      overlay: true,
      displayMode: 'once',
      id: 'question',
      zindex: 999,
      title: 'CONFIRMACION',
      message: 'ESTAS SEGURO DE ELIMINAR',
      position: 'center',
      buttons: [
        ['<button><b>SI</b></button>', function(instance, toast) {

          instance.hide({
            transitionOut: 'fadeOut'
          }, toast, 'button');
          window.location.href = "<?php echo site_url(); ?>/clientes/procesarEliminacion/" + id_cli;

        }, true],
        ['<button>NO</button>', function(instance, toast) {

          instance.hide({
            transitionOut: 'fadeOut'
          }, toast, 'button');

        }],
      ]
    });

  }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.71/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.71/vfs_fonts.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script type="text/javascript">
  $(document).ready(function() {
    var table = $('#tbl-clientes').DataTable({
      language: {
        url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json'
      },
      dom: 'Bfrtip',
      buttons: [{
          extend: 'copy',
          text: '<i class="fas fa-copy"></i>',
          titleAttr: 'Copiar al portapapeles',
          className: 'btn btn-primary',
        },
        {
          extend: 'csv',
          text: '<i class="fas fa-file-csv"></i>',
          titleAttr: 'Exportar a CSV',
          className: 'btn btn-primary',
        },
        {
          extend: 'excelHtml5',
          text: '<i class="fas fa-file-excel"></i>',
          titleAttr: 'Exportar a Excel',
          className: 'btn btn-success',
        },
        {
          extend: 'pdfHtml5',
          text: '<i class="fas fa-file-pdf"></i>',
          titleAttr: 'Exportar a PDF',
          className: 'btn btn-danger',
          orientation: 'landscape', // Configurar la orientación a horizontal
          customize: function(doc) {
            // Configurar pageBreak para dividir el contenido en varias páginas
            doc.defaultStyle.fontSize = 10; // Tamaño de fuente predeterminado
            doc.styles.tableHeader.fontSize = 12; // Tamaño de fuente para encabezados de tabla

            // Configurar pageMargins para ajustar el margen de la página
            doc.pageMargins = [20, 20, 20, 20]; // [izquierda, arriba, derecha, abajo]

            // Usar pageBreak para dividir en caso de contenido largo
            doc.content[1].table.body.forEach(function(row, i) {
              if (i > 0 && i % 50 === 0) {
                row.splice(0, 0, {
                  text: '',
                  pageBreak: 'before'
                });
              }
            });
          }
        },
        'print'
      ]

    });

    table.buttons().container()
      .appendTo($('.col-md-6:eq(0)'));
  });

  function confirmarEliminacion(id_cli) {
    iziToast.question({
      timeout: 10000,
      close: false,
      overlay: true,
      displayMode: 'once',
      id: 'question',
      zindex: 999,
      title: 'CONFIRMACION',
      message: 'ESTAS SEGURO DE ELIMINAR',
      position: 'center',
      buttons: [
        ['<button><b>SI </b></button>', function(instance, toast) {
          instance.hide({
            transitionOut: 'fadeOut'
          }, toast, 'button');
          window.location.href = "<?php echo site_url(); ?>/clientes/procesarEliminacion/" + id_cli;
        }, true],
        ['<button>NO </button>', function(instance, toast) {
          instance.hide({
            transitionOut: 'fadeOut'
          }, toast, 'button');
        }],
      ]
    });
  }
</script>