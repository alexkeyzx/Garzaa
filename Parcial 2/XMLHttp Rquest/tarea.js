window.onload = function(){
document.getElementById("cambio").addEventListener("click", pedirHeader);

function pedirHeader(){
    var solicitud = new XMLHttpRequest();
    solicitud.onreadystatechange = function(){
        if(solicitud.readyState == 4){
            let datos = JSON.parse(this.responseText);
            console.log(datos.datetime)
            document.getElementById("Prueba").innerHTML = 'Hora: ' + datos.datetime;
            console.log(solicitud.responseText)
        }};
        solicitud.open("GET", 'http://worldtimeapi.org/api/timezone/America/Monterrey');
        solicitud.send();

}




}