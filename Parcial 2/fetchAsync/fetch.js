    window.onload = function(){
        document.getElementById("cambio").addEventListener("click", async function(){
            let respuesta = await fetch('http://worldtimeapi.org/api/timezone/America/Monterrey');
            let datojson = await respuesta.json();
            document.getElementById("Prueba").innerHTML= datojson.datetime
        })
    }
        
      