<?php
include "../../Objects/Usuarios.php";
include "../../DB/ConnectionMYSQL.php";
$user = new Usuarios($_POST['user'], $_POST['pass'], $_POST['nombre'],$_POST['apellido'], $_POST['sexo'],1,$_POST['email'],
    $_POST['cedula'],1);
    $sql = "SELECT u.Cedula, u.NUser FROM users u WHERE u.Cedula = ".$user->getCedula();
    $res = ConnectionMYSQL::MySQLI()->query($sql);
    $res = $res->fetch_assoc();
    if($res['Cedula']==$user->getCedula()){
        echo "Ya existe una cuenta con esta cedula";
    }else if($res['NUser'] == $user->getUser()){
        echo "Ya existe una cuenta con este nombre de usuario";
    } else{
        $sql = "INSERT INTO users(Cedula, Nombre, Apellido, Sexo, NUser, Contraseña, Correo, idTipo, idActivo)VALUES(" . $user->getCedula() . ",'" . $user->getNombre() . "','" . $user->getApellido() . "',".$user->getSexo().",
        '" . $user->getUser() . "','" . $user->getPass() . "','" . $user->getEmail() . "',1,1) ";
        $res = ConnectionMYSQL::MySQLI()->query($sql);
        echo "ok";
    }


