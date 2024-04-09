let dados = [[], []];
let resultados = [0,0,0];// [empate, gana 1, gana 2]
let tirada = [0, 0];
let jugadas = 10;
let jugadores = dados.length;

//relleno el array bidimensional con los resultados de los
//pares de dados de cada jugador en cada tirada
for (let ronda = 0; ronda < jugadas; ronda++) {
    document.getElementById("entradas").innerHTML += "<br>Ronda " + (ronda+1) + "<br>---------------------------<br>";
    for (let jugadorTira = 0; jugadorTira < jugadores; jugadorTira++) {
        tirada[0] = parseInt(Math.random() * 6 + 1);
        document.getElementById("entradas").innerHTML += "Jugador " + (jugadorTira + 1) + ": " + tirada[0] + "-";
        tirada[1] = parseInt(Math.random() * 6 + 1);
        document.getElementById("entradas").innerHTML += tirada[1] + "<br>";
        dados[jugadorTira].push(tirada[0] + tirada[1]);
    }
}

//relleno el array de resultados con los resultados de cada 
//ronda, acumulando el 0,1 o 2 según quien gana o si se empata
for (let ronda = 0; ronda < jugadas; ronda++) {
    if(dados[0][ronda]>dados[1][ronda]){
        resultados[1]++;
    }else if(dados[0][ronda]==dados[1][ronda]){
        resultados[0]++;
    }else{
        resultados[2]++;
    }
}


//Obtengo quien ha ganado más

document.getElementById("salidas").innerHTML +="Gana jugador 1 gana " + resultados[1] + " partidas<br>";
document.getElementById("salidas").innerHTML +="Gana jugador 2 gana " + resultados[2] + " partidas<br>";
document.getElementById("salidas").innerHTML +=resultados[0] + " partidas empatadas<br>";

if(resultados[1]>resultados[2]){
    document.getElementById("salidas").innerHTML +="Gana jugador 1 con un " + (100*resultados[1]/jugadas) + "%<br>";
}else if(resultados[1]==resultados[2]){
    document.getElementById("salidas").innerHTML +="Empatan a " + resultados[1] + " victorias cada uno<br>";
}else{
    document.getElementById("salidas").innerHTML +="Gana jugador 2 con un " + (100*resultados[2]/jugadas) + "%<br>";
}

