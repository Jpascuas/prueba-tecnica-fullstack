<?php
// Implementacion de FizzBuzz del 1 al 100
for ($i = 1; $i <= 100; $i++) {
    $salida = "";

    if ($i % 3 === 0) $salida .= "Fizz";
    if ($i % 5 === 0) $salida .= "Buzz";

    echo $salida ?: $i;
    echo PHP_EOL;
}