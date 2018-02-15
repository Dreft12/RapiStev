<?php
include "../../Objects/Usuarios.php";
include "../../DB/ConnectionMYSQL.php";
$user = new Usuarios($_POST['user'], $_POST['pass'], $_POST['nombre'], $_POST['apellido'], $_POST['sexo'], 1, $_POST['email'],
    $_POST['cedula'], 1);
$sql = "SELECT u.Cedula, u.NUser FROM users u";
$res = ConnectionMYSQL::MySQLI()->query($sql);
$boolU = false;
$boolC = false;
while ($res1 = $res->fetch_assoc()) {
    if ($res1['Cedula'] == $user->getCedula()) {
        $boolC = true;
    } else if ($user->getUser() == $res1['NUser']) {
        $boolU = true;
    }
}
if ($boolC) {
    echo "Ya existe una cuenta con esta cedula";
} else if ($boolU) {
    echo "Ya existe una cuenta con este nombre de usuario";
} else {
    $sql = "INSERT INTO users(Cedula, Nombre, Apellido, Sexo, NUser, Contraseña, Correo, idTipo, idActivo)VALUES(" . $user->getCedula() . ",'" . $user->getNombre() . "','" . $user->getApellido() . "'," . $user->getSexo() . ",
        '" . $user->getUser() . "','" . $user->getPass() . "','" . $user->getEmail() . "',1,1) ";
    ConnectionMYSQL::MySQLI()->query($sql);
    echo "ok";
}



