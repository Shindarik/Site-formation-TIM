$(window).on("scroll", function(){
    if ($(window).scrollTop() >= 100){
        $(".entete").css("background-color", "rgba(17,17,17,0.8)");
        $(".entete *").css("color", "white");
        $(".entete__logo img").css("filter", "invert(100%)");
    } else{
        $(".entete").css("background-color", "");
        $(".entete *").css("color", "");
        $(".entete__logo img").css("filter", "");
    }
});