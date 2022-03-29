$(document).ready(function (){
    $('.header_burger').click(function (event){
       $('.header_burger, .menu_back').toggleClass('active');
       // $('.logo_img').toggleClass('none');
       $('.menu').slideToggle();
    });
 });
 
 