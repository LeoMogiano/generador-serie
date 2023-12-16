<?php

require_once('../app/models/Serie.php');


class Triangular extends Serie
{
    // Serie 1+3+6+10+15 
    protected function realizarSerie(int $numero, string $resultado): string
    {
        $suma = 0;
        for ($i = 1; $i <= $numero; $i++) {
            $suma += $i;

            if ($i == 1) {
                $resultado = $suma;
                continue;
            }
            $resultado = $resultado . '+' . $suma;
        }

        return $resultado = 'Serie F= ' . $resultado . '+..';
    }
}
