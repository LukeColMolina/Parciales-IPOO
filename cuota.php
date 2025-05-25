<?php
class Cuota{
    private $numero;
    private $monto_cuota;
    private $monto_interes;
    private $cancelada;

    public function __construct($numero, $monto_cuota,$monto_interes) {
        $this->numero = $numero;
        $this->monto_cuota = $monto_cuota;
        $this->monto_interes = $monto_interes;
        $cancelada = false;
        $this->cancelada = $cancelada;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function getMontoCuota()
    {
        return $this->monto_cuota;
    }
    public function getMontoInteres()
    {
        return $this->monto_interes;
    }
    public function getCancelada()
    {
        return $this->cancelada;
    }
    public function setMontoCuota($monto_cuota){
        return $this->monto_cuota = $monto_cuota;
    } 
    public function setMontoInteres($monto_interes){
        return $this->monto_interes = $monto_interes;
    }
    public function setCancelada($cancelada){
        return $this->cancelada = $cancelada;
    }
    public function darMontoFinalCuota(){
        $cuota = $this->monto_cuota;
        $interes = $this->monto_interes;
        $montoFinal = $cuota + $interes;
        return $montoFinal;
    }
}