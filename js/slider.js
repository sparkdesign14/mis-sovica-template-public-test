
$('.carousel').carousel({
  interval: 5000
});


(function($) {
  $(document).ready(function() {
    $('.main-carousel-flicker').flickity({
      // cellAlign: 'left',
      // // freeScroll: true,
      // wrapAround: true
      initialIndex: 1,
    });

  });
})(jQuery)
