<?php

$numeros = [15, 4, 27, 8, 42, 11];

$mayor = $numeros[0];

foreach ($numeros as $numero) {
    if ($numero > $mayor) {
        $mayor = $numero;
    }
}

echo $mayor;

?>