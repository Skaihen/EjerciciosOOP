<?php

namespace ITEC\DAW\POO;

class fraccion
{
    private int $numerador;
    private int $denominador;

    public function __construct(int $numerador, int $denominador)
    {
        $this->numerador = $numerador;
        $this->denominador = $denominador;
    }

    public static function createFraccion(int $numerador, int $denominador)
    {
        return new fraccion($numerador, $denominador);
    }

    public function getNumerador()
    {
        return $this->numerador;
    }

    public function getDenominador()
    {
        return $this->denominador;
    }

    public function sumaFraccion(fraccion $fraccion2): fraccion
    {
        $numerador2 = $fraccion2->getNumerador();
        $denominador2 = $fraccion2->getDenominador();

        $newNumerador = (($this->numerador * $denominador2) + ($this->denominador * $numerador2));

        $newDenominador = $this->denominador * $denominador2;

        return fraccion::createFraccion($newNumerador, $newDenominador);
    }

    public function restaFraccion(fraccion $fraccion2): fraccion
    {
        $numerador2 = $fraccion2->getNumerador();
        $denominador2 = $fraccion2->getDenominador();

        $newNumerador = (($this->numerador * $denominador2) - ($this->denominador * $numerador2));

        $newDenominador = $this->denominador * $denominador2;

        return fraccion::createFraccion($newNumerador, $newDenominador);
    }

    public function multiplicaFraccion(fraccion $fraccion2): fraccion
    {
        $numerador2 = $fraccion2->getNumerador();
        $denominador2 = $fraccion2->getDenominador();

        $newNumerador = $this->numerador * $numerador2;

        $newDenominador = $this->denominador * $denominador2;

        return fraccion::createFraccion($newNumerador, $newDenominador);
    }

    public function divideFraccion(fraccion $fraccion2): fraccion
    {
        $numerador2 = $fraccion2->getNumerador();
        $denominador2 = $fraccion2->getDenominador();

        $newNumerador = $this->numerador * $denominador2;

        $newDenominador = $this->denominador * $numerador2;

        return fraccion::createFraccion($newNumerador, $newDenominador);
    }
}
