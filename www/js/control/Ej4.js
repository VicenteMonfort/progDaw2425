

let tarifa;
let pesoPaquete = parseInt(prompt("Peso del paquete en gramos? "));
let destino = parseInt(prompt("[1] América\n[2] África\n[3] Oceanía\n[4] Europa\n[5] Asia\nSelecciona la zona: "));

document.getElementById("entradas").innerHTML += "Peso del paquete " + pesoPaquete + "<br>";
document.getElementById("entradas").innerHTML += "Destino " + destino;


if (pesoPaquete <= 5000) {
    switch (destino) {
        case 1:
            tarifa = 11;
            break;
        case 2:
            tarifa = 10;
            break;
        case 3:
            tarifa = 12;
            break;
        case 4:
            tarifa = 24;
            break;
        case 5:
            tarifa = 27;
            break;
        default:
            tarifa = 0;/*para que no de error
                    aunque no sea un valor
                    correcto*/
                    document.getElementById("salidas").innerHTML += "Zona incorrecta" + "<br>";   
    }
    document.getElementById("salidas").innerHTML += "Precio de envío: " + (pesoPaquete * tarifa) + "<br>";
} else {
    document.getElementById("salidas").innerHTML += "Su paquete excede el peso máximo permitido" + "<br>";
}