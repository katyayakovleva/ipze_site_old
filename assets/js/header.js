$(document).ready(function (){
    $('.head_menu ul ul, .head_menu ul ul ul').addClass('submenu');
    $('.head_menu ul').addClass('topmenu');
    $('.header_burger').click(function (event){
       $('.header_burger, .menu_back').toggleClass('active');
       // $('.logo_img').toggleClass('none');
       $('.head_menu').slideToggle();
    });
 });
 
 