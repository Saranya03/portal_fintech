$('#logut-button').click(function() {

$.ajax({
 type: "GET",
 url: "logout.php",

}).done(function( msg ) {

    window.location.replace("home.php");

});

   });
