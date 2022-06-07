$(document).ready(function() {
    $("body").addClass("arise");
  $(".submit").click(function(){
    $(this).closest(".opening").toggleClass("flip");
  });

});