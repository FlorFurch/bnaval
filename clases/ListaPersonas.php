<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\clases;

/**
 * Description of ListaPersonas
 *
 * @author usuario
 */
class ListaPersonas {

    private static $lista = [
        [
            'correo' => 'correo1@email.com',
            'apellido' => 'Apellido 1',
            'estudiante' => 'N',
        ],
        [
            'correo' => 'correo2@email.com',
            'apellido' => 'Apellido 2',
            'estudiante' => 'N',
        ],
        [
            'correo' => 'correo3@email.com',
            'apellido' => 'Apellido 3',
            'estudiante' => 'S',
        ]
    ];

    public static function obtenerListaPersonas(): array {
        return self::$lista;
    }

    public static function obtenerListaPersonasFiltrada(array $parametros): array {
        $listaResultado = [];
        foreach (self::$lista as $persona) {
            if (
                    !(array_key_exists('boton', $parametros)) ||
                    (empty($_GET['correo']) || $parametros['correo'] == $persona['correo']) &&
                    (empty($_GET['apellido']) || $parametros['apellido'] == $persona['apellido']) &&
                    (empty($_GET['estudiante']) || $parametros['estudiante'] == $persona['estudiante'])
            ) {
                $listaResultado[] = $persona;
            }
        }
        return $listaResultado;
    }

}
