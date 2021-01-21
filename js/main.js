function showMenus() {
    document.getElementById("Signup").style.display = "none";
    document.getElementById("Signin").style.display = "none";

}
function showLogued() {
    document.getElementById("Logout").style.display = "none";
}
//COLORBOX
$('.tema-info').colorbox({inline:true, width:"50%"});

//registro correcto
$(document).ready(function(){
    $('#registro').on('submit', function(e){
        e.preventDefault();
        var datos = $(this).serializeArray();
        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data){
                var resultado = data;
                if(resultado.respuesta == 'exito'){
                    swal(
                        'Correcto',
                        'El usuario se creo correctamente',
                        'clic'
                    )
                }else{
                    swal(
                        'Error',
                        'Hubo un error',
                        'clic'
                    )
                }
            }
        })
    });
});
/*$(document).ready(main);
var contador =1;
function main(){
    $('.menu_bar').clic(function(){
        //$('nav ul'.toggle())
        if(contador==1){
            $('nav ul').animate({
                left: '0'
            });
            contador=0;
        }else{
            $('nav ul').animate({
                left: '-100'
            }); 
            contador=1;
        }
    });
}*/