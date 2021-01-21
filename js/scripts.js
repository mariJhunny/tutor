jquery('document').ready(function($){
    var menubtn=$('.menu-movil'),
    menu = $('.nav.navegacion-principal');
    menubtn.click(function(){
        if(menu.hasClass('show')){
            menu.removeClass('show');
        }else{
            menu.addClass('show');
        }
    });
 });