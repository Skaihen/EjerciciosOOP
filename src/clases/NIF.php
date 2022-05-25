<?php

namespace ITEC\DAW\POO;

require 'letrasNIF.php';

class NIF
{
    private int $dni;
    private string $letra;

    public function __construct(int $dni, string $letra)
    {
        if (strlen((string)$dni) == 8 && $this->comprobarLetraNIF($dni, $letra)) {
            $this->dni = $dni;
            $this->letra = $letra;
        } else {
            $this->dni = 0;
            $this->letra = NAN;
        }
    }

    public static function createNIF(int $dni, string $letra)
    {
        return new NIF($dni, $letra);
    }

    private function calcLetraNIF(int $dni): string
    {
        return LETRAS_NIF[($dni % 23)];
    }

    private function comprobarLetraNIF(int $dni, string $letra): bool
    {
        return $this->calcLetraNIF($dni) == $letra;
    }

    public function getNIF(): string
    {
        return $this->dni == 0 ? "Error de creación: DNI o letra incorrectos" : $this->dni . $this->letra;
    }
}
