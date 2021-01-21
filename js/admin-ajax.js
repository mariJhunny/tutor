$('#guardar-registro-archivo').on('submit',function(e){
    e.preventDefault();

    var datos = new FormData(this);
    $.ajax({
        type: $(this).attr('method'),
        data: datos,
        url: $(this).attr('action'),
        dataType:'json',
        contentType: false,
        processData: false,
        async: true,
        cache: false,
        success: function(data){
            console.log(data);
            var resultado = data;
            if(resultado.respuesta == 'exito'){
                swal(
                    'Correcto',
                    'Se guardo correctamente',
                    'success'
                )
            }else{
                swal(
                    'Error',
                    'Hubo un error',
                    'error'
                )
            }
        }
    })
});