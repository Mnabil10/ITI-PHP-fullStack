var animationSpeed = 1000; // How quickly the next slide animates.
var pause = 3000; // The pause between each slide.
var interval;

function startSlider() {}
interval = setInterval(function() {
    $('.slides > li:first')
  .fadeOut(animationSpeed)
  .next()
  .fadeIn(animationSpeed)
  .end()
  .appendTo('.slides');
}, pause);
$('.pause').click(function() {
	clearInterval(interval);
});

