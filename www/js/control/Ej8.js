let total = 0;
let pagoAnterior = 10;
document.getElementById("entradas").innerHTML += "Meses: 20 <br> Pago Inicial: 10";

for (let numMes = 1; numMes <= 20; numMes++) {
    document.getElementById("salidas").innerHTML += "el mes " + numMes + " pagó " + pagoAnterior + "<br>";
    total += pagoAnterior;    
    pagoAnterior *= 2;
}
document.getElementById("salidas").innerHTML += "Esta pobre persona pagó " + total + " en total.<br>";
