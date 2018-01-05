


$(function() {

    $(document).ajaxStart(function(){
        // $("#wait").css("display", "block");
        // $('#overlay-load').css("display", "block");
    });
    $(document).ajaxComplete(function(){
        // $("#wait").css("display", "none");
        // $('#overlay-load').css("display", "none");
    });

    var storedSHA;


//    $("#password").keyup(function () {
//            var value = $(this).val();
//            //$("#storedSHA").text(sha256_digest(value));
//            //$("#storedSHA").text(sha256_digest(value));
//
//            storedSHA = sha256_digest(value);
//            //console.log(value +"  "+ storedSHA);
//
//    }).keyup();

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            //$('#wait').attr('src','/assets/images/loader-64x/Preloader_2.gif');
            console.log("step1");
            // $('.overlayLoading').show();
            console.log("step2");
            if($form[0].id == "login-form"){

                // get values from Contact Me FORM
                var userName = $("input#userName").val();
                var password =sha256_digest($("input#password").val()); // storedSHA;//
                var rememberMe= $('#rememberMe').is(":checked");
                //console.log(userName);
                //console.log(password);

                

                $.ajax({
                    url: 'login_process.php',
                    type: "POST",
                    data: {
                        userName : userName,
                        password : password,
                        rememberMe : rememberMe
                    },
                    cache: false,
                    success: function(res) {
                        // $('.overlayLoading').hide();
                        // Success message
                        //console.log(password);
                        $('#success').html("<div class='alert alert-success'>");
                        $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-success')
                            .append("<strong>Your message has been sent. <br> * Note : Please check your spam folder if you have not received the email. </strong>");
                        $('#success > .alert-success')
                            .append('</div>');

                        console.log("It works");
                        $('#login-form').trigger("reset");
                        //clear all fields
                        console.log(res);
                        if(res=='success'){
                          window.location.replace("home.php");
                        }



                    },
                    error: function(data) {
                        // $('.overlayLoading').hide();
                        // Fail message
                        $('#success').html("<div class='alert alert-danger'>");
                        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");

                        $('#success > .alert-danger').append("<strong>Sorry, there seems to be a network error, please try again with a different network!");

                        $('#success > .alert-danger').append('</div>');
                        //clear all fields
                        $('#login-form').trigger("reset");

                    },
                });

            }

        },
        filter: function() {
            return $(this).is(":visible");
        },
    });
    

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


$('#register-button').click(function() {

window.open('register.php','_blank');
win.focus();
   });

/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});

$('#contactSubmit').click(function() {
    $('#success').html('');
});

// function validate(){
// var username = document.forms["login-form"]["userName"].value;
//     if (username == ""){
//         alert ("Missing username")
//     } 
// var password = document.forms["login-form"]("password").value;
// if (password == ""){
//         alert ("Missing password")
//     }  // Redirecting to other page.
// return false;
// }
