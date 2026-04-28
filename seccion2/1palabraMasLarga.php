<?php
// Encuentra la palabra más larga en un texto
function palabraMasLarga($cadena) {
    $palabras = explode(" ", $cadena);
    $masLarga = "";

    foreach ($palabras as $palabra) {
        if (strlen($palabra) > strlen($masLarga)) {
            $masLarga = $palabra;
        }
    }

    return $masLarga;
}

// ejemplo ejecutable
echo palabraMasLarga("Hola estoy aplicando para la vacante de desarrollador full stack") . PHP_EOL;