$(document).ready(function () {
  console.log(true);
  $('.main-slider').slick({
    dots: true,
    fade: true,
    speed: 1000,
    arrows: false,
    autoplay: true,
    draggable: true,
    autoplaySpeed: 4000,
  });

  var onAir = $('#audio-onair')[0];
  var isPlaying = false;

  function togglePlay() {
    isPlaying ? onAir.pause() : onAir.play();
  }

  onAir.onplaying = function () {
    isPlaying = true;
  };
  onAir.onpause = function () {
    isPlaying = false;
  };

  $('#play-onair').click(function (event) {
    togglePlay();
    $(this).toggleClass("playing")
  });
});
