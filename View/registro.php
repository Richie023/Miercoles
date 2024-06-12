<?php
include_once '../Controller/usuarioController.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema Web</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="dist/css/adminlte.min.css">


  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a>Sistema Web</a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg"> Registro de Usuarios</p>

        <form action="" method="post">  <!-- el metdo post envia la informacion al backend -->

          <div class="input-group mb-3">
            <input id="txtIdenticacion" name="txtIdenticacion" type="text" class="form-control" placeholder="Identificacion"
              onkeyup="ConsultarNombre()"> <!-- Evento ejecutan algo de js  -->
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="txtNombre" name="txtNombre" type="text" readonly class="form-control" placeholder=" Nombre" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input id="email" type="txtEmail" name="txtEmail" class="form-control" placeholder="Correo Electronico" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="Password" id="txtPassword"  name="txtPassword" class="form-control" placeholder="Contraseña" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-7">

            </div>
          </div>
        
          <div class="col-5">
            <button type="submit" id="btnProcesar"  name="btnProcesar" disabled class="btn btn-primary btn-block">Procesar</button> <!-- El boton siempre esta deshabilitado pero con el if lo habilita si cumple con las especificaciones -->
          </div>
          <!-- /.col -->
      </div>
      </form>


      <a href="login.php" class="text-center">Iniciar sesion</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
  </div>
  <!-- /.register-box -->


  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script src="dist/js/usuarios.js"> </script>
</body>

</html>