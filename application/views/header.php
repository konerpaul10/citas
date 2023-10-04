<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SISTEMA DE AGENDA DE CITAS</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/favicon.png" />

  <link rel="stylesheet" href="<?php echo base_url(); ?>/src/style.css">
  <!-- jquery deley para que se vea bonito -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.js">-- >

</script>

<!-- cdn font awesome para iconos pequeños  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- cdn izitoast para alertas  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- cdn dattable 8/6/20022  -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <script type="text/javascript" src='https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js'></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- importar jquery validation clase 8/6 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js" integrity="sha512-FOhq9HThdn7ltbK8abmGn60A/EMtEzIzv1rvuh+DqzJtSGq8BRdEN0U+j0iKEIffiw/yEtVuladk6rsG4X6Uqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/additional-methods.min.js" integrity="sha512-XJiEiB5jruAcBaVcXyaXtApKjtNie4aCBZ5nnFDIEFrhGIAvitoqQD6xd9ayp5mLODaCeaXfqQMeVs1ZfhKjRQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/localization/messages_es_AR.min.js" integrity="sha512-HHnzo0ssMRoNapdoTaORwzLpemBFMsg7GA8fr0d9xS1rEXKHazYMTUAUka2abGFCfsdXgZPVVyv3LCkXP1Fhsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
    jQuery.validator.addMethod("letras", function(value, element) {
      //return this.optional(element) || /^[a-z]+$/i.test(value);
      return this.optional(element) || /^[A-Za-zÁÉÍÑÓÚáé íñó]*$/.test(value);

    }, "Este campo solo acepta letras");
  </script>
  <!-- importar file imput css clase 29/6/22-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.0/js/fileinput.min.js" integrity="sha512-C9i+UD9eIMt4Ufev7lkMzz1r7OV8hbAoklKepJW0X6nwu8+ZNV9lXceWAx7pU1RmksTb1VmaLDaopCsJFWSsKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.0/css/fileinput.min.css" integrity="sha512-XHMymTWTeqMm/7VZghZ2qYTdoJyQxdsauxI4dTaBLJa8d1yKC/wxUXh6lB41Mqj88cPKdr1cn10SCemyLcK76A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/locales/es.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.1/css/perfect-scrollbar.min.css">


  <!-- Plugin js for this page-->
  <script type="text/javascript" src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js">
  </script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
  <!-- fin-->

  <meta name="theme-color" content="#5CB85C">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="shortcut icon" type="image/png" href="./img/ventas.png">
  <link rel="apple-touch-icon" href="./ventas.png">
  <link rel="apple-touch-startup-image" href="./ventas.png">
  <meta name="apple-mobile-web-app-title" content="App de Ventas">
  <link rel="manifest" href="<?php echo base_url(); ?>manifest.json">
  <script type="text/javascript" src="<?php echo base_url('script.js'); ?>"></script>

</head>

<head>
  <!-- Tu código CSS personalizado -->
  <style>
    /* Cambia el color de fondo de la barra a azul */
    .navbar-breadcrumb {
      background-color: #0074D9;
      /* Puedes cambiar este valor al color azul que prefieras */
      color: #fff;
      /* Cambia el color del texto a blanco u otro color que contraste adecuadamente */
    }

    /* Cambia el color del texto de la barra */
    .navbar-breadcrumb .menu-title {
      color: #fff;
      /* Cambia el color del texto a blanco u otro color que contraste adecuadamente */
    }

    /* Cambia el color del texto "BIENVENIDOS A NUESTRO CENTRO PARA AGENDAR CLIENTES" a azul */
    #proBanner p {
      color: #0074D9;
      /* Cambia este valor al color azul deseado */
    }

    .navbar {
      background-color: #1e1e1e;
      /* Puedes cambiar este valor al color azul que prefieras */
    }

    .imagen-personalizada {
      width: 100px;
      /* Cambia el ancho de la imagen según sea necesario */
      height: 100px;
      /* Cambia la altura de la imagen según sea necesario */
      margin-top: 50px;
      /* Ajusta el margen superior para separar la imagen del botón */
      display: block;
      /* Hace que la imagen sea un bloque para controlar su posición */
      margin-left: auto;
      /* Centra la imagen horizontalmente */
      margin-right: auto;
      /* Centra la imagen horizontalmente */
    }

    /* Cambia el color de fondo de la barra a azul */
    .navbar-breadcrumb {
      background-color: #0074D9;
      /* Puedes cambiar este valor al color azul que prefieras */
      color: #fff;
      /* Cambia el color del texto a blanco u otro color que contraste adecuadamente */
    }
  </style>


