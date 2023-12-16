<?php


abstract class Serie
{
    
        final public function serieTemplate(int $numero): void
        {
            $original = $numero;
    
            $resultado = '';
    
            if ($numero == 0) {
                $resultado = '0';
            }
    
            $resultado = $this->realizarSerie($numero, $resultado);
    
            $this->mostrarResultado($original, $resultado);
        }
    
        // Métodos concretos que pueden ser compartidos por las subclases
        protected function mostrarResultado(int $numero, string $resultado): void
        {
    
            $r = "<p>La cantidad en serie es $numero</p>";
            $r .= "<p>El resultado es : </p>";
            $r .= "<p>$resultado</p>";
            include_once('../app/views/home/index.php');
        }
    
        // Métodos abstractos que deben ser implementados por las clases concretas
        abstract protected function realizarSerie(int $numero, string $resultado): string;
    }
