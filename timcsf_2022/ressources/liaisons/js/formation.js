$(".boutons button").on("click", function(){
    $(".boutons button").removeClass("active");
    $(this).addClass("active");
    let axe = $(this).attr("data-card");
    $(".card").removeClass("active");
    $(".card."+axe).addClass("active");
});