let horas = parseInt(prompt('Escribe cuantas horas trabajó en la semana: '));
let precioHora = parseInt(prompt('Escribe el precio por hora: '));

let sueldoSemanal = horas * precioHora;

document.getElementById("resultado").innerHTML = "El trabajador cobra semanalmente: " + sueldoSemanal;