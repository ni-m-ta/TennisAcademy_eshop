$(function () {
    $(".top-slide").slick({
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
      centerMode: true,
      centerPadding: "30px",
      dots: true,
      // fade: true,
      slidesToShow: 3,
      speed: 400,
    });
  });

$('#hide-text').click(function(){
    $('#text').hide();
});
