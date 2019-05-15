<?php

namespace app\clases;

/**
 * Description of Tablero
 *
 * @author usuario
 */
class Tablero {
    private $dimensiones = [10,10];
    
    public function getDimensiones(): array{
        return $this->dimensiones;
    }
}
