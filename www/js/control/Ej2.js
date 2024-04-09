

let numCita = prompt("Cual es la cita actual? ");
document.getElementById("entradas").innerHTML += "Esta es la cita " + numCita;
let citaActual;
let precioTratamiento;

/*concentro los valores literales en variables, así, 
si necesitara variar algun precio, solo tengo que
modificar en un punto del código*/

let franja1 = 200; let citasFranja1 = 3;
let franja2 = 150; let citasFranja2 = 2;
let franja3 = 100; let citasFranja3 = 3;
let franja4 = 50;

if (numCita <= citasFranja1) {
    citaActual = franja1;
    precioTratamiento = numCita * citaActual;
} else if (numCita <= (citasFranja1 + citasFranja2)) {
    citaActual = franja2;
    precioTratamiento = (numCita - citasFranja1) * citaActual + franja1 * citasFranja1;
} else if (numCita <= (citasFranja1 + citasFranja2 + citasFranja3)) {
    citaActual = franja3;
    precioTratamiento = (numCita - (citasFranja1 + citasFranja2)) * citaActual + franja1 * citasFranja1 + franja2 * citasFranja2;
} else {
    citaActual = franja4;
    precioTratamiento = (numCita - (citasFranja1 + citasFranja2 + citasFranja3)) * citaActual + franja1 * citasFranja1 + franja2 * citasFranja2 + franja3 * citasFranja3;
}

document.getElementById("salidas").innerHTML += "Esta  cita cuesta " + citaActual + "<br>";
document.getElementById("salidas").innerHTML += "El tratamiento ha costado, hasta ahora, " + precioTratamiento + "<br>";
