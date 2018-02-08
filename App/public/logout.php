<?php
session_start();
setcookie("UserId");
header("Location: index.php");
unset($_SESSION['user']);


