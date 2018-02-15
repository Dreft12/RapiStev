<?php
include "../../Controller/RapiStev.php";
session_start();
if (!isset($_SESSION["RapiStev"])) {
    $_SESSION["RapiStev"] = new RapiStev();
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../Resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Resources/css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <title>Registra tu cuenta en RapiStev</title>
</head>
<body>
<div class="container col-12 modal-header header">
    <h1 class="h1 col-md-1 logo d-flex">
        <a class="link-logo" href="index.php"><span>RAPI</span><span>STEV</span></a>
    </h1>
</div>
<div class="container col-lg-6 col-sm-12"><h4 class="d-flex justify-content-center title-register">Registra tu cuenta para realizar pedidos y más</h4></div>
<div class="container col-lg-6 col-sm-12 d-flex login">
    <div class="alert col-12" id="passerrorRe" role="alert">
    </div>
    <form class="form rounded col-sm-12" id="register-form" method="post">
        <div class="input-group d-flex flex-column">
            <label class="label-register" for="nombre">Nombre</label>
            <input type="text" required class="form-control" placeholder="Ingrese Nombre" name="nombre" id="nombre" aria-label="Ingrese Nombre" aria-describedby="basic-addon1">
            <label class="label-register" for="pass">Apellido</label>
            <input type="text" required class="form-control" placeholder="Ingrese Apellido" name="apellido" id="apellido" aria-label="Ingrese Apellido" aria-describedby="basic-addon1">
        </div>
        <br>
        <div class="input-group mb-3">
            <label class="label-register" for="sexo">Sexo</label>
            <select class="custom-select" id="sexo" name="sexo" required>
                <?php
                foreach ($_SESSION['RapiStev']->comboSexo() as $opcion){
                    echo "<option value='".$opcion['ValorX']."'>".$opcion['Valor']."</option>";
                }
                ?>
            </select>
        </div>
        <div class="input-group mb-3">
            <label class="label-register" for="email">Correo</label>
            <input type="email" required  class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com">
        </div>
        <div class="input-group mb-3">
            <label class="label-register" for="user">Usuario</label>
            <input type="text" required class="form-control" placeholder="Ingrese Nombre de Usuario" name="user" aria-label="Nombre de Usuario" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <label class="label-register" for="pass">Contraseña</label>
            <input type="password" required  class="form-control" placeholder="Ingrese la contraseña" id="pass" name="pass" aria-label="Ingrese la contraseña" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <label class="label-register" for="cedula">Cedula</label>
            <input type="number" required class="form-control" placeholder="Ingrese la cedula" id="cedula" name="cedula" aria-label="Ingrese la cedula" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3 col-lg-12 justify-content-between submit">
            <input type="submit" id="btn-registrar" value="Registrar cuenta" class="btn btn-primary col-lg-4">
            <input type="reset" value="Limpiar" class="btn btn-primary col-lg-4">
            <input type="button" value="Regresar" id="regresar"  class="btn btn-primary col-lg-4">
        </div>
    </form>
</div>
    <script src="../../Resources/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../Resources/js/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="../../Resources/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../../Resources/js/app.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
</body>
</html>
