<?php
include "../../Controller/RapiStev.php";
session_start();
if (!isset($_SESSION["RapiStev"])) {
    $_SESSION["RapiStev"] = new RapiStev();
}

if(!empty($_COOKIE['UserId'])){
    header("Location: cuenta.php");
}
echo $_SESSION['MySQL'];
?>

<DOCTYPE html>
    <html lang="es" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="../../Resources/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../Resources/css/styles.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
        <title>RapiStev - Pagina principal</title>
    </head>
    <body>
    <div class="container col-12 modal-header header">
        <h1 class="h1 col-md-1 logo d-flex">
            <a class="link-logo" href="index.php"><span>RAPI</span><span>STEV</span></a>
        </h1>
    </div>
    <div class="container col-lg-6 col-sm-12 d-flex login">
            <div class="alert col-12" id="passerror" role="alert">
        </div>
            <form class="px-4 py-5 form rounded col-sm-12" id="login-form" action="cuenta.php" method="post">
                <div class="form-group">
                    <label for="user">Usuario:</label>
                    <input type="text" class="form-control" name="user" id="user" placeholder="Ingrese Usuario">
                </div>
                <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password"
                           placeholder="Ingrese Contraseña">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="recuerdame" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">
                        Recuerda mi Sesión
                    </label>
                </div>
                <button type="submit" id="ingresar" value="Ingresar" class="btn btn-primary">Ingresar</button>
                <hr>
                <div class="info">
                    <a class="col-6" href="registrate.php">¿Nuevo aquí? Registrate</a><br>
                    <a class="col-6" href="recuperar.php">¿Olvidaste la contraseña?</a>
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
