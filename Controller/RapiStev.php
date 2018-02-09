<?php
/*include('C:\xampp\htdocs\RapiStev\Objects\Usuarios.php');
include('C:\xampp\htdocs\RapiStev\DB\ConnectionMYSQL.php');*/
include('C:\xamppp\htdocs\RapiStev\Objects\Usuarios.php');
include('C:\xamppp\htdocs\RapiStev\DB\ConnectionMYSQL.php');

class RapiStev
{
    public function menu()
    {
        $query = "SELECT v.Valor, v.id, v.Descripcion, v.Estado, v.ValorX FROM valorparametro v JOIN parametro p ON v.id_Parametro = p.id";
        $res = ConnectionMYSQL::MySQLI()->query($query);
        while ($res1 = $res->fetch_assoc()) {
            if ($res1['Estado'] == 'A') {
                echo "<li class=\"nav-item\">
                <a class=\"nav-link\" href=" . $res1['ValorX'] . " title=".$res1['Descripcion'].">" . $res1['Valor'] . "</a>
            </li>";
            }
        }
    }

    public function registro(Usuarios $user)
    {

    }
}