$(function(){
    setInterval(function(){
      c = $('.slideshow').find('li');
      c.first().fadeOut(2000)
         .next().fadeIn(1000)
         .end().appendTo('.slideshow');}, 
      5000);
});