$(document).ready(()=>{
    users()
   
 })
 const users= ()=>{
     $.ajax(
     {
         type:'GET',
         url: './consulta.php',
         contentType: 'application/json',
         async: true,
         success: (usuarios)=> {console.log(usuarios)
         const usu= JSON.parse(usuarios)
         $("#jsGrid").jsGrid({
         width: "100%",
         height: "400px",
        
         inserting: true,
         editing: true,
         sorting: true,
         paging: true,
     
         data: usu,
     
         fields: [
             { name: "Id_nino", type: "number", width: 150, validate: "required" },
             { name: "nombre", type: "text", width: 50 },
            
             //{ name: "Country", type: "select", items: countries, valueField: "Id", textField: "Name" },
             
             { type: "control" }
         ]
     });
         },
         error: (error)=> console.log(error),
     }
     )
 }