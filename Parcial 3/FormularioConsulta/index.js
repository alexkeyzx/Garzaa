document.getElementById('consultarDatos').addEventListener('click',async(e)=>{
    e.preventDefault()
   
    const form = new FormData(document.getElementById('form'))


    const results = await fetch('consulta.php',{
        method:'POST',
        body: form
    })
    
    let data= await results.json()
    console.log(data)
    document.getElementById('Nombre').value = data.Nombre
    document.getElementById('Apellido').value = data.Apellido
   
        $('#modalID').modal('hide')
})