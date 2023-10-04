  <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/favicon.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>CodePen - Animated Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="./style.css">

  </head>
<br>
<br>
<br>
  <body>

    <body class="main-bg">

      <link rel="stylesheet" href="<?php echo base_url(); ?>/dist/style.css">

      <div class="login-container text-c animated flipInX">
        <form class="" action="<?php echo site_url(); ?>/seguridades/validarAcceso" method="post">
          <div>
            <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
          </div>
          <h3 class="text-whitesmoke">SISTEMA DE AGENDA DE CITAS HP</h3>
          <p class="text-whitesmoke">INGRESE </p>
          <div class="container-content">
            <form class="margin-t">
              <div class="form-group">
                <input type="email" name="email_usu" id="email_usu" value="" placeholder="Ingrese su email" class="form-control" />
              </div>
              <br>
              <div class="form-group">
                <input type="password" name="password_usu" id="password_usu" value="" placeholder="Ingrese su contraseña" class="form-control">
              </div>
              <br>
              <button type="submit" class="form-button button-l margin-b">INGRESE</button>


            </form>
            <p class="margin-t text-whitesmoke"><small> RP  &copy; 2023</small> </p>
          </div>
      </div>

      <?php if ($this->session->flashdata("error")) : ?>
        <script type="text/javascript">
          alert("<?php echo $this->session->flashdata("error"); ?>");
        </script>
      <?php endif; ?>

    </body>