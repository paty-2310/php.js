<?php

function encontrarPalabrasLargas($palabras, $longitudMinima) {
    $resultado = [];
    foreach ($palabras as $palabra) {
        if (strlen($palabra) > $longitudMinima) {
            $resultado[] = $palabra;
        }
    }
    return $resultado;
}

$misPalabras = ["sol", "computadora", "gato", "otorrinolaringologo", "mar"];
$longitud = 4;

$palabrasFiltradas = encontrarPalabrasLargas($misPalabras, $longitud);

print_r($palabrasFiltradas);

?>