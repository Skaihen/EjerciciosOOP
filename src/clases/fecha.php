<?php

namespace ITEC\DAW\POO;

class fecha
{

    private int $dia;
    private int $mes;
    private int $año;

    public function __construct(int $dia, int $mes, int $año)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->año = $año;
    }

    public static function createFecha(int $dia, int $mes, int $año)
    {
        return new fecha($dia, $mes, $año);
    }

    public function __toString(): string
    {
        return $this->dia . '-' . $this->mes . '-' . $this->año;
    }

    public function validarFecha(): bool
    {
        return checkdate(
            $this->mes,
            $this->dia,
            $this->año
        );
    }

    public function nextDay()
    {
        $dt = new \DateTime($this->año . '-' . $this->mes . '-' . $this->dia . ' +1 day');

        $dte = explode("-", $dt->format('d-m-Y'));

        $this->dia = $dte[0];
        $this->mes = $dte[1];
        $this->año = $dte[2];
    }
}
