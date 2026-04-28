<?php
// Verifica si los parentesis estan balanceados
function parentesisBalanceados($cadena) {
    $contador = 0;

    for ($i = 0; $i < strlen($cadena); $i++) {
        if ($cadena[$i] === "(") $contador++;
        if ($cadena[$i] === ")") $contador--;

        // si en algun momento es negativo esta malo
        if ($contador < 0) return false;
    }

    return $contador === 0;
}

// ejemplos
var_dump(parentesisBalanceados("()"));          // true
echo PHP_EOL;

var_dump(parentesisBalanceados("((()))"));      // true
echo PHP_EOL;

var_dump(parentesisBalanceados("((())"));       // false 
echo PHP_EOL;

var_dump(parentesisBalanceados("(()"));         // false
echo PHP_EOL;

var_dump(parentesisBalanceados("(palabra)"));   // true 
echo PHP_EOL;

var_dump(parentesisBalanceados("(palabra))"));  // false
echo PHP_EOL;

var_dump(parentesisBalanceados(")("));          // false
echo PHP_EOL;

var_dump(parentesisBalanceados(""));            // true
echo PHP_EOL;

