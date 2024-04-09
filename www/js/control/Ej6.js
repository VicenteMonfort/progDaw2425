/* Este ejercicio se puede hacer con un cálculo matemático, pero lo vamos a resolver con bucles */

let personaA = 70;
let personaB = 150;

document.getElementById("entradas").innerHTML += "Persona A está en el kilómetro " + personaA +"<br>";
document.getElementById("entradas").innerHTML += "Persona B está en el kilómetro " + personaB +"<br>";


do {
    personaA++;
    personaB--;
} while (personaA != personaB);

// daría lo mismo usar personaB, dado que en este momento son iguales
document.getElementById("salidas").innerHTML += "Las dos personas se encuentran en el punto kilométrico " + personaA + "<br>";