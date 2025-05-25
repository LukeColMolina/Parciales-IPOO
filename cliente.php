<?php
class Cliente
{
    private $nombre;
    private $apellido;
    private $dni;
    private $direccion;
    private $mail;
    private $telefono;
    private $neto;

    public function __construct($nombre, $apellido, $dni, $direccion, $mail, $telefono, $neto)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->direccion = $direccion;
        $this->mail = $mail;
        $this->telefono = $telefono;
        $this->neto = $neto;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getDni()
    {
        return $this->dni;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function getMail()
    {
        return $this->mail;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getNeto()
    {
        return $this->neto;
    }
    public function setNombre($nombre)
    {
        return $this->nombre = $nombre;
    }
    public function setApellido($apellido)
    {
        return $this->apellido = $apellido;
    }
    public function setDireccion($direccion)
    {
        return $this->direccion = $direccion;
    }
    public function setMail($mail)
    {
        return $this->mail = $mail;
    }
    public function setTelefono($telefono)
    {
        return $this->telefono = $telefono;
    }
    public function setNeto($neto)
    {
        return $this->neto = $neto;
    }
}
