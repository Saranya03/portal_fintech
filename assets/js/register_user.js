var capResponse = "";
var capSuccess;
var global = this;
function recaptchaCallback(response) {
    capResponse = response;
}

function checkname() {
    var element=this;
    var usernameElement = document.getElementById("username");
    if($("input#username").val()==""){
        usernameElement.setCustomValidity('Enter a user name');
    }
    else{
    $.ajax({
        url: validateUsername+ $("input#username").val(),
        type: "get", //send it through get method
        data: {},
        success: function (response) {
            usernameElement.setCustomValidity('');
           // console.log("username valid");
        },
        error: function (xhr) {
            
            usernameElement.setCustomValidity(xhr.responseJSON.message);//'username already exists');
           // document.getElementById("username").setCustomValidity(xhr.responseJSON.message);
        }
    });
    }
}

function checkemail() {
   // var element=this;
    var emailElement=document.getElementById("email");
    var re = /^\"?[\w-_\.]*\"?@[a-z0-9.-]+\.[a-z]{2,3}$/;
    if($("input#email").val()==""){
         emailElement.setCustomValidity('Enter email id');
    }
    else if(!re.test($("input#email").val())){
        emailElement.setCustomValidity('Enter a valid email id');
    }
    else{
    $.ajax({
        url: validateUsername + $("input#email").val(),
        type: "get", //send it through get method
        data: {},
        success: function (response) {
            emailElement.setCustomValidity('');
        },
        error: function (xhr) {
            //emailElement.setCustomValidity(xhr.responseJSON.message);
            emailElement.setCustomValidity(xhr.responseJSON.message);

        }
    });
    }
}

function checkdate() {
    var dobElement = document.getElementById("dateofbirth");
    var dob = $("input#dateofbirth").val();
    var dobDate = new Date(dob);
    var now = new Date();
    if(dobDate==""){
     dobElement.setCustomValidity("Enter Date of Birth");

    }
    else if (dobDate > now) {
   // alert("Date must be in the past");
       dobElement.setCustomValidity("Enter valid Date of Birth");
   }
    
    /*else if (now.getFullYear-dobDate.getFullYear<12){
        dobElement.setCustomValidity("Enter valid Date of Birth");
    }*/
}

function checkPassword(){
    var element = this;
    var password =  document.getElementById("password"); //$("input#password").val();
    var confirm_password =  document.getElementById("confirm_password");//$("input#confirm_password").val();
    //console.log(reenterpassword);
    var Spassword = sha256_digest(password.value);
	
    var Sconfirm_password = sha256_digest(confirm_password.value);

//                //console.log(reenterpassword);
//                if(Spassword!=Sreenterpassword){
//                    element.setCustomValidity("Password does not match!!");
//                }else{
//                    element.setCustomValidity("");
//                }
//    
        var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
        
        if(password.value == ""){
            password.setCustomValidity("Please enter your password here");
        }else if(!re.test(password.value)){
            password.setCustomValidity("error : Invalid password format. Please make sure your password contains: \n1) Atleast 6 characters. \n2) Atleast 1 number. \n3) Atleast 1 uppercase letter. \n4) Atleast 1 lowercase letter. \n5) Atleast 1 special character.");
        }
/*        
        if(Spassword != Sconfirm_password) {
            console.log("not match")
            confirm_password.setCustomValidity("Passwords don't match");
        } else {
            console.log("match")
            confirm_password.setCustomValidity("");
        }*/
}

function checkConfirmPassword(){
    var password =  document.getElementById("password"); //$("input#password").val();
    var confirm_password =  document.getElementById("confirm_password");//$("input#confirm_password").val();
    var Spassword = sha256_digest(password.value);
    var Sconfirm_password = sha256_digest(confirm_password.value);

    if(Spassword != Sconfirm_password) {
            console.log("not match");
            confirm_password.style.borderColor= "#E34234";
            confirm_password.setCustomValidity("Passwords don't match");
        } else {
            console.log("match");
            confirm_password.style.borderColor = "#000000"
            confirm_password.setCustomValidity("");
        }
}

