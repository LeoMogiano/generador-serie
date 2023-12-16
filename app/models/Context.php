<?php

require_once('../app/models/Serie.php');
require_once('../app/models/ContextInterface.php');

class Context implements ContextInterface
{
    private Serie $strategy;

    public function __construct(Serie $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Serie $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function generarSerie(int $num, string $tipo): void
    {
        $this->strategy->serieTemplate($num);
    }
}
