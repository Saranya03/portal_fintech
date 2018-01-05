$(function() {

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
            
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            $('.overlayLoading').show();
            // get values from FORM
            var username = $("input#username").val();
            var password = $("input#password").val();
            var email = $("input#email").val();
            var firstName = $("input#firstName").val();
            var lastName = $("input#lastName").val();
            // Check for white space in name for Success/Fail message

            $.ajax({
                url: registerAPI,
                type: "POST",
                data: JSON.stringify({
                    "username" : username,
                    "password" : password,
                    "email" : email,
                    "firstName" : firstName,
                    "lastName" : lastName
                }),
                contentType: "application/json; charset=utf-8",
                dataType   : "json",
                cache: false,
                success: function() {
                    $('.overlayLoading').hide();
                    var myNode = document.getElementById("section");
                    myNode.innerHTML = '';

                    $('#section').html('<div class="container"> <div class="row"> <div class="col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6""> <div class="alert-message alert-message-success"> <h4> Your account has been created</h4> \n <p> <b> Thank you</b>, your API Exchange Store and Dokuwiki accounts have been created. </p> <p>  Wiki : <a target="_blank" href="http://portal.vp-fintech.com/dokuwiki/doku.php?id=start&do=login&sectok=cecab42417903d1b031d8a2ae84aa37a/">Wiki Login</a> <br/> API Publisher : <a target="_blank" href="https://api.vp-fintech.com/publisher/">API Publisher Login</a> <br/> API Store : <a target="_blank" href="https://api.vp-fintech.com/store/">API Store Login</a> </p> <p> * Note : Please check your spam folder if you have not received the email.  </p> </div> </div> </div> </div>');
                    
                    // Success message
                    // window.location.replace("https://52.14.117.187:9443/store/site/pages/login.jag");
                },
                error: function(data) {
                    $('.overlayLoading').hide();
                    if(data.responseJSON){
                        console.log("^^^");
                    }else{
                        console.log("****");
                    }
                    
                    // Fail message
                    
                    if(data.responseJSON){
                        $('#success').html("<div class='alert alert-danger' style='font-size: 16px'>");
                        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        // $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that the server is not responding. Please try again later!");
                        
                        $('#success > .alert-danger').append("<strong>" + data.responseJSON);

                        $('#success > .alert-danger').append('</div>');
                        //clear all fields
                        // $('#contactForm').trigger("reset");
                    }else{
                        $('#success').html("<div class='alert alert-danger' style='font-size: 16px'>");
                        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        // $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that the server is not responding. Please try again later!");

                        // console.log(data);

                        $('#success > .alert-danger').append("<strong>Sorry, there seems to be a network error, please try again with a different network!");

                        $('#success > .alert-danger').append('</div>');
                        //clear all fields
                        // $('#contactForm').trigger("reset");
                    }
                    
                },
            });
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


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});

$('#contactSubmit').click(function() {
    $('#success').html('');
});

$( document ).ready(function() {
    
    // Loading Animation
    setTimeout(function() {
        $(".se-pre-con").fadeOut("slow");
    }, 5000);
    
    var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
        var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
        
        if(password.value == ""){
            password.setCustomValidity("Please enter your password here");
        }else if(!re.test(password.value)){
            password.setCustomValidity("Invalid password format. Please make sure your password contains: \n1) Atleast 6 characters. \n2) Atleast 1 number. \n3) Atleast 1 uppercase letter. \n4) Atleast 1 lowercase letter. \n5) Atleast 1 special character.");
        }
        
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords don't match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
    
    var username = document.getElementById("username");

    function validateUsername(){
        if (/^[a-z]+$/.test(username.value)){
            username.setCustomValidity('');
        } else {
            username.setCustomValidity("Username should contain lowercase letters only");
        }
    }
    
    function isLowerCase(myString) { 
        return (myString == myString.toLowerCase()); 
    }       

    username.onchange = validateUsername;
    username.onkeyup = validateUsername;

    function validateEmail(){
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(re.test(email.value)){
            email.setCustomValidity('');
        } else{
            email.setCustomValidity("Invalid email address");
        }

    }

    email.onchange = validateEmail;
    email.onkeyup = validateEmail;

    function validateFirstName(){
        if (/^[a-zA-Z\s]*$/.test(firstName.value)) {
            firstName.setCustomValidity('');
        } else{
            firstName.setCustomValidity('Invalid first name');
        }
    }

    firstName.onchange = validateFirstName;
    firstName.onkeyup = validateFirstName;


    function validateLastName(){
        if (/^[a-zA-Z\s]*$/.test(lastName.value)) {
            lastName.setCustomValidity('');
        } else{
            lastName.setCustomValidity('Invalid last name');
        }

    }

    lastName.onchange = validateLastName;
    lastName.onkeyup = validateLastName;
    
});
