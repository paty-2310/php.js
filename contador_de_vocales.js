function contarVocales(cadena) {
    let contador = 0;
    const vocales = "aeiou";
    const cadenaEnMinusculas = cadena.toLowerCase();

for (const letra of cadenaEnMinusculas) {
    if (vocales.includes(letra)) {
    contador++;
    }
}

return contador;
}

const miTexto = "Este Es un Texto de Prueba";
const resultado = contarVocales(miTexto);
console.log(resultado);