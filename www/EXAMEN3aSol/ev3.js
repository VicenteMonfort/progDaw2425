document.addEventListener("DOMContentLoaded", main);

function main() {
    document.getElementById("powerForm").addEventListener("submit", function (e) {
        e.preventDefault();
        loadData(this);
        document.getElementById("status").innerHTML = "Lights " + this.filter.value;
        document.getElementById("icon").src = "img/bulb-icon-" + this.filter.value + ".png";
        document.getElementById("container").className = "element " + this.filter.value;
    });
}

function loadData(form){
    const xhttp = new XMLHttpRequest();
    xhttp.addEventListener("readystatechange", function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let data = JSON.parse(this.responseText);
            document.getElementById("power").innerHTML = data["power"]+" W.";
            let percent = 100*data["power"]/data["total"];
            console.log(percent);
            document.getElementById("total").innerHTML = percent.toFixed(2)+"%";
        }
    });
    xhttp.open("POST", "monitor.php", true);
    xhttp.send(new FormData(form));
}
