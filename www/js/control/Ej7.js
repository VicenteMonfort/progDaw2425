

let global = 0; let cuentaGlobal = 0;
let venta500 = 0; let cuentaVenta500 = 0;
let venta500a1000 = 0; let cuentaVenta500a1000 = 0;
let ventaMas1000 = 0; let cuentaVentaMas1000 = 0;

do {
    venta = parseFloat(prompt("Valor de la venta: "));
    if (venta > 0) { /* debemos controlar si se introduce 0 no interfiere con el cálculo*/
        document.getElementById("entradas").innerHTML += "Venta: " + venta + "<br>";
        if (venta < 500) {
            venta500 += venta;
            cuentaVenta500++;
        } else if (venta < 1000) {
            venta500a1000 += venta;
            cuentaVenta500a1000++;
        } else {
            ventaMas1000 += venta;
            cuentaVentaMas1000++;
        }
        global += venta;
        cuentaGlobal++;
    }
} while (venta != 0); // 0 es la convención para parar de introducir ventas

document.getElementById("salidas").innerHTML += "Se ha realizado un total de " + cuentaGlobal + " ventas por valor de " + global + "<br>";
document.getElementById("salidas").innerHTML += "Se ha realizado un total de " + cuentaVenta500 + " ventas por valor de " + venta500 + " en la categoría de < 500" + "<br>";
document.getElementById("salidas").innerHTML += "Se ha realizado un total de " + cuentaVenta500a1000 + " ventas por valor de " + venta500a1000 + " en la categoría de 500 a 1000" + "<br>";
document.getElementById("salidas").innerHTML += "Se ha realizado un total de " + cuentaVentaMas1000 + " ventas por valor de " + ventaMas1000 + " en la categoría de > 1000" + "<br>";