/*!
 * Spectrum v1.2.0 (http://themes.startbootstrap.com/spectrum-v1.2.0)
 * Copyright 2013-2015 Start Bootstrap Themes
 * To use this theme you must have a license purchased at WrapBootstrap (https://wrapbootstrap.com)
 */

// Functions to run on document ready
jQuery(document).ready(function () {

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
        url:  "http://HOST_IP:10010/document",
        dataType: 'json',              
        success: function(json){
            
            var jsondata = json.data;
            //console.log(jsondata);
            
            // Go through JSON
            var arrayLength = jsondata.length;
            for (var i = 0; i < arrayLength; i++) {
                
                var data = jsondata[i].apiData;

                var c = "";

                var arrayLength1 = data.categories.length;
                for (var j = 0; j < arrayLength1; j++) {
                    c = c + " " + data.categories[j];
                }

                var guid1 = (generator() + generator() + "-" + generator() + "-4" + generator().substr(0,3) + "-" + generator() + "-" + generator() + generator() + generator()).toLowerCase();
                var guid2 = (generator() + generator() + "-" + generator() + "-4" + generator().substr(0,3) + "-" + generator() + "-" + generator() + generator() + generator()).toLowerCase();
                var guid3 = (generator() + generator() + "-" + generator() + "-4" + generator().substr(0,3) + "-" + generator() + "-" + generator() + generator() + generator()).toLowerCase();
                var guid4 = (generator() + generator() + "-" + generator() + "-4" + generator().substr(0,3) + "-" + generator() + "-" + generator() + generator() + generator()).toLowerCase();
                var guid5 = (generator() + generator() + "-" + generator() + "-4" + generator().substr(0,3) + "-" + generator() + "-" + generator() + generator() + generator()).toLowerCase();
                
                if((data.categories.indexOf("completed") > -1)){
                    $("#cardsection").prepend('<div class="col-sm-4 portfolio-item' + c + '">'
                                             + '<a href="' + wikiBaseURL + data.wikiURL + '"'
                                             + 'class="portfolio-link">'
                                             + '<div class="caption">'
                                             + '<div style="text-align: center;padding-top:4px;">'
                                             + '<img src="assets/img/red.png" class="img-centered" alt="" width="5%" id="' + guid1 + '" style="display: none">'
                                             + '<img src="assets/img/green.png" class="img-centered" alt="" width="5%" id="' + guid2 + '" style="display: none">'
                                             + '<label style="font-size:12px; color:#f4f5f7; padding-left:15px; padding-right:15px;" id="' + guid3 + '"></label>'
                                             + '<label style="font-size:12px; color:#f4f5f7 " style="padding-right:15px;" id="' + guid4 + '"></label>'
                                             + '<label style="font-size:12px; color:#f4f5f7; margin-left:15px;" id="' + guid5 + '"></label>'
                                             + '</div>'
                                             + '<div class="caption-content">'
                                             + '<h4>' + data.apiName + '</h4>'
                                             + '<p class="inside-card-text" style="padding: 10px;">' + data.description + '</p>'
                                             + '</div>'
                                             + '</div>'
                                             + '<img src="' + imagePathBase + data.imageName + '" class="img-centered" alt="">'
                                             + '</a>'
                                             + '</div>');
                }else{
                    $("#cardsection").append('<div class="col-sm-4 portfolio-item' + c + '">'
                                             + '<a href="' + wikiBaseURL + data.wikiURL + '"'
                                             + 'class="portfolio-link">'
                                             + '<div class="caption">'
                                             + '<div style="text-align: center;padding-top:4px;">'
                                             + '<img src="assets/img/red.png" class="img-centered" alt="" width="5%" id="' + guid1 + '" style="display: none">'
                                             + '<img src="assets/img/green.png" class="img-centered" alt="" width="5%" id="' + guid2 + '" style="display: none">'
                                             + '<label style="font-size:12px; color:#f4f5f7; padding-left:15px; padding-right:15px;" id="' + guid3 + '"></label>'
                                             + '<label style="font-size:12px; color:#f4f5f7 " style="padding-right:15px;" id="' + guid4 + '"></label>'
                                             + '<label style="font-size:12px; color:#f4f5f7; margin-left:15px;" id="' + guid5 + '"></label>'
                                             + '</div>'
                                             + '<div class="caption-content">'
                                             + '<h4>' + data.apiName + '</h4>'
                                             + '<p class="inside-card-text" style="padding: 10px;">' + data.description + '</p>'
                                             + '</div>'
                                             + '</div>'
                                             + '<img src="' + imagePathBase + data.imageName + '" class="img-centered" alt="">'
                                             + '</a>'
                                             + '</div>');
                }

                if(data.status){
                    ajax(guid1, guid2, guid3, guid4, guid5, jsondata[i]._id);
                }

            }
            
            
        }
    });
    
});

// Functions to run on window load
$(window).load(function () {

    // Isotope Plugin for Portfolio Filtering
    // init Isotope
    var $container = $('.isotope').isotope({
        itemSelector: '.portfolio-item'
    });
    $('#filters').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
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

function generator() {
    return (((1+Math.random())*0x10000)|0).toString(16).substring(1); 
}

function ajax(redID, greenId, response, status, uptime, id){
    $.ajax({
        async: true,
        type:  'GET',
        url:  "http://HOST_IP:10010/monitor/" + id,
        dataType: 'json',              
        success: function(json){
            // console.log("Made call");
            // console.log(json);
            $('#' + response + '').text(json.data.responseTime);
            $('#' + uptime + '').text(json.data.upTime + "hrs");
            if(json.data.statusCode == "200"){
                $('#' + status + '').text("200 OK");
            }else{
                $('#' + status + '').text(json.data.statusCode);
            }
            
            if(json.data.heartbeat){
                $('#' + greenId + '').css("display", "inline");
            }else{
                $('#' + redID + '').css("display", "inline");
            }
        }
    });
}
