/*!
 * Spectrum v1.2.0 (http://themes.startbootstrap.com/spectrum-v1.2.0)
 * Copyright 2013-2015 Start Bootstrap Themes
 * To use this theme you must have a license purchased at WrapBootstrap (https://wrapbootstrap.com)
 */

// Functions to run on document load
$(window).load(function() {

});

// Functions to run on document ready
jQuery(document).ready(function () {

    // Loading Animation
    setTimeout(function() {
        $(".se-pre-con").fadeOut("slow");
    }, 3000);

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $('#back-to-top').tooltip('show');

    // Find Mobile Devices
    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    // Initialize Stellar.js Parallax
    if (!isMobile.any()) {
        $(window).stellar({
            horizontalScrolling: false,
            verticalOffset: 0,
            horizontalOffset: 0,
            hideDistantElements: false
        });
    }

    // Activates the Bootstrap Carousel for the Intro Header Options
    $('.carousel').carousel({
        interval: 8000,
        pause: "false",
    })

    // Activates Owl Carousel Sliders
    $("#about-1-carousel, #services-1-carousel").owlCarousel({

        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]

    });

    $("#about-3-carousel").owlCarousel({

        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 3]

    });

    $("#clients-carousel").owlCarousel({

        items: 5,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]

    });

    $("#portfolio-2-carousel").owlCarousel({

        singleItem: true,
        navigation: true,
        navigationText: [
            "<i class='fa fa-chevron-left'></i>",
            "<i class='fa fa-chevron-right'></i>"
        ],
        slideSpeed: 400

    });

    $("#project-details-carousel").owlCarousel({

        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        navigationText: [
            "<i class='fa fa-angle-left'></i> Prev",
            "Next <i class='fa fa-angle-right'></i>"
        ],

    });

    // Activates FitVids jQuery Plugin
    $(".container").fitVids();

    // Activates Magnific Popup jQuery Plugin
    $('.gallery-item').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        type: 'iframe',
    });

    // Floating label Headings for the Contact Form
    $("body").on("input propertychange", ".floating-label-form-group", function (e) {
        $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
    }).on("focus", ".floating-label-form-group", function () {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function () {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
    var url = $("#video").attr('src');

    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function () {
        $("#video").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function () {
        $("#video").attr('src', url);
    });

    $('#play-video').on('click', function (ev) {

        var dataplay = $('#video').attr('data-play');

        if (dataplay == 0) {
            var videoURL = $('#video').attr('src');
            videoURL = videoURL.replace("?autoplay=0", "?autoplay=1");
            $('#video').prop('src', videoURL);

            $('#video').attr('data-play', 1);
        }

    });

    $('#portfolio-modal-2').on('hidden.bs.modal', function () {

        var dataplay = $('#video').attr('data-play');

        if (dataplay == 1) {
            var videoURL = $('#video').attr('src');
            videoURL = videoURL.replace("?autoplay=1", "?autoplay=0");
            $('#video').prop('src', videoURL);

            $('#video').attr('data-play', 0);
        }

    });

    // Javascript JSON  data
    $.ajax({
        async: true,
        type:  'GET',
        url:  getDocument,
        dataType: 'json',
        success: function(json){

            var jsondata = json.response;
            console.log(jsondata);

            // Go through JSON
            var arrayLength = jsondata.length;
            for (var i = 0; i < arrayLength; i++) {

                var c = "";

                var arrayLength1 = jsondata[i].value.apiCategories.length;
                for (var j = 0; j < arrayLength1; j++) {
                    c = c + " " + jsondata[i].value.apiCategories[j];
                }

                var linkURL = ""
                if(jsondata[i].value.apiPrimaryURL == ""){
                    linkURL = jsondata[i].value.apiSecondaryURL;
                }else{
                    linkURL = baseURL + jsondata[i].value.apiPrimaryURL + baseURLAppend;
                }

                var status = '';
                if(jsondata[i].value.apiStatus){
                    status = '<img src="assets/img/' + jsondata[i].value.apiHeartbeat + '.png" class="img-centered" alt="" width="5%" id="heartbeat">'
                        + '<label style="font-size:12px; color:#f4f5f7; padding-left:15px; padding-right:15px;" id="responsetime">' + beautifyTime(jsondata[i].value.apiResponseTime) + '</label>'
                        + '<label style="font-size:12px; color:#f4f5f7; padding-left:15px; padding-right:15px;" id="statuscode">' + beautifyStatusCode(jsondata[i].value.apiStatusCode) + '</label>'
                        + '<label style="font-size:12px; color:#f4f5f7 " style="padding-right:15px;" id="uptime">' + beautifyTime(jsondata[i].value.apiUptime) + '</label>';
                }

                var buildNumber = "";
                if(jsondata[i].value.apiBuildNumber != ""){
                    buildNumber = "Build #" + jsondata[i].value.apiBuildNumber;
                }

                if((jsondata[i].value.apiCategories.indexOf("completed") > -1)){
                    $("#cardsection").prepend('<div class="col-xs-12 col-sm-4 portfolio-item' + c + '">'
                                             + '<a target="_blank" href="' + linkURL + '"'
                                             + 'class="portfolio-link">'
                                             + '<div class="caption">'
                                             + '<div style="text-align: center;padding-top:4px;">'
                                             + status
                                             + '</div>'
                                             + '<div class="caption-content">'
                                             + '<h4>' + jsondata[i].value.apiName + '</h4>'
                                             + '<p class="inside-card-text" style="padding: 10px;">' + jsondata[i].value.apiDescription + '</p>'
                                             + '<p class="inside-card-text-build" style="padding: 10px;">' + buildNumber + '</p>'
                                             + '</div>'
                                             + '</div>'
                                             + '<img src="' + imagePathBase + jsondata[i].value.apiImageName + '" class="img-centered" style="height:250px; width:450px;" alt="">'
                                             + '</a>'
                                             + '</div>');
                }else{
                    //http://ec2-52-14-54-66.us-east-2.compute.amazonaws.com/dokuwiki/doku.php?id=
                    $("#cardsection").append('<div class="col-xs-12 col-sm-4 portfolio-item' + c + '">'
                                             + '<a '
                                             + 'class="portfolio-link">'
                                             + '<div class="caption">'
                                             + '<div style="text-align: center;padding-top:4px;">'
                                             + status
                                             + '</div>'
                                             + '<div class="caption-content">'
                                             + '<h4>' + jsondata[i].value.apiName + '</h4>'
                                             + '<p class="inside-card-text" style="padding: 10px;">' + jsondata[i].value.apiDescription + '</p>'
                                             + '<p class="inside-card-text-build" style="padding: 10px;">' + buildNumber + '</p>'
                                             + '</div>'
                                             + '</div>'
                                             + '<img src="' + imagePathBase + jsondata[i].value.apiImageName + '" class="img-centered" style="height:250px; width:450px;" alt="">'
                                             + '</a>'
                                             + '</div>');

                }

            }

        },
        error: function (jqXHR, textStatus, errorThrown) {
            var myNode = document.getElementById("work");
          //  myNode.innerHTML = '';
            $('#work').html('<div style="text-align: center"><h2>Oops, something went wrong with our API catalog!</h2> <br> <h2>Please try again later. </h2></div>');

        }

    });
});

// Functions to run on window load
//$(window).load(function () {
 $(window).on('load', function (){

    $('#filters').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');

    var $container = $('.isotope').isotope({
        itemSelector: '.portfolio-item'
    });

        $container.isotope({
            filter: filterValue

        });
    });

    // change is-checked class on buttons

    $('#filters').each(function (i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);


        $buttonGroup.on('click', 'button', function () {
            $buttonGroup.find('.active').removeClass('active');

            $(this).addClass('active');
        });
    });
});

