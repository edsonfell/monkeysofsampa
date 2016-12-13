$(document).ready(function() {
    $(".button-collapse").sideNav();
    $('.slider').slider({
        full_width: true,
        interval:4000   
    });
  $('.parallax').parallax();  
  
  // executa a modal 
  $('.modal-trigger').leanModal();
});