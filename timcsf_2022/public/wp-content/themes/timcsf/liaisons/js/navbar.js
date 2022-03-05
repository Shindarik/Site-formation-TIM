$(window).on("scroll", function(){
    if ($(window).scrollTop() >= 100){
        $(".entete").css("background-color", "rgba(17,17,17,0.8)");
        $(".entete *").css("color", "white");
        $(".burgerBtnOpen").css("border-color", "white");
        $(".burgerBtnOpen img").css("filter", "invert(100%)");
        $(".entete__logo img").css("filter", "invert(100%)");
    } else{
        $(".entete").css("background-color", "");
        $(".entete *").css("color", "");
        $(".burgerBtnOpen").css("border-color", "");
        $(".burgerBtnOpen img").css("filter", "");
        $(".entete__logo img").css("filter", "");
    }
});


$(".burgerBtnOpen").on("click", function (){
    $(".navBurger .navigation").css('display', '');
    $(".navBurger .navigation").css('visibility', 'visible');
    $(".navBurger .navigation").css('right', '0%');
});

$(".burgerBtnClose").on("click", function (){
    $(".navBurger .navigation").css('right', '-100%');
    $(".navBurger .navigation").css('display', '');
    $(".navBurger .navigation").css('visibility', 'visible');
});