<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\clases;

/**
 * Description of AlineacionBarcos
 *
 * @author usuario
 */
class AlineacionBarcos {
    //put your code here
    private $alineacionesPosibles=['Horizontal','Vetical'];
    public function getAlineacionesPosibles(): array{
        return $this->alineacionesPosibles;
    }
}
