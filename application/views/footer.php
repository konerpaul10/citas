</div>
</div>

</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<footer class="footer">
  <div class="card">
    <div id="footer-content" class="scrollbar">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted"> <a href="" class="text-muted" target="_blank"></a> </span>
      </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.1/perfect-scrollbar.min.js"></script>

<script>
  // Inicializa Perfect Scrollbar en el contenedor del pie de página
  $(document).ready(function() {
    const footerContent = document.getElementById('footer-content');
    new PerfectScrollbar(footerContent);
  });
</script>

<style>
  /* Estilo personalizado para la barra de desplazamiento */
  .scrollbar {
    max-height: 200px;
    /* Altura máxima del contenido antes de que aparezca la barra de desplazamiento */
    overflow-y: auto;
    /* Agrega una barra de desplazamiento vertical si el contenido se desborda */
  }
</style>

<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- base:js -->
<script src="<?php echo base_url(); ?>/assests/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->

<!-- Plugin js for this page-->
<script type="text/javascript" src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js">
</script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

<script src="<?php echo base_url(); ?>/assests/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page-->


<!-- inject:js -->
<script src="<?php echo base_url(); ?>/assests/js/off-canvas.js"></script>
<script src="<?php echo base_url(); ?>/assests/js/hoverable-collapse.js"></script>
<script src="<?php echo base_url(); ?>/assests/js/template.js"></script>
<script src="<?php echo base_url(); ?>/assests/js/settings.js"></script>
<script src="<?php echo base_url(); ?>/assests/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo base_url(); ?>/assests/js/dashboard.js"></script>
<!-- End custom js for this page-->

<?php if ($this->session->flashdata('confirmacion')) : ?>
  <script type="text/javascript">
    iziToast.info({
      tittle: 'CONFIRMACION',
      message: '<?php echo $this->session->flashdata('confirmacion'); ?>',
      position: 'topRight',
    });
  </script>
<?php endif; ?>


<?php if ($this->session->flashdata('error')) : ?>
  <script type="text/javascript">
    iziToast.danger({
      tittle: 'ADVERTENCIA',
      message: '<?php echo $this->session->flashdata('error'); ?>',
      position: 'topRight',
    });
  </script>
<?php endif; ?>

<style media="screen">
  .error {
    color: red;
    font-size: 16px;

  }

  input.error,
  select.error {
    border: 2px solid red;
  }
</style>

<?php if ($this->session->flashdata("bienvenida")) : ?>
  <script type="text/javascript">
    iziToast.info({
      title: 'CONFIRMACIÓN',
      message: '<?php echo $this->session->flashdata("bienvenida"); ?>',
      position: 'topRight',
    });
  </script>
<?php endif; ?>



</body>

</html>