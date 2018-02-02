<?php
session_start();
include "../../DB/ConnectionMYSQL.php";

try{
    $query = "SELECT * FROM users WHERE User = '".$_POST['user']."'";
    $res = ConnectionMYSQL::MySQLI()->query($query);
    echo ConnectionMYSQL::MySQLI()->error;
    while($row = $res->fetch_assoc()){
        if($row['Contraseña'] == $_POST['password']){
            echo "ok";
            $_SESSION['User'] = $row;
        }else{
            echo "Usuario o contraseña incorrecta";

        }
    }
}catch (PDOException $e){
    echo $e->getMessage();
}