let primos = [];
let cuantos = parseInt(prompt("Cuantos primos: "));
let numero = 2; //primer número a comprobar

document.getElementById("entradas").innerHTML += "número de primos a obtener: " + cuantos + "<br>";


do {
    let divisor = 2;
    let resto;
    do {
        resto = numero % divisor;
        divisor++;
    } while (resto != 0 && divisor < numero);
    if (resto != 0) {
        primos.push(numero);
        cuantos--; 
    }
    numero++;
} while (cuantos > 0);

document.getElementById("salidas").innerHTML += primos.length + " primeros números primos: " + primos.join("-") + "<br>"
