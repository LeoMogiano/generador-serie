<?php

require_once('../app/models/Serie.php');


class Potencia10 extends Serie
{
    //Serie 1+10+100+1000+10000
    protected function realizarSerie(int $numero, string $resultado): string
    {
        $suma = 0;
        for ($i = 0; $i < $numero; $i++) {
            $suma = 10 ** $i;

            if ($i == 0) {
                $resultado = $suma;
                continue;
            }
            $resultado = $resultado . '+' . $suma;
        }

        return $resultado = 'Serie F= ' . $resultado . '+..';
    }
}