var currentSlide = 1;

$(".dot[data-slide="+currentSlide+"]").css('background-color', "#111");

$(".nextSlide").on("click", ()=>{
   if (currentSlide < 3){
      $(".slide[data-slide="+currentSlide+"]").hide();
      $(".dot[data-slide="+currentSlide+"]").css('background-color', "transparent");
      currentSlide++;
      $(".slide[data-slide="+currentSlide+"]").show();
      $(".dot[data-slide="+currentSlide+"]").css('background-color', "#111");
   }else if(currentSlide == 3){
      $(".slide[data-slide="+currentSlide+"]").hide();
      $(".dot[data-slide="+currentSlide+"]").css('background-color', "transparent");
      currentSlide = 1;
      $(".slide[data-slide="+currentSlide+"]").show();
      $(".dot[data-slide="+currentSlide+"]").css('background-color', "#111");
   }
});

$(".prevSlide").on("click", ()=>{
   if (currentSlide > 1){
      $(".slide[data-slide="+currentSlide+"]").hide();
      $(".dot[data-slide="+currentSlide+"]").css('background-color', "transparent");
      currentSlide--;
      $(".slide[data-slide="+currentSlide+"]").show();
      $(".dot[data-slide="+currentSlide+"]").css('background-color', "#111");
   }else if(currentSlide == 1){
      $(".slide[data-slide="+currentSlide+"]").hide();
      $(".dot[data-slide="+currentSlide+"]").css('background-color', "transparent");
      currentSlide = 3;
      $(".slide[data-slide="+currentSlide+"]").show();
      $(".dot[data-slide="+currentSlide+"]").css('background-color', "#111");
   }
});