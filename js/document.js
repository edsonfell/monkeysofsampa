$(document).ready(function() {
    $(".button-collapse").sideNav();
    $('.slider').slider({
        full_width: true,
        interval:4000   
    });
  $('.parallax').parallax();  
    
  $('.modal').modal();
    
  $("#mailBtn").click(function(){
    $('#mailModal').modal('open');
  });
    
  //$('#mailModal').modal();
});