window.onload= function(){
    document.getElementById("btnGuardar").addEventListener("click", ()=>{
     Nombre = document.getElementById('inpNombre').value
     Foto = document.getElementById('inpImagen').value
     Efecto = document.getElementById('inpEfecto').value
     lore = document.getElementById('inpLore').value
     fuerza = document.getElementById('inpFuerza').value
     detreza = document.getElementById('inpDestreza').value
     inteligencia = document.getElementById('inpInteligencia').value
     Fe = document.getElementById('inpFe').value
     Arcano = document.getElementById('inpArcano').value
     Espacios = document.getElementById('inpEspacios').value
    
    

     document.getElementById('txtModal').innerHTML="Nombre: " + Nombre + "<br> Efecto: " + Efecto
     + "<br> Lore: " + lore + "<br> Fuerza: " + fuerza + "<br> Destreza: " + detreza + "<br> Inteligencia: " + inteligencia
     + "<br> Fe: " + Fe + "<br> Arcano: " + Arcano + "<br> Espacios: " + Espacios
    
    document.getElementById("imgModal").src=Foto;
})
    
}
