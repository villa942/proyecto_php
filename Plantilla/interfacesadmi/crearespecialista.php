<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <title>Crear especialista</title>
</head>
<body class="container m-0 row justify-content-center">


<div class="col-md-6 center-block">
<br>
<form  action=" " method="POST">
<h3 class="text-center">Registro de especialista </h3>
<br>
<br>

<br>

<label for="">Numero de licencia de salud</label>
<input type="text" name="licencia" placeholder="Escriba el numero de licencia "required class="form-control"><br>
<label for="">Fecha de expedicion de licencia</label>
<input type="date" name="expedicion"placeholder="Escriba la razon " required class="form-control"><br>
<label for="">Nombre</label>
<input type="text" name="nombre" placeholder="Escriba el nombre completo "required class="form-control"><br>
<label for="">Correo</label>
<input type="text" name="correo" placeholder="Escriba su correo"required class="form-control"><br>
<label for="">Celular</label>
<input type="text" name="celular" placeholder="Escriba el numero de celular"required class="form-control"><br>
<label for="">Ciudad</label>
<input type="text" name="ciudad" placeholder="Escriba la ciudad"required class="form-control"><br>
<label for="">Especialidad</label>
<input type="text" name="especialidad" placeholder="Escriba la especialidad"required class="form-control"><br>
<label for="">Ente de salud</label>
<select class="form-control" name="ente" id="ente">

</select>
<br>

<center>
<input type="submit" href=" "name="registro" id="registro" value="Registrar" class="btn btn-outline-primary">
</center>
<br>
</form>
</div>

</body>
</html>
