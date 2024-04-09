let litros = parseFloat(prompt('Escribe cuantos litros se han producido: '));
let precio = parseFloat(prompt('Escribe el precio de cada galón: '));
const litrosGalon = 3.785;

let total = precio * litros / litrosGalon;

document.write("El productor de leche recibe: " + total);