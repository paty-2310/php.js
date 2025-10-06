<?php

class Producto {
    private string $nombre;
    private float $precio;
    private int $stock;

    public function __construct(string $nombre, float $precio, int $stock) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    public function getValorTotalProducto(): float {
        return $this->precio * $this->stock;
    }
}

$inventario = [
    new Producto("Laptop", 1200.50, 10),
    new Producto("Mouse", 25, 50),
    new Producto("Teclado", 75.99, 30),
    new Producto("Monitor", 300, 20)
];

$valorTotalInventario = 0;

foreach ($inventario as $producto) {
    $valorTotalInventario += $producto->getValorTotalProducto();
}

echo "El valor total del inventario es: " . $valorTotalInventario;

?>