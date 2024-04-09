

let idEmpleado = 0;
let idTienda = 0;
let idCiudad = 0;
let venta = 0;
let totalVentasEmpleado;
let totalVentasTienda;
let totalVentasCiudad;
let totalVentasEmpresa = 0;
let otroEmpleado = "n";
let otraTienda = "n";
let otraCiudad = "n";

do {
    idTienda = 0;
    idCiudad++;
    totalVentasCiudad = 0;
    do {
        idEmpleado = 0;
        idTienda++;
        totalVentasTienda = 0;
        do {
            idEmpleado++;
            totalVentasEmpleado = 0;
            do {
                venta = parseFloat(prompt("escribe el valor de la venta para el vendedor " + idEmpleado + " de la tienda " + idTienda + " en la ciudad " + idCiudad + ": "));
                if (venta != 0) document.getElementById("entradas").innerHTML += "Empleado " + idEmpleado + " de la tienda " + idTienda + " de la ciudad " + idCiudad + " vende " + venta + "<br>";
                totalVentasEmpleado += venta;
            } while (venta != 0);

            document.getElementById("salidas").innerHTML += "Empleado " + idEmpleado + " de la tienda " + idTienda + " de la ciudad " + idCiudad + " ha vendido " + totalVentasEmpleado + "<br>";
            totalVentasTienda += totalVentasEmpleado;

            otroEmpleado = prompt("Otro empleado?");

        } while (otroEmpleado == 's' || otroEmpleado == 'S');

        document.getElementById("salidas").innerHTML += "En la tienda " + idTienda + " de la ciudad " + idCiudad + " se ha vendido " + totalVentasTienda + "<br>";
        totalVentasCiudad += totalVentasTienda;
        otraTienda = prompt("Otra tienda?");
    } while (otraTienda == 's' || otraTienda == 'S');
    document.getElementById("salidas").innerHTML += "En la ciudad " + idCiudad + " se ha vendido " + totalVentasCiudad + "<br>";
    totalVentasEmpresa += totalVentasCiudad;
    otraCiudad = prompt("Otra ciudad?");
} while (otraCiudad == 's' || otraCiudad == 'S');

document.getElementById("salidas").innerHTML += "La empresa ha vendido " + totalVentasEmpresa + "<br>";