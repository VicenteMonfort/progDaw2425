let meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

let dias = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

let totalFechas = 10;
let anno = 2018;

for (let numFechas = 0; numFechas < totalFechas; numFechas++) {
    let mes = parseInt(Math.random() * 12);
    let dia = parseInt(Math.random() * dias[mes] + 1);
    document.getElementById("salidas").innerHTML += "Fecha " + (numFechas + 1) + ": " + dia + " de " + meses[mes] + " de " + anno + "<br>";
}