function registerTeamVirtusa() {
    var username = $("input#username").val();
    var password = $("input#password").val();//sha256_digest($("input#password").val());
    var reenterpassword = sha256_digest($("input#confirm_password").val());
    var emailid = $("input#email").val();
    var title = $("input#title").val();
    var firstname = $("input#firstName").val();
    var lastname = $("input#lastName").val();
    var middlename = $("input#middlename").val();
    var prefferedname = $("input#preferredname").val();
    var sex = $("select#gender option:checked").val();
    var dateofbirth = $("input#dateofbirth").val();
    var countries = $("select#countries option:checked").text();


    var userData = new Object();
    userData.username = username;
    userData.password = password;
    userData.reenterpassword = reenterpassword;
    userData.email = emailid;
    userData.title = title;
    userData.firstName = firstname;
    userData.lastName = lastname;
    userData.middleName = middlename;
    userData.preferredName = prefferedname;
    userData.sex = sex;
    userData.dateOfBirth = dateofbirth;
    userData.country = countries;

//console.log(JSON.stringify(userData));


//    var storedSHA;
//    var restoredSHA;
//
//    $("#password").keyup(function () {
//            var value = $(this).val();
//            $("#storedSHA").text(sha256_digest(value));
//            storedSHA = value;
//    }).keyup();
//    $("#reenterpassword").keyup(function () {
//
//        
//    }).keyup();


    $.ajax({
        url: registerUser,
        type: "POST",
        data: JSON.stringify(userData),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        cache: false,
        success: function () {
            $('.overlayLoading').hide();
            var myNode = document.getElementById("section");
            myNode.innerHTML = '';

            $('#section').html('<div class="container"><div class="row"><div class="col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6"><div class="alert-message alert-message-success"><h4> Your have been Registered</h4> <a href="index.php/">Click here to login</a>\n</div></div></div></div>');


        },
        error: function (data) {
            $('.overlayLoading').hide();
            // Fail message

            if (data.responseJSON) {
                $('#success').html("<div class='alert alert-danger' style='font-size: 16px'>");
                $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>");
                // $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that the server is not responding. Please try again later!");

                $('#success > .alert-danger').append("<strong>" + data.responseJSON.message);

                $('#success > .alert-danger').append('</div>');
                //clear all fields
                // $('#contactForm').trigger("reset");
            } else {
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


}

/*function checkDuplicateEmail() {
    var element = this;
    var mail_value = $(this).val();
    if ($(this).val() == "") {
        return;
    }
    else {
        $.ajax({
            url: "http://52.14.115.236:8080/teamvirtusa/checkDuplicateEmail/" + mail_value,
            type: "get", //send it through get method
            data: {},
            statusCode: {
                500: function (response) {
                    element.setCustomValidity(response.responseJSON.message);//'Email already exists in the database');
                }
            },
            statusCode: {
                406: function (response) {
                    element.setCustomValidity('');//'Email already exists in the database');
                }
            },


            success: function (response) {
                $('.overlayLoading').hide();
                element.setCustomValidity('');


            },
            error: function (response) {
                $('.overlayLoading').hide();
                element.setCustomValidity(response.responseJSON.message);
            }
        });
    }
}*/

$(function () {

    $('input[name*="mail"]').change(function () {

        var $current = $(this);

        $('input[name*="mail"]').each(function () {
            if ($(this).val() == $current.val() && $(this).attr('id') != $current.attr('id')) {
                //var element = $(this)[0];
                //element.setCustomValidity("Duplicate Email found !");
                alert("Duplicate Email Found");
            }
        });
    });
});

$(function () {

    $('input[name*="name"]').change(function () {

        var $current = $(this);

        $('input[name*="name"]').each(function () {
            if ($(this).val() == $current.val() && $(this).attr('id') != $current.attr('id')) {
                var element = $(this)[0];
                //$('input[name*="name"]')[0].setCustomValidity("Duplicate Nickname found !");
                //return false;
		alert("Duplicate Nickname Found");
            }
        });
    });
});

$(function () {

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function ($form, event, errors) {
            // additional error messages or events

        },
        submitSuccess: function ($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            $('.overlayLoading').show();

            if (capResponse == "" ) { //testing
                alert("Please Check Captcha");

            }
            else {

                var URL = "proxy.php?url=" + "https://www.google.com/recaptcha/api/siteverify?secret=6Lc_iy4UAAAAAMcVYm23M393qhsvcf-SPY0Kha3h&response=" + capResponse;
                $.ajax({
                    url: "proxy.php?url=" + capResponse,
                    type: "get", //send it through get method
                    dataType: 'json',
                    statusCode: {
                        500: function () {
                        }
                    },
                    success: function (response) {
                        $('.overlayLoading').hide();
                        registerTeamVirtusa();

                    },
                    error: function (response) {
                        $('.overlayLoading').hide();
                        registerTeamVirtusa(); //testing

                    }
                });
            }
        },
        filter: function () {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function (e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function () {
    $('#success').html('');
});

$('#contactSubmit').click(function () {
    $('#success').html('');
});

$(document).ready(function (emailid) {

    // Loading Animation
    setTimeout(function () {
        $(".se-pre-con").fadeOut("slow");
    }, 5000);
/*
    function validateEmail() {
        //console.log($(this).val());
        var re = /^\"?[\w-_\.]*\"?@virtusapolaris\.com$/;
        if (re.test($(this).val())) {
            this.setCustomValidity('');
        } else {
            this.setCustomValidity("Please enter a valid Virtusa email address");
        }
    }
*/
    //$("input#emailid").onchange = validateEmail;
    //$("input#emailid").onkeyup = validateEmail;

    $("input#username").onchange = checkname;
    $("input#username").onkeyup = checkname;
    
    $("input#confirm_password").onchange = checkPassword;
    $("input#confirm_password").onkeyup = checkPassword;

});
