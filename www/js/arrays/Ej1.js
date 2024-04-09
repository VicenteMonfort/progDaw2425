let arr = [];
let cantidadNumeros = 5;
for (let i = 0; i < cantidadNumeros; i++) {
    let dato = parseInt(prompt("Dame un número: "));
    document.getElementById("entradas").innerHTML += "número " + (i + 1) + ": " + dato + "<br>";
    arr.push(dato);
}
let suma = 0;
for (let i = 0; i < cantidadNumeros; i++) {
    suma += arr[i];
}
let media = suma / cantidadNumeros;
document.getElementById("salidas").innerHTML += "Media: " + media + "<br>";
