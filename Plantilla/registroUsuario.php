<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="content-center">
<center>
    <div> 
        <div class="row-2">
            <div class="col-md-6">
            <br><br>
            <form action="../Plantilla/Controladores/controlador.usuariologin.php" method="POST" id="form">
            <br>
                <h2 class="text-center">Registro Usuario</h2>
                <br>
                <div class="row">
                    <div class="col">
                        <b><label for="">Nombre</label></b>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="First name">
                    </div>
                    <div class="col">
                        <b><label for="">Apellido</label></b>
                        <input type="text" name="apellido" class="form-control" placeholder="Apellido" aria-label="Last name">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <b><label for="">Correo Electronico</label></b>
                        <input type="text" name="correo_electronico" class="form-control" placeholder="Correo Electronico" aria-label="First name">
                    </div>
                    <div class="col">
                        <b><label for="">Numero Cedula</label></b>
                        <input type="text" name="cedula" class="form-control" placeholder="Numero Cedula" aria-label="Last name">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <b><label for="">Celular</label></b>
                        <input type="text" name="celular" class="form-control" placeholder="Celular" aria-label="First name">
                    </div>
                    <div class="col">
                        <b><label for="">Contraseña</label></b>
                        <input type="password" name="contraseña" class="form-control" placeholder="Contraseña" aria-label="First name">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <b><label for="">Tipo Usuario</label></b>
                    <select class="form-select" name="tipo_usuario">
                    <option value="">Seleccione...</option>
                    <option value="Admin">Admin</option>
                    <option value="Usuario">Usuario</option>
                    </select>
                    </div>
                </div>
                  <br><hr>
                <div>
                <center>
                    <input type="submit" name="registro" id="registro" value="Registrarse" class="btn btn-primary">
                    <a href="../Plantilla/" class="btn btn-danger" >Volver</a>
                </center>
                <br>
                </div>
                
            </form>
            
            </div>
        </div>
        <div class="col-md-4"></div>
        <?php
        if (isset($_GET['mensaje'])) {
        ?>   
        <div class="row"><br><br>
                <div class="col-md-6">
                <div class="col-md-1 text-center"><h4><?php echo $mensaje = $_GET['mensaje'] ?>
                </h4></div>
                </div>
            <div class="col-md-5"></div>
        </div> 
        <?php
        }
        ?>
    </div>
    </center>
</body>
</html>