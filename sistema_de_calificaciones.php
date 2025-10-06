<?php

$estudiantes = [
    [
        "nombre" => "patricia",
        "notas" => [15, 18, 12, 10]
    ],
    [
        "nombre" => "daniel",
        "notas" => [8, 7, 9, 10]
    ],
    [
        "nombre" => "Marta",
        "notas" => [20, 19, 18, 19]
    ],
    [
        "nombre" => "David",
        "notas" => [5, 4, 6, 8]
    ],
    [
        "nombre" => "Sofia",
        "notas" => []
    ]
];


function calcularPromedio($notas) {
    $suma = 0;
    $cantidad = count($notas);

    if ($cantidad == 0) {
        return 0;
    }

    foreach ($notas as $nota) {
        $suma += $nota;
    }

    return $suma / $cantidad;
}


function determinarEstado($promedio) {
    if ($promedio >= 10) {
        return "Aprobado";
    } else {
        return "Reprobado";
    }
}


echo "===== REPORTE DE CALIFICACIONES FINALES =====\n";

foreach ($estudiantes as $estudiante) {
    $promedio = calcularPromedio($estudiante["notas"]);
    $estado = determinarEstado($promedio);
    $promedioFormateado = number_format($promedio, 2);

    echo "----------------------------------------\n";
    echo "Estudiante: " . $estudiante["nombre"] . "\n";
    echo "Promedio: " . $promedioFormateado . "\n";
    echo "Estado: " . $estado . "\n";
}

echo "=========================================\n";

