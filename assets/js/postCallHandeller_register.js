var capResponse = "";
var capSuccess;
var global = this;
function recaptchaCallback(response) {
    capResponse = response;

}

function checkname() {
    $.ajax({
        url: "http://52.14.115.236:8080/teamvirtusa/checkDuplicateTeam/" + $("input#teamname").val(),
        type: "get", //send it through get method
        data: {},
        success: function (response) {
            teamname.setCustomValidity('');
        },
        error: function (xhr) {
            teamname.setCustomValidity(xhr.responseJSON.message);
        }
    });
}


function registerTeamVirtusa() {
    var teamname = $("input#teamname").val();
    var leadermail = $("input#leadermail").val();
    var member2mail = $("input#member2mail").val();
    var member3mail = $("input#member3mail").val();
    var member4mail = $("input#member4mail").val();

    var teamLeadName = $("input#teamLeadName").val();
    var member2name = $("input#member2name").val();
    var member3name = $("input#member3name").val();
    var member4name = $("input#member4name").val();


    var teamObject = new Object();
    teamObject.teamName = teamname;

    var leader = new Object();
    leader.name = teamLeadName;
    leader.emailAddress = leadermail;
    leader.leader = true;

    var member2 = new Object();
    member2.name = member2name;
    member2.emailAddress = member2mail;
    member2.leader = false;

    var member3 = new Object();
    member3.name = member3name;
    member3.emailAddress = member3mail;
    member3.leader = false;

    var member4 = new Object();
    member4.name = member4name;
    member4.emailAddress = member4mail;
    member4.leader = false;

    var members = [];

    members.push(leader);

    if (member2mail != "")
        members.push(member2);

    if (member3mail != "")
        members.push(member3);

    if (member4mail != "")
        members.push(member4);

    teamObject.teamMembers = members;
    var teamData = JSON.stringify(teamObject);

    $.ajax({
        url: registerTeam,
        type: "POST",
        data: teamData,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        cache: false,
        success: function () {
            $('.overlayLoading').hide();
            var myNode = document.getElementById("section");
            myNode.innerHTML = '';

            $('#section').html('<div class="container"><div class="row"><div class="col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6"><div class="alert-message alert-message-success"><h4> Your Team has been Registered</h4> \n</div></div></div></div>');


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

function checkDuplicateEmail() {
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
}

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

            if (capResponse == "") {
                alert("Please Check Captcha");

            }
            else {

                var URL = "proxy.php?url=" + "https://www.google.com/recaptcha/api/siteverify?secret=6Lcv7ygUAAAAAIBkuFY83q_tbmfT9SEtRKykW974&response=" + capResponse;
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

$(document).ready(function () {

    // Loading Animation
    setTimeout(function () {
        $(".se-pre-con").fadeOut("slow");
    }, 5000);

    function validateEmail() {
        //console.log($(this).val());
        var re = /^\"?[\w-_\.]*\"?@virtusapolaris\.com$/;
        if (re.test($(this).val())) {
            this.setCustomValidity('');
        } else {
            this.setCustomValidity("Please enter a valid Virtusa email address");
        }
    }

    leadermail.onchange = validateEmail;
    leadermail.onkeyup = validateEmail;

    member2mail.onchange = validateEmail;
    member2mail.onkeyup = validateEmail;

    member3mail.onchange = validateEmail;
    member3mail.onkeyup = validateEmail;

    member4mail.onchange = validateEmail;
    member4mail.onkeyup = validateEmail;

    teamname.onchange = checkname;
    teamname.onkeyup = checkname;

    leadermail.onchange = checkDuplicateEmail;
    leadermail.onkeyup = checkDuplicateEmail;

    member2mail.onchange = checkDuplicateEmail;
    member2mail.onkeyup = checkDuplicateEmail;

    member3mail.onchange = checkDuplicateEmail;
    member3mail.onkeyup = checkDuplicateEmail;

    member4mail.onchange = checkDuplicateEmail;
    member4mail.onkeyup = checkDuplicateEmail;
});
