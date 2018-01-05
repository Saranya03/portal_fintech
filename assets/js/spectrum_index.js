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

});
