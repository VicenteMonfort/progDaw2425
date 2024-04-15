
document.addEventListener("DOMContentLoaded", main);

function main() {
    
    document.getElementById("title").addEventListener("click", tamLetra);

    document.getElementById("content").addEventListener("click", colorFondo);

    let botones = document.getElementsByClassName("oculta");
    for (let index = 0; index < botones.length; index++) {
        botones[index].addEventListener("click", function (e) {
            ocultar(e.currentTarget);
            e.stopPropagation();
        });
    }
}

function colorFondo() {
    let color = window.getComputedStyle(this).getPropertyValue("background-color");
    this.style.backgroundColor = (color == 'rgb(144, 238, 144)') ? 'rgb(173, 216, 230)' : 'rgb(144, 238, 144)';
}

function tamLetra() {
    let tamanoOriginal = window.getComputedStyle(document.body).getPropertyValue('font-size');
    tamanoDocument = (parseFloat(tamanoOriginal.slice(0, -2)) * 2 + 1) + tamanoOriginal.slice(-2);
    let tamano = window.getComputedStyle(this).getPropertyValue('font-size');
    tamano = (parseFloat(tamano.slice(0, -2)) + 1) + tamano.slice(-2);
    this.style.fontSize = (tamano != tamanoDocument) ? tamano : tamanoOriginal;
}


function ocultar(ele) {
    let hermano = ele.nextSibling;;
    while (hermano.nodeName != "DIV") {
        hermano = hermano.nextSibling;
    };
    hermano.style.display = (ele.innerHTML == "Mostrar") ? "block" : "none";
    ele.innerHTML = (ele.innerHTML == "Mostrar") ? "Ocultar" : "Mostrar";
}