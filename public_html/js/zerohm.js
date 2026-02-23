$( document ).ready(function() {
  //console.log("ready");

$("#zeroOhmForm").on("submit", false);
submitButton = $("#sendButton");

submitButton.click(function(e) {
    if ($("#zeroOhmForm")[0].checkValidity()) {
      console.log('valid');
        $( "#formArea" ).fadeOut( "fast", function() {
    // Animation complete.
        $.post("contact_swifter.php", $.param($("#zeroOhmForm").serializeArray()), function(data) {
          $("#formArea").html(data);
          $("#formArea").fadeIn("fast", function(){

          });
          });
          
        });
    };

});

    /*$( "#zeroOhmForm" ).on( "submit",  function() {
      event.preventDefault();
     // console.log("clicked sendButton");
      $( "#formArea" ).fadeOut( "fast", function() {
    // Animation complete.
        $.post("contact_swifter.php", $.param($("#zeroOhmForm").serializeArray()), function(data) {
          $("#formArea").html(data);
          $("#formArea").fadeIn("fast", function(){

          });
          
        });
      });
    });*/
});

$('.carousel').carousel({
  interval: 10000
})