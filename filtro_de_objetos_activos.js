const usuarios = [
    { nombre: 'patricia', estaActivo: true },
    { nombre: 'daniel', estaActivo: false },
    { nombre: 'Carlos', estaActivo: true },
    { nombre: 'Marta', estaActivo: false }
];

const usuariosActivos = usuarios.filter(usuario => usuario.estaActivo);

console.log(usuariosActivos);