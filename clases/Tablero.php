<?php

namespace app\clases;

/**
 * Description of Tablero
 *
 * @author usuario
 */
class Tablero {
    private $dimensiones = [5,5];
    
    public function getDimensiones(): array{
        return $this->dimensiones;
    }
}
