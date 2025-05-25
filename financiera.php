<?php
class Fincanciera{
    private $denominacion;
    private $direccion;
    private $colecPrestamos;
    
public function __construct($denominacion,$direccion) {
    $this->denominacion = $denominacion;
    $this->direccion = $direccion;
    $this->colecPrestamos = array();
}

public function getDenominacion()
{
    return $this->denominacion;
}
public function getDireccion()
{
    return $this->direccion;
}
public function getColeccionDePrestamos()
{
    return $this->colecPrestamos;
}
public function setDireccion($direccion)
{
    return $this->direccion = $direccion;
}
public function setColeccionDeIntereses($colecPrestamos)
{
    return $this->colecPrestamos = $colecPrestamos;
}
public function __toString()
{
    
    $cad = "Denominacion:".$this->getDenominacion()." ".
". Dirección: ". $this->getDireccion()."Prestamos:" .$this->getColeccionDePrestamos();
return $cad;}

public function otorgarPrestamo($objCliente,$cantidadcuotas,$monto,$interes){
   $prestamos=$this->getColeccionDePrestamos();
   foreach( $prestamos as $prestamo)
  { $prestamo->setCliente($objCliente);
    $prestamo->setCantidadCuotas($cantidadcuotas);
   $prestamo->setMonto($monto);
   $prestamo->setTazaDeInteres($interes);}
 
 return $this->setColeccionDeIntereses($prestamo);
 }
}
