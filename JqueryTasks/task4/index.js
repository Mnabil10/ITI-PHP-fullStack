$(function () {
    
    $(".img2").draggable({ revert: true});
    $("#shake").on("click", function () {
      $(".img2").effect("slide");
    });
    $(".img1").droppable({
        accept: ".img2",
        hoverClass: "ui-state-active",
        drop: function(event, ui) {
          $(".img2").addClass("disappear");
          
        }
      });
  });
  
