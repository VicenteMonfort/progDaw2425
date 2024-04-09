
let totalSalarios = 0;
let precioHora = 10;
let numEmpleados = parseFloat(prompt("Cuantos empleados tiene la empresa? "));
document.getElementById("entradas").innerHTML += "Empleados de la empresa: " + numEmpleados + "<br>";

for (let empleado = 1; empleado <= numEmpleados; empleado++) {
    let horasTrabajadas = parseFloat(prompt("Cuantas horas trabajó el empleado " + empleado + "?: "));
    document.getElementById("entradas").innerHTML += "El empleado " + empleado + " trabajó " + horasTrabajadas + "<br>";
    let salarioEmpleado = horasTrabajadas * precioHora;
    document.getElementById("salidas").innerHTML += "El empleado " + empleado + " tiene un salario semanal de " + salarioEmpleado + "<br>";
    totalSalarios += salarioEmpleado;
}
document.getElementById("salidas").innerHTML += "La empresa gastó " + totalSalarios + " en salarios esta semana." + "<br>";
