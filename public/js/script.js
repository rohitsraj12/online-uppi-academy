$(document).ready(function () {

    $("#hamberger").click(function () {
      $(this).toggleClass("is__active");
      $("#header-nav ul").slideToggle(400);
    });
    
  });