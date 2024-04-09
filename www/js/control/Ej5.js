

let aumento; let limite = 600;
let tipoTarjeta = parseInt(prompt("El límite actual de su tarjeta es: " + limite + "\nSelecciona tipo de tarjeta: "));
document.getElementById("entradas").innerHTML += "Tipo de tarjeta " + tipoTarjeta;


switch (tipoTarjeta) {
    case 1:
        aumento = 1.25;
        break;
    case 2:
        aumento = 1.35;
        break;
    case 3:
        aumento = 1.4;
        break;
    default:
        aumento = 1.5;
}
document.getElementById("salidas").innerHTML += "El nuevo límite de su tarjeta es: " + (limite * aumento) + "<br>";