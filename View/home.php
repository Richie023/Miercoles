<?php
include_once  'layoutInterno.php';
?>

<!--Como se puede ver, el código PHP que se encuentra en otro lado del archivo layoutInterno.php se ejecuta en el archivo home.php 
  y se muestra en la página web. Esto es posible gracias a la función INCLUDE que se utiliza en la línea 1 del archivo home.php.
  La función INCLUDE se utiliza para incluir y evaluar el archivo especificado. En este caso, se incluye el archivo layoutInterno.php
  -->

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Blank Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    
  <?php 
    MostrarNav();
    MostrarMenu();
  ?>

  <div class="content-wrapper">
    <section class="content">

    </section>
  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2024 </strong>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>


  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

</body>

</html>