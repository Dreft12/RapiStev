<?php


class ConnectionMYSQL
{
    private $sql;
    private $connected;
    public function __construct()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $bd = 'rapistev';
        $this->sql = new mysqli($host ,$user,$pass,$bd);
        $this->sql->query("SET NAMES 'utf8'");
        if ($this->sql->connect_errno){
           $this->connected = false;
        }else{
            $this->connected = true;
        }
    }


    public function getSql(): mysqli
    {
        return $this->sql;
    }

    public static function MySQLI(){
        $sql=new ConnectionMYSQL();
        return $sql->getSql();
    }

}