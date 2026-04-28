<?php
// Cuenta la frecuencia de cada caracter
// Nota: se diferencian mayúsculas y minúsculas
function frecuenciaCaracteres($cadena) {
    $resultado = [];

    for ($i = 0; $i < strlen($cadena); $i++) {
        $char = $cadena[$i];

        if (isset($resultado[$char])) {
            $resultado[$char]++;
        } else {
            $resultado[$char] = 1;
        }
    }

    return $resultado;
}

// ejemplos
print_r(frecuenciaCaracteres("hola juan"));
echo PHP_EOL;

print_r(frecuenciaCaracteres("Desarrollador"));
echo PHP_EOL;

print_r(frecuenciaCaracteres("aaaAAA"));
echo PHP_EOL;