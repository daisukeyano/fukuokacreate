$(function() {
  slideQa();
});

let slideQa = function() {
  $('.qa-q').on('click', function() {
    $(this).toggleClass('open');
    $(this).next('.qa-a').slideToggle();
  });
}