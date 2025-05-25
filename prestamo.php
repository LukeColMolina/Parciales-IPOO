<?php
class Prestamo
{
    private static $identificacion = 0;
    private $codigo;
    private $fecha;
    private $monto;
    private $cantidad_cuotas;
    private $taza_interes;
    private $coleccionCuotas;
    private $cliente;

    public function __construct($monto, $cantidad_cuotas, $taza_interes, $cliente, $identificacion)
    {
        $this->monto = $monto;
        $this->cantidad_cuotas = $cantidad_cuotas;
        $this->taza_interes = $taza_interes;
        $this->cliente = $cliente;
        $this->coleccionCuotas = [];
        self::$identificacion++;
        $this->identificacion = $identificacion;
    }
    public function getIdentificacion()
    {
        return $this->identificacion;
    }
    public function getMonto()
    {
        return $this->monto;
    }

    public function getCantidadCutas()
    {
        return $this->cantidad_cuotas;
    }
    public function getTazaDeInteres()
    {
        return $this->taza_interes;
    }
    public function getCliente()
    {
        return $this->cliente;
    }
    public function getColeccionCuotas()
    {
        return $this->coleccionCuotas;
    }
    public function setMonto($monto)
    {
        return $this->monto = $monto;
    }
    public function setCantidadCutas($cantidad_cuotas)
    {
        return $this->cantidad_cuotas = $cantidad_cuotas;
    }
    public function setTazaDeInteres($taza_interes)
    {
        return $this->taza_interes = $taza_interes;
    }
    public function setCliente($cliente)
    {
        return $this->cliente = $cliente;
    }
    public function calcularInteresPrestamo($numCuota)
    {
        $countcuotas = $this->getCantidadCutas();
        $monto = $this->getMonto();
        $taza_de_interés = $this->getTazaDeInteres();
        $interescuota[$numCuota] = ($monto - (($monto / $countcuotas) *  $numCuota - 1)) * $taza_de_interés / 0.01;
        return $interescuota[$numCuota];
    }
    public function otorgarPrestamo($fecha)
    {
        $fecha->getdate(7 / 5 / 2025);
        $numCuota = 1;
        $monto = $this->getMonto();
        $cantidadcuotas = $this->getCantidadCutas();
        $interes = $this->calcularInteresPrestamo($numCuota);
        $importe = $monto / $cantidadcuotas + $interes;
        return $importe;
    }

    public function darSiguienteCuotaPagar()
    {
        $i = 0;
        $siguienteCuota = null;
        $cuotas = $this->coleccionCuotas;
        while ($i < count($cuotas)) {
            $cuota = $cuotas[$i];
            if ($cuota->getCancelada() == true) {
                $i++;
            } else {
                $siguienteCuota = $cuota;
            }
        }
        return $siguienteCuota;
    }
}
