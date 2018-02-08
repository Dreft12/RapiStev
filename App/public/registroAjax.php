<?php

$revision = "SELECT u.Cedula, u.User FROM users u WHERE u.Cedula = " . $user->getCedula();
$res = ConnectionMYSQL::MySQLI()->query($revision);
$res2 = $res->fetch_assoc();
if ($res2['Cedula'] == $user->getCedula()) {
    echo "Ya existe una cuenta con esta cedula";
} else if ($res2['User'] == $user->getUser()) {
    echo "Ya existe una cuenta con este nombre de usuario";

} else {
    $sql = "INSERT INTO users(Cedula, Nombre, Apellido, User, Contraseña, Correo, idTipo, idActivo) VALUES(" . $user->getCedula() . "," . $user->getNombre() . "," . $user->getApellido() . ",
        " . $user->getUser() . "," . $user->getPass() . "," . $user->getEmail() . ",1,1) ";
    if (ConnectionMYSQL::MySQLI()->query($sql) === TRUE) {
        echo "ok";
    }
}