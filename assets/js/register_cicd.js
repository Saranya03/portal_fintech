$( document ).ready(function() {
    
    // Loading Animation
    setTimeout(function() {
        $(".se-pre-con").fadeOut("slow");
    }, 5000);
    
    // get values from FORM
    var email = document.getElementById("email")
    var confirm_email = document.getElementById("verify-email");
    var otherRadioButton = document.getElementById('otherRadioButton');
    var showElements = document.getElementById('buildScript');
    var name = document.getElementById('name');
    
    function validateEmail(){
        
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        
        if(email.value != confirm_email.value) {
            confirm_email.setCustomValidity("Emails Don't Match");
        } else {
            confirm_email.setCustomValidity('');
        }
        
        if(re.test(email.value)){
            email.setCustomValidity('');
        } else{
            email.setCustomValidity("Invalid email address");
        }
        
    }
    
    email.onchange = validateEmail;
    email.onkeyup = validateEmail;
    confirm_email.onkeyup = validateEmail;

    
    $('input:radio[name="radioButton"]').change(function() {
        if ($(this).val() == 'other') {
            showElements.style.display = 'block'
        } else {
            showElements.style.display = 'none';
        }
    });
    
    var name = document.getElementById('name');
    
    function validateName(){
        if (/^[a-zA-Z\s]*$/.test(name.value)) {
            name.setCustomValidity('');
        } else{
            name.setCustomValidity('Invalid first name');
        }
    }

    name.onchange = validateName;
    name.onkeyup = validateName;
    
});
