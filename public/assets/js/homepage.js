$(".slideshows > .slide:gt(1)").hide();

setInterval(function() {
  $('.slideshows > .slide:first')
    .fadeOut(3000)
    .next()
    .fadeIn(3000)
    .end()
    .appendTo('.slideshows');
},  6000);
