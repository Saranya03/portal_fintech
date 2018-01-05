$(function() {
    
    $(document).ajaxStart(function(){
        // $("#wait").css("display", "block");
        // $('#overlay-load').css("display", "block");
    });
    $(document).ajaxComplete(function(){
        // $("#wait").css("display", "none");
        // $('#overlay-load').css("display", "none");
    });

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            //$('#wait').attr('src','/assets/images/loader-64x/Preloader_2.gif');
            console.log("step1");
            $('.overlayLoading').show();
            console.log("step2");
            if($form[0].id == "contactForm"){
                
                // get values from Contact Me FORM
                var name = $("input#name").val();
                var email = $("input#email").val();
                var message = $("textarea#message").val();
                var firstName = name; // For Success/Failure Message
                // Check for white space in name for Success/Fail message
                if (firstName.indexOf(' ') >= 0) {
                    firstName = name.split(' ').slice(0, -1).join(' ');
                }
                $.ajax({
                    url: contactmeAPI,
                    type: "POST",
                    data: JSON.stringify({
                        "name" : name,
                        "email" : email,
                        "message" : message
                    }),
                    contentType: "application/json; charset=utf-8",
                    dataType   : "json",
                    cache: false,
                    success: function() {
                        $('.overlayLoading').hide();
                        // Success message
                        $('#success').html("<div class='alert alert-success'>");
                        $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-success')
                            .append("<strong>Your message has been sent. <br> * Note : Please check your spam folder if you have not received the email. </strong>");
                        $('#success > .alert-success')
                            .append('</div>');

                        console.log("It works");
                        //clear all fields
                        $('#contactForm').trigger('reset');
                    },
                    error: function(data) {
                        $('.overlayLoading').hide();
                        // Fail message
                        $('#success').html("<div class='alert alert-danger'>");
                        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        
                        $('#success > .alert-danger').append("<strong>Sorry, there seems to be a network error, please try again with a different network!");
                        
                        $('#success > .alert-danger').append('</div>');
                        //clear all fields
                        $('#contactForm').trigger("reset");
                    },
                });
                
            }else if($form[0].id == "cicdForm"){
                
                // get values from Contact Me FORM
                var name = $("input#name").val();
                var email = $("input#email").val();
                var projectName = $("input#projectName").val();
                var projectDescription = $("input#projectDescription").val();
                var url = $("input#url").val();
                var buildUsername = $("input#buildUsername").val();
                var GITpassword = $("input#GITpassword").val();
                
                var mavenRadioButton = document.getElementById('mavenRadioButton');
                var antRadioButton = document.getElementById('antRadioButton');
                var otherRadioButton = document.getElementById('otherRadioButton');
                
                var buildScript = "";
                var radioButton = "";
                
                if(mavenRadioButton.checked){
                    radioButton = "maven";
                }else if(antRadioButton.checked){
                    radioButton = "ant";
                }else{
                    radioButton = $("input#buildScript").val();
                }
                
                var sourceLocation = $("input#sourceLocation").val();
                var binariesLocation = $("input#binariesLocation").val();
                var librariesLocation = $("input#librariesLocation").val();

                $.ajax({
                    url: "http://52.14.93.245:10010/tempoRegister",
                    type: "POST",
                    data: JSON.stringify({
                        "name" : name,
                        "email" : email,
                        "projectName" : projectName,
                        "projectDescription" : projectDescription,
                        "url" : url,
                        "buildUsername" : buildUsername,
                        "GITpassword" : GITpassword,
                        "buildTool" : radioButton,
                        "sourceLocation" : sourceLocation,
                        "binariesLocation" : binariesLocation,
                        "librariesLocation" : librariesLocation
                    }),
                    
                    contentType: "application/json; charset=utf-8",
                    dataType   : "json",
                    cache: false,
                    success: function() {
                        $('.overlayLoading').hide();
                        var myNode = document.getElementById("section");
                        myNode.innerHTML = '';
    
                        $('#section').html('<div class="container"> <div class="row"> <div class="col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6""> <div class="alert-message alert-message-success"> <h4> Request has been sent</h4> \n <p> <b> Thank you </b>, Your Tempo account has been created. We will contact you once the CI/CD Environment has been Setup as per your request. </p><p> * Note : Please check your spam folder if you have not received the email. </p> <p>You can close this window now.</p></div> </div> </div> </div>');
                        //clear all fields
                        // $('#cicdForm').trigger('reset');
                    },
                    error: function(data) {
                        $('.overlayLoading').hide();
                        if(data.responseJSON){
                            // Fail message
                            $('#success').html("<div class='alert alert-danger'>");
                            $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                .append("</button>");
                            $('#success > .alert-danger').append("<strong>" + data.responseJSON);
                            
                            $('#success > .alert-danger').append('</div>');
                            // clear all fields
                            // $('#cicdForm').trigger("reset");
                        
                        }else{
                            
                            $('.overlayLoading').hide();
                            // Fail message
                            $('#success').html("<div class='alert alert-danger'>");
                            $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                .append("</button>");
                            $('#success > .alert-danger').append("<strong>Sorry, there seems to be a network error, please try again with a different network!");
                            
                            $('#success > .alert-danger').append('</div>');
                            // clear all fields
                            // $('#cicdForm').trigger("reset");
                            
                        }
                    },
                });
                
            }
            // console.log(event);
            
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
