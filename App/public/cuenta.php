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
    <title>Cuenta</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><h1 class="h1 col-md-1 logo">
            <span>RAPI</span><span>STEV</span>
        </h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php $_SESSION['RapiStev']->menu(); ?>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <div class="input-group mb-3">
                <input type="text" class="form-control text-search" placeholder="Ingresa tu busqueda" aria-label="Ingresa tu busqueda" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-search btn-outline-secondary" type="button"><i class="material-icons">search</i></button>
                </div>
            </div>
        </form>
    </div>
</nav>
<main>
    <?php print_r($_SESSION['User']);?>
</main>
<script src="../../Resources/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../Resources/js/jquery-3.3.1.js" type="text/javascript"></script>
<script src="../../Resources/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../../Resources/js/app.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
</body>
</html>
