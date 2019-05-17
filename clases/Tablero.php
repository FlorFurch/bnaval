<?php

namespace app\clases;

/**
 * Description of Tablero
 *
 * @author usuario
 */
class Tablero {
    private $dimensiones = [10,10];
    private $letras=['A','B','C','D','E','F','G','H','I','J'];
    private $configuracionActual=[];
    
    public function __construct() {
        $dimensiones= $this->dimensiones;
        for ($fila=0; $fila<$dimensiones[0];$fila++)
        {
            for ($columna = 0; $columna<$dimensiones[1];$columna++)
            {
                $this->configuracionActual[$fila][$columna]=null;
            }
        }
        
    }


    public function getDimensiones(): array{
        return $this->dimensiones;
    }
    
    public function getLetras(): array{
        return $this->letras;
    }
    
    public function tieneBarco(int $fila, int $columna): bool{
        if($this->configuracionActual[$fila][$columna]!==NULL){
            return TRUE;
        }else {            
             return FALSE;
        }
    }
    
    public function setearConfiguracion(array $parametros) {
        $letraBarco1Input=isset($parametros['letra_barco_1'])?($parametros['letra_barco_1']):null;
        $numeroBarco1Input=isset($parametros['numero_barco_1'])?($parametros['numero_barco_1']):null;
        $filaBarco1Real= $letraBarco1Input?array_search($letraBarco1Input, $this->letras):NULL;
        $columnaBarcoReal= $numeroBarco1Input?$numeroBarco1Input-1:null;
        if ($filaBarco1Real!==NULL && $columnaBarcoReal!==NULL){
            $this->configuracionActual[$filaBarco1Real][$columnaBarcoReal]=1;
        }
    }
}
