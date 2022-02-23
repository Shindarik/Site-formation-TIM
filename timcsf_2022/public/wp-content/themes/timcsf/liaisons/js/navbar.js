$(window).on("scroll", function(){
    if ($(window).scrollTop() >= 100){
        $(".entete").css("background-color", "#111");
        $(".entete *").css("color", "white");
        $(".entete__logo img").css("filter", "invert(100%)");
    } else{
        $(".entete").css("background-color", "");
        $(".entete *").css("color", "");
        $(".entete__logo img").css("filter", "");
    }
});