

let tipo = prompt("Qué tipo de hamburguesa quieres (S, D o T)?: ");
let cantidad = parseInt(prompt("Cuantas hamburguesas quieres?: "));
let pago = prompt("Vas a pagar con tarjeta (S o N)?");
let precioUnitario = 0;/* Si se produce una salida 0 indicaría
                        que algún dato no es correcto*/

document.getElementById("entradas").innerHTML += "Tipo de hamburguesa: " + tipo + "<br>";
document.getElementById("entradas").innerHTML += "Cantidad de hamburguesas: " + cantidad + "<br>";
document.getElementById("entradas").innerHTML += "pago con tarjeta: " + pago + "<br>";

switch (tipo) {
    case 'S':
    case 's':
        precioUnitario = 20;
        break;
    case 'D':
    case 'd':
        precioUnitario = 25;
        break;
    case 'T':
    case 't':
        precioUnitario = 28;
        break;
    default:
        precioUnitario = 0;
}

let precio = precioUnitario * cantidad;
if (pago == "S" || pago == "s") precio *= 1.05;

document.getElementById("salidas").innerHTML += "El total a pagar es " + precio + "<br>";