function beautifyStatusCode(statusCode) {

    if(statusCode == 200){
        return statusCode + " OK";
    }else{
        return statusCode;
    }

}

function beautifyTime(responseTime) {

    // console.log(responseTime);
    var timeDifferent = responseTime;
    var timeSec = "";

    // console.log(timeDifferent);
    var day = timeDifferent / (24 * 60 * 60 * 1000);
    var hour = timeDifferent / (60 * 60 * 1000);
    var min = timeDifferent / (60 * 1000);
    var sec = timeDifferent / (1000);

    //console.log(responseTime + " ^^^^ " + day + " / " + hour + " / " + min + " / " + sec);

    if((day + "").includes(".") && !((day + "").includes("-"))){
        day = (day + "").split(".")[0];
    }else{
        day = 0;
    }

    if((hour + "").includes(".") && !((hour + "").includes("-"))){
        hour = (hour + "").split(".")[0];
    }else{
        hour = 0;
    }

    if((min + "").includes(".") && !((min + "").includes("-"))){
        min = (min + "").split(".")[0];
    }else{
        min = 0;
    }

    if((sec + "").includes(".") && !((sec + "").includes("-"))){
        sec = (sec + "").split(".")[0];
    }else{
        sec = 0;
    }

    //console.log(responseTime + " **** " + day + " / " + hour + " / " + min + " / " + sec);

    if(day > 0){

        var hourRem = (timeDifferent % (24 * 60 * 60 * 1000)) / (60 * 60 * 1000);

        if((hourRem + "").includes(".")){
            hourRem = (hourRem + "").split(".")[0];
        }

        timeSec = day + ' D ' + hourRem + ' h';

    }else if(hour > 0){

        var minRem = (timeDifferent % (60 * 60 * 1000)) / (60 * 1000);

        if((minRem + "").includes(".")){
            minRem = (minRem + "").split(".")[0];
        }

        timeSec = hour + ' h ' + minRem + ' m';

    }else if(min > 0){

        var secRem = (timeDifferent % (60 * 1000)) / (1000);

        if((secRem + "").includes(".")){
            secRem = (secRem + "").split(".")[0];
        }

        timeSec = min + ' m ' + secRem + ' s';

    }else if(sec > 0){

        var miliRem = (timeDifferent % (1000)) / (1000);

        if((miliRem + "").includes(".")){
            miliRem = (miliRem + "").split(".")[0];
        }

        timeSec = sec + ' s ' + miliRem + ' ms';

    }else{

        var miliRem = (timeDifferent % (1000)) / (1000);

        if((miliRem + "").includes(".")){
            miliRem = (miliRem + "").split(".")[1];
        }

        timeSec = sec + ' s ' + miliRem + ' ms';

    }

    //console.log(responseTime + " / " + timeSec);

    return timeSec;
}
