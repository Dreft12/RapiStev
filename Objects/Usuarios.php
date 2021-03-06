<?php
/**
 * Created by PhpStorm.
 * User: Anita
 * Date: 30/01/2018
 * Time: 6:41 PM
 */

class Usuarios
{
    private $user;
    private $pass;
    private $nombre;
    private $apellido;
    private $tipo;
    private $email;
    private $activo;
    private $cedula;
    private $sexo;

    public function __construct($user = null, $pass = null, $nombre = null, $apellido = null, $sexo=null, $tipo = null, $email = null, $cedula=null, $activo = null)
    {
        $this->user = $user;
        $this->pass = $pass;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipo = $tipo;
        $this->email = $email;
        $this->cedula = $cedula;
        $this->activo = $activo;
        $this->sexo = $sexo;
    }


    public function getSexo()
    {
        return $this->sexo;
    }


    public function setSexo($sexo): void
    {
        $this->sexo = $sexo;
    }


    public function getUser()
    {
        return $this->user;
    }


    public function setUser($user): void
    {
        $this->user = $user;
    }


    public function getPass()
    {
        return $this->pass;
    }

    public function getCedula()
    {
        return $this->cedula;
    }

    public function setCedula($cedula): void
    {
        $this->cedula = $cedula;
    }

    public function setPass($pass): void
    {
        $this->pass = $pass;
    }

    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }


    public function setApellido($apellido): void
    {
        $this->apellido = $apellido;
    }


    public function getTipo()
    {
        return $this->tipo;
    }


    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email): void
    {
        $this->email = $email;
    }


    public function getActivo()
    {
        return $this->activo;
    }


    public function setActivo($activo): void
    {
        $this->activo = $activo;
    }


}