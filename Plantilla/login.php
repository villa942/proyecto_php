<!-- <?php

// session_start();
// if (isset($_SESSION['nombre'])) {
//     header('Location: ../Login/login.php');
// }

?> -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../Plantilla/Login/css/style1.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Bienvenido!</h2>
								<p>¿No tienes cuenta?</p>
								<a href="registroUsuario.php" class="btn btn-white btn-outline-white">Registrate</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Iniciar Sesion</h3>
			      		</div>
			      	</div>
					<form action="./loginproceso.php" class="signin-form" method="POST">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Usuario</label>
			      			<input type="text" class="form-control" name="txtUsu" placeholder="Numero Cedula" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Contraseña</label>
		              <input type="password" class="form-control" name="txtPass" placeholder="Contraseña" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="./Login/js/jquery.min.js"></script>
  <script src="./Login/js/popper.js"></script>
  <script src="./Login/js/bootstrap.min.js"></script>
  <script src="./Login/js/main.js"></script>

	</body>
</html>

