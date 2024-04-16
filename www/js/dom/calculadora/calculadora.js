document.addEventListener("DOMContentLoaded", main);

function main() {
    document.getElementById("pantalla").readOnly = true;
    let botones = document.getElementsByClassName("boton");
    for (let i = 0; i < botones.length; i++) {

        botones[i].addEventListener("click", function () {
            tecla(botones[i].innerHTML);
        });
    }
    let borrar = document.getElementById("borrar");
    borrar.addEventListener("click", borrado);

    let calcular = document.getElementById("resultado");
    calcular.addEventListener("click", calculo);

    let retroceder = document.getElementById("retroceso");
    retroceder.addEventListener("click", del);
}

function tecla(button) {
    let pantalla = document.getElementById("pantalla");
    let operacion = pantalla.value + button
    let pattern = /(\.{2,}|\+{2,}|\-{2,}|\/{2,}|\*{2,}|\.[\+\-\*\/]|\+[\.\-\*\/]|\-[\+\.\*\/]|\*[\+\-\.\/]|\/[\+\-\*\.]|[0-9]+\.[0-9]+\.|^[\.\+\-\*\/])/;
    if (pattern.test(operacion) == false) pantalla.value += button;
}

function borrado() {
    let pantalla = document.getElementById("pantalla");
    pantalla.value = "";
}

function calculo() {
    let pantalla = document.getElementById("pantalla");
    let operacion = pantalla.value;
    let pattern = /[\.\+\-\*\/]$/;
    if (pattern.test(operacion) == false) pantalla.value = eval(operacion);
}

function del() {
    let pantalla = document.getElementById("pantalla");
    pantalla.value = pantalla.value.slice(0, pantalla.value.length - 1);
}