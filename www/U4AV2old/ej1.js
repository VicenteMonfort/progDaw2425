let versos = [
    "Como el fasgo central de la pandurga",
    "remurmucia la pínola plateca",
    "así el chungo del gran Perrontoreca",
    "con la garcha cuesquina sapreturga.",
    "Diquelón, el sinfurcio, flamenurga",
    "con carrucios de ardoz en la testeca,",
    "y en limpornia simplaque y con merleca",
    "se amancoplan Segriz y Trampalurga.",
    "La chalema ni encurde ni arropija;",
    "la redocla ni enchufa ni escoriaza,",
    "y en chimplando en sus trepas la escondrija",
    "con casconia ventral que encalambrija",
    "dice la escartibuncia mermelaza:",
    "«¡Qué inocentividad tan cuncurrija!»"
];

let acordesString = "Amin|Bmin|Cmaj|Dmin|Emin|Fmaj|Gmaj";

/*
Ejercicio 1.- Las canciones se componen de una letra y una sucesión de acordes musicales. En este caso tenemos la letra, almacenada en el array "versos", y una sucesión de acordes, almacenados en el string "acordesString". A partir de esta estructura, desarrolla:

a) (0.5 puntos) un array llamado "acordes" que divida "acordesString" en sus diferentes acordes, que se hallan separados por el carácter "|".
*/

let acordes = acordesString.split("|");
console.log(acordes);

/*
b)  (1 puntos) un array cuya longitud será igual a la longitud de "versos", y que contendrá acordes aleatorios, extraidos del array "acordes". A continuación un ejemplo de como debe resultar:
    acordesVersos = ["Bmin","Gmaj",...,"Emin"];
*/

let acordesVersos = [];
for (let index = 0; index < versos.length; index++) {
    acordesVersos[index] = acordes[Math.floor(Math.random() * acordes.length)];
}
console.log(acordesVersos);

/*
c) (1 puntos) el array obtenido en el punto anterior debe ser integrado en el array versos. A continuación un ejemplo de como debe resultar:
    let versos=[
        ["Bmin","Como el fasgo central de la pandurga"],
        ["Gmaj","remurmucia la pínola plateca"],
        .
        .
        .
        ["Emin","«¡Qué inocentividad tan cuncurrija!»"]
    ];
*/
let versosConAcordes = [];
for (let index = 0; index < versos.length; index++) {
    versosConAcordes[index] = [
        acordesVersos[index],
        versos[index]
    ];
}
console.log(versosConAcordes);

/*
d) (0.5 puntos) quédate solo con los 4 primeros acordes de "acordesVerso", es decir, elimina el resto. A continuación un ejemplo de como debe resultar:
    ["Bmin","Gmaj","Dmin","Amin"]
*/

acordesVersos = acordesVersos.slice(0, 4);
console.log(acordesVersos);

/*
e) (2 puntos) modifica las columnas 0 de cada fila del array "versos" para que contenga elo estos 4 acordes, de forma que se repitan cada 4 versos. A continuación un ejemplo de como debe resultar:

    let versos=[
        ["Bmin","Como el fasgo central de la pandurga"],
        ["Gmaj","remurmucia la pínola plateca"],
        ["Dmin","así el chungo del gran Perrontoreca"],
        ["Amin","con la garcha cuesquina sapreturga."],
        ["Bmin","Diquelón, el sinfurcio, flamenurga"],
        ["Gmaj","con carrucios de ardoz en la testeca,"],
        ["Dmin","y en limpornia simplaque y con merleca"],
        ["Amin","se amancoplan Segriz y Trampalurga."],
        ["Bmin","La chalema ni encurde ni arropija;"],
        ["Gmaj","la redocla ni enchufa ni escoriaza,"],
        ["Dmin","y en chimplando en sus trepas la escondrija"],
        ["Amin","con casconia ventral que encalambrija"],
        ["Bmin","dice la escartibuncia mermelaza:"],
        ["Gmaj","«¡Qué inocentividad tan cuncurrija!»"]
    ];
*/

let versosRepiteAcordes = [];
let repiteAcordes = 0;
for (let index = 0; index < versos.length; index++) {
    if (repiteAcordes == acordesVersos.length) repiteAcordes = 0;
    versosRepiteAcordes[index] = [
        acordesVersos[repiteAcordes],
        versos[index]
    ];
    repiteAcordes++;
}
console.log(versosRepiteAcordes);
/*
f) (1 puntos) Muestra por pantalla el resultado de la siguiente forma:

        Bmin
        Como el fasgo central de la pandurga
        Gmaj
        remurmucia la pínola plateca
        Dmin
        así el chungo del gran Perrontoreca
        Amin
        con la garcha cuesquina sapreturga.
        Bmin
        Diquelón, el sinfurcio, flamenurga
        Gmaj
        con carrucios de ardoz en la testeca,
        Dmin
        y en limpornia simplaque y con merleca
        Amin
        se amancoplan Segriz y Trampalurga.
        Bmin
        La chalema ni encurde ni arropija;
        Gmaj
        la redocla ni enchufa ni escoriaza,
        Dmin
        y en chimplando en sus trepas la escondrija
        Amin
        con casconia ventral que encalambrija
        Bmin
        dice la escartibuncia mermelaza:
        Gmaj
        «¡Qué inocentividad tan cuncurrija!»

*/

for (let index = 0; index < versosRepiteAcordes.length; index++) {
    document.getElementById("salida").innerHTML += versosRepiteAcordes[index][0]+"<br>";
    document.getElementById("salida").innerHTML += versosRepiteAcordes[index][1]+"<br>";    
}