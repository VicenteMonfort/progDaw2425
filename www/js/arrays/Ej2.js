let arr=['Ana','Oswaldo','Raul','Celia','Maria','Antonio'];

document.getElementById("entradas").innerHTML += "Clasificación inicial:<br>" + arr.join("-") + "<br>";

arr.splice(2,2,arr[3],arr[2]);
document.getElementById("salidas").innerHTML += "Celia adelanta a Raul:<br>" + arr.join("-") + "<br>";

arr.pop();
document.getElementById("salidas").innerHTML += "Antonio es eliminado:<br>" + arr.join("-") + "<br>";

arr.splice(1,0,'Roberto','Amaya');
document.getElementById("salidas").innerHTML += "Roberto y Amaya entran en la lista:<br>" + arr.join("-") + "<br>";

arr.unshift('Marta');
document.getElementById("salidas").innerHTML += "Marta entra en la lista, la primera:<br>" + arr.join("-") + "<br>";