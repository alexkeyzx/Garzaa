
const Swal = require('sweetalert2')
document.getElementById("btnAlerta").addEventListener("click", ()=>{

    Swal.fire({
        title: 'Hola',
        showDenyButton: true,
        
        confirmButtonText: 'buenas tardes',
        denyButtonText: `no`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          Swal.fire('Saludos cordiales!', '', 'adios')
        } else if (result.isDenied) {
          Swal.fire('ok', '', 'adios')
        }
      })
    
})