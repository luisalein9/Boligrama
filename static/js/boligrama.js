function pintaSiguiente(matricula){
	alert(base);
       
    var url= base + 'index.php/boligrama_c/coloreaSiguiente/'+ matricula;

    var data = 'matricula='+matricula;

    $.ajax({
    
        url: url,
    
        data: data,
        
        type: 'POST',
                
        success: function(data){
            alert("Exito");
              
        },
        
        error: function(){
        
           alert("no se pudo eliminar dirección");
        }
    
    });
}