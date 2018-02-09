<?php
session_start();
include "../../DB/ConnectionMYSQL.php";

try{
    $query = "SELECT * FROM users WHERE NUser = '".$_POST['user']."'";
    $res = ConnectionMYSQL::MySQLI()->query($query);
    while($row = $res->fetch_assoc()){
        if($row['Contraseña'] == $_POST['password']){
            echo "ok";
            $_SESSION['User'] = $row;
           setcookie("UserId", $row['id'], time()+(60*60*24*30));
        }else{
            echo "Usuario o contraseña incorrecta";
        }
    }
}catch (PDOException $e){
    echo $e->getMessage();
}