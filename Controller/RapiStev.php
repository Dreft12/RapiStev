<?php
/*include('C:\xampp\htdocs\RapiStev\Objects\Usuarios.php');
include('C:\xampp\htdocs\RapiStev\DB\ConnectionMYSQL.php');*/
include('C:\xamppp\htdocs\RapiStev\Objects\Usuarios.php');
include('C:\xamppp\htdocs\RapiStev\DB\ConnectionMYSQL.php');

class RapiStev
{
    public function menu()
    {
        $query = "SELECT v.Valor, v.id, v.Descripcion, v.Estado, v.ValorX FROM valorparametro v WHERE v.id_Parametro = 1";
        $res = ConnectionMYSQL::MySQLI()->query($query);
        while ($res1 = $res->fetch_assoc()) {
            if ($res1['Estado'] == 'A') {
                echo "<li class=\"nav-item\">
                <a class=\"nav-link\" href=" . $res1['ValorX'] . " title=".$res1['Descripcion'].">" . $res1['Valor'] . "</a>
            </li>";
            }
        }
    }

    public function comboSexo()
    {
        $array = array();
        $sql = "SELECT v.Valor, v.ValorX, v.Estado FROM valorparametro v WHERE v.id_Parametro = 2";
        $res = ConnectionMYSQL::MySQLI()->query($sql);
        while ($res1 = $res->fetch_assoc()) {
            array_push($array,$res1);
        }
        return $array;
    }
}