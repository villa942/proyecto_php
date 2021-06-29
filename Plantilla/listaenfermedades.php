<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Centro medico valle</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">redvallecaucana@salud.com</a>
        <i class="icofont-phone"></i> 5589 5548
        <i class="icofont-google-map"></i> Cali, Valle del Cauca
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">RVS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Inicio</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="../Plantilla/login.php" class="appointment-btn scrollto">Inicio Sesion</a>

    </div>
  </header><!-- End Header -->
    <br><br><br><br><br>
  <main id="main">
      <br>
  
  <center>
    <h1>Enfermedades</h1>
    <div class="container">
    <table class="table table-striped" id="tabla">
        <thead>
            <tr class="text-center">
                <th>Nombre Enfermedad</th>
                <th>Descripcion</th>
                <th>Sintomas</th>
                <th>Recomendaciones</th>

            </tr>
        </thead>
    <tbody>
        <?php
            require '../Plantilla/Dao/enfermedadesDao.php';
            require '../Plantilla/Dto/enfermedadesDto.php';
            require '../Plantilla/conexion.php';
            $eDao = new EnfermedadesDao();
            $allusers = $eDao->listarTodos();
            foreach ($allusers as $user) {
        ?>

            <tr>
                <td><?php echo $user['nombre_enfermedad'];?></td>
                <td><?php echo $user['descripcion']?></td>
                <td><?php echo $user['sintomas'];?></td>
                <td><?php echo $user['recomendaciones'];?></td>
                
            </tr>
        <?php
            }
        ?>
        </table>
    </tbody>
</center>
    <?php
        if (isset($_GET['mensaje'])) {
    ?>   
    <div class="row"><br><br>
        <div class="col-md-6"></div>
        <div class="col-md-1 text-center"><h4><?php echo $mensaje = $_GET['mensaje']?></h4></div>
        <div class="col-md-5"></div>
    </div>
    <?php
        }
    ?>
    <center>
        <div>
             <a href="../Plantilla/enfermedades.php" class="appointment-btn scrollto">Registrar nueva enfermedad</a>
        </div>
        

    </div>

    </center>
    
  </main>

        <br><br>

  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
<style>
    body{
        background-image: url("img/fondo4.jpg");
        background-position: center center;
    }
    #tabla{
        background: white;
        border-radius: 12px;
    }
    #btn2{
        border-color: white;
        border-width: 3px;
    }
    
</style>