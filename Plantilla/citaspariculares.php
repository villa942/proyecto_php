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

  <main id="main mt-150px">
  <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
            <h1 class="text-center">Agendar Citas Particulares</h1>
        </div>

        <form action="../Plantilla/Controladores/controlador.citasparticulares.php" method="post" role="form">
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="Nombre" class="form-control"  placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="Correo"  placeholder="Correo" data-rule="email" data-msg="Please enter a valid email">
            </div>
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="Telefono"  placeholder="Telefono" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="date" name="Fecha" class="form-control"  placeholder="Día de la cita" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="CentroMedico"  class="form-control">
                <option value="">Centro Medico</option>
                <option value="Centro Médico Roosevelt">Centro Médico Roosevelt</option>
                <option value="Centro Médico Calí">Centro Médico Calí</option>
                <option value="Centro Médico Flora Industrial">Centro Médico Flora Industrial</option>
                <option value="Centro Médico Prados del Norte">Centro Médico Prados del Norte</option>
                <option value="Centro Médico Tequendama">Centro Médico Tequendama</option>
                <option value="Centro Médico Versalles">Centro Médico Versalles</option>
                <option value="Unidad de Urgencias Calí">Unidad de Urgencias Calí</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="Especialidad"  class="form-control">
                <option value="">Seleccione Especialidad</option>
                <?php
                            require '../Plantilla/Dao/especialistaDao.php';
                            require '../Plantilla/Dto/especialistaDto.php';
                            require '../Plantilla/conexion.php';

                            $con = Conexion::getConexion();
                            $sql=("SELECT especialidad FROM usuario_especialista");
                            $stmt =$con->prepare($sql);
                            $result =$stmt->execute();
                            $row=$stmt->fetchAll(\PDO::FETCH_OBJ);
                            foreach($row as $especialidad){
                        ?>
                            <option value="<?php print($especialidad->especialidad)?>"><?php print($especialidad->especialidad);?></option>
                        <?php } ?>
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="Mensaje" rows="5" placeholder="Mensaje (Opcional)"></textarea>
            <div class="validate"></div>
          </div>
          <center>
              <input type="submit" name="registro" id="registro" value="Agendar Cita" class="btn btn-primary">
            </center>
        </form>
        <br>
        <div class="col-md-4"></div>
        <?php
        if (isset($_GET['mensaje'])) {
        ?>   
        <div class="row"><br><br>
                <div class="col-md-12">
                <div class="col-md-12 text-center alert alert-success" role="alert"><h4><?php echo $mensaje = $_GET['mensaje'] ?>
                </h4></div>
                </div>
            <div class="col-md-5"></div>
        </div> 
        <?php
        }
        ?>
      </div>
    </section>
  </main>
  
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