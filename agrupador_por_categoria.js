const productos = [
    { id: 1, nombre: 'Laptop', categoria: 'Electrónica' },
    { id: 2, nombre: 'Libro de Cocina', categoria: 'Libros' },
    { id: 3, nombre: 'Mouse', categoria: 'Electrónica' },
    { id: 4, nombre: 'Novela de Ficción', categoria: 'Libros' },
    { id: 5, nombre: 'Camisa', categoria: 'Ropa' },
];

function agruparProductos(productos) {
    const grupos = {};


    for (const producto of productos) {
    const categoria = producto.categoria;

    
    if (!grupos[categoria]) {
    grupos[categoria] = [];
    }

    
    grupos[categoria].push(producto);
}

    return grupos; 
}

const productosAgrupados = agruparProductos(productos);
console.log(productosAgrupados);