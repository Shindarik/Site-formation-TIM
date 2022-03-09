$(document).ready(function (){
    $('.p2').hide();
});


$('.etudiantPhoto').on("mouseenter", function (){
   $('.p1').hide();
   $('.p2').show();
});

$('.etudiantPhoto').on("mouseleave", function (){
    $('.p2').hide();
    $('.p1').show();
});