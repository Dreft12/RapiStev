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
        <a href="index.php"><span>RAPI</span><span>STEV</span></a>
    </h1>
</div>
<div class="container col-lg-6 col-sm-12"><h4 class="title-register">Registra tu cuenta para realizar pedidos y más</h4></div>
<div class="container col-lg-6 col-sm-12 d-flex login">
    <div class="alert col-12" id="passerror" role="alert">
    </div>
    <form class="py-5 form rounded col-sm-12" id="register-form" method="post">
        <div class="input-group d-flex flex-column">
            <label class="label-register" for="nombre">Ingrese Nombre</label>
            <input type="text" class="form-control" placeholder="Ingrese Nombre" name="user" id="nombre" aria-label="Ingrese Nombre" aria-describedby="basic-addon1">
            <label class="label-register" for="pass">Ingrese Apellido</label>
            <input type="text" class="form-control" placeholder="Ingrese Apellido" name="apellido" id="apellido" aria-label="Ingrese Apellido" aria-describedby="basic-addon1">
        </div>
        <br>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nombre de Usuario" name="user" aria-label="Nombre de Usuario" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Ingrese la contraseña" id="pass" name="pass" aria-label="Ingrese la contraseña" aria-describedby="basic-addon1"><br>
            <input type="password" class="form-control" placeholder="Repita la contraseña" id="pass2" name="pass2" aria-label="Repita la contraseña" aria-describedby="basic-addon1">
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
