$(document).ready(function() {
  $(".color-picker").click(function() {
    var color = $(this).css("background-color");
    $(".column-front").css("background-color",color);
  });
});
