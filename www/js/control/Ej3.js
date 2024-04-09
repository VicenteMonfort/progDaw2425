

let porcentageProduccion = 0.45;
let materiaPrima = 100; let manoObra; let gastosFabricacion;
let claveProducto = parseInt(prompt("Clave de producto? (1 a 6)) "));
document.getElementById("entradas").innerHTML += "Clave de producto " + claveProducto;


if (claveProducto > 0 && claveProducto < 7) {
    switch (claveProducto) {
        case 3:
        case 4:
            manoObra = materiaPrima * 0.75;
            break;
        case 1:
        case 5:
            manoObra = materiaPrima * 0.8;
            break;
        case 2:
        case 6:
            manoObra = materiaPrima * 0.85;
            break;
        default:
            manoObra = 0; /*para que no de error
                        aunque no sea un valor
                        correcto*/
    }

    switch (claveProducto) {
        case 2:
        case 5:
            gastosFabricacion = materiaPrima * 1.3;
            break;
        case 3:
        case 6:
            gastosFabricacion = materiaPrima * 1.35;
            break;
        case 1:
        case 4:
            gastosFabricacion = materiaPrima * 1.28;
            break;
        default:
            gastosFabricacion = 0; /*para que no de error
                        aunque no sea un valor
                        correcto*/
    }


    let costeProduccion = materiaPrima + manoObra + gastosFabricacion;
    let precioVenta = costeProduccion * (1 + porcentageProduccion);
    document.getElementById("salidas").innerHTML += "El producto con clave " + claveProducto + " tiene un pvp de " + precioVenta + "<br>";

} else {
    document.getElementById("salidas").innerHTML += "Clave de producto Incorrecta" + "<br>";

}