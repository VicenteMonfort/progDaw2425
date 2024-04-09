let profundidad = parseInt(prompt('Escribe la profundidad del depósito: '));
let longitud = parseInt(prompt('Escribe la longitud del depósito: '));
let ancho = parseInt(prompt('Escribe el ancho del depósito:: '));
let precioMetroCubico = parseInt(prompt('Escribe el precio por metro cúbico: '));

let total = profundidad * longitud * ancho * precioMetroCubico;

document.write("El precio por llenar el depósito es: " + total);