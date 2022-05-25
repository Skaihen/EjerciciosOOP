<?php

namespace ITEC\DAW\POO;

class banco
{
    private array $cuenta;

    public function __construct(array $cuenta)
    {
        $this->cuenta = $cuenta;
    }

    public static function createBanco(array $cuenta)
    {
        return new banco($cuenta);
    }

    public function ingreso(int $numCuenta, int $ingreso)
    {
        $this->cuenta[$numCuenta] += $ingreso;
    }

    public function cargo(int $numCuenta, int $ingreso)
    {
        $this->cuenta[$numCuenta] -= $ingreso;
    }

    public function getSaldo(int $numCuenta): int
    {
        return $this->cuenta[$numCuenta];
    }

    public function getTotalBanco(): int
    {
        return array_sum($this->cuenta);
    }
}