</head>


<body>



  <div class="row" id="proBanner">

  </div>


  </nav>
  <!-- partial -->
  <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
    <div class="navbar-links-wrapper d-flex align-items-stretch">
      <div class="nav-link">
        <a href="javascript:;"><i class="typcn typcn-calendar-outline"></i></a>
      </div>
      <div class="nav-link">
        <a href="javascript:;"><i class="typcn typcn-mail"></i></a>
      </div>
      <div class="nav-link">
        <a href="javascript:;"><i class="typcn typcn-folder"></i></a>
      </div>
      <div class="nav-link">
        <a href="javascript:;"><i class="typcn typcn-document-text"></i></a>
      </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <ul class="navbar-nav mr-lg-2">
        <li class="nav-item ml-auto text-center">
          <h4 class="mb-0">ROYAL PRESTIGE</h4>
        </li>

      </ul>

    </div>
  </nav>
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <div class="theme-setting-wrapper">
      <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>

    </div>

    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">



        <li class="nav-item">
          <b><?php echo
              $this->session->userdata("c0nectadoUTC")->perfil_usu; ?></b>
          <br>
          <?php echo
          $this->session->userdata("c0nectadoUTC")->nombre_usu; ?>
          <?php echo
          $this->session->userdata("c0nectadoUTC")->apellido_usu; ?>
        </li>
        <li class="nav-item">
          <img src="<?php echo base_url(); ?>/img/royal.png" alt="Imagen" class="imagen-personalizada">
        </li>
        <br>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Inicio</span>

          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/clientes/index">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Clientes</span>
          </a>
        </li>
        <?php if (
          $this->session->userdata("c0nectadoUTC")->perfil_usu == "ADMINISTRADOR"
        ) : ?>

          <style>
            /* Estilo para eliminar marcadores */
            ul {
              list-style-type: none;
              /* Elimina los marcadores */
            }
          </style>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);" onclick="toggleSubMenu('submenu-scrips');">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Scrips</span>
            </a>
            <ul id="submenu-scrips" style="display: none;"> <!-- Inicialmente oculto -->
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>/sociales/index">

                  <i class="typcn typcn-social-facebook menu-icon"></i>
                  <span class="menu-title">Redes Sociales</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>/referidos/index">
                  <i class="typcn typcn-link menu-icon"></i>
                  <span class="menu-title">Referidos</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>/postventas/index">
                  <i class="typcn typcn-shopping-cart menu-icon"></i>
                  <span class="menu-title">Post Venta</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>/frios/index">
                  <i class="typcn typcn-thermometer menu-icon"></i>
                  <span class="menu-title">Al Frío</span>
                </a>
              </li>
            </ul>
          </li>


          <script>
            function toggleSubMenu(submenuId) {
              var submenu = document.getElementById(submenuId);
              if (submenu.style.display === "block") {
                submenu.style.display = "none"; // Oculta la sublista si ya está visible
              } else {
                submenu.style.display = "block"; // Muestra la sublista si está oculta
              }
            }
          </script>


          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>/usuarios/index">


              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Usuarios</span>
            </a>
          </li>
        <?php endif; ?>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/indicadores/index">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Indicadores</span>
          </a>
        </li>





        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/seguridades/cerrarSesion">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Salir</span>
          </a>
        </li>

        <br>


      </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        