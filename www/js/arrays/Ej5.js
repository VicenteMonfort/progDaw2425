let letrasString = "TRWAGMYFPDXBNJZSQVHLCKE";
let letras = letrasString.split("");

let numero = parseInt(prompt("Introduce el número del DNI sin letra: "));

document.getElementById("entradas").innerHTML += "número de DNI sin letra: " + numero + "<br>";

numeroLetra = numero % 23;
letraResultado = letras[numeroLetra];

document.getElementById("salidas").innerHTML += "Número de DNI con letra: " + numero + letraResultado + "<br>";

