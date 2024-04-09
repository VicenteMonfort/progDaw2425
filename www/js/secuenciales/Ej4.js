let base = parseInt(prompt('Escribe la base de la figura: '));
let altura = parseInt(prompt('Escribe la altura de la figura:'));
let alturaMenor = parseInt(prompt('Escribe la base menor de la figura:'));

let areaRectangulo = base * alturaMenor;
let areaTriangulo = base * (altura - alturaMenor) / 2;
let area = areaRectangulo + areaTriangulo;

document.write("El área de la figura resultante es: " + area);