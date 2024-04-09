let arr = [];
let dato;
let cantidadArrays = 2;
for (let grupoNum = 0; grupoNum < cantidadArrays; grupoNum++) {
    arr[grupoNum] = [];
    do {
        dato = parseInt(prompt("dame número para el array " + (grupoNum + 1)));
        arr[grupoNum].push(dato);
    } while (dato != 0);
    arr[grupoNum].pop();
    document.getElementById("entradas").innerHTML += "Array " + (grupoNum + 1) + ": " + arr[grupoNum].join("-") + "<br>";
}

if (arr[0].length == arr[1].length) {
    let total = [];
    for (let i = 0; i < arr[0].length; i++) {
        total.push(arr[0][i] * arr[1][i]);
    }
    document.getElementById("salidas").innerHTML += "Array producto: " + total.join("-") + "<br>";
} else {
    document.getElementById("salidas").innerHTML += "Arrays con diferente longitud!!!<br>";
}