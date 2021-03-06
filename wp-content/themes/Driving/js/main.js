/*
 ==========================================================================
 === Theme: Default Responsive Theme
 === By: Ebow
 === Website: http://ebow.ie
 === Version: 1.0
 === For: Main Javascript File
 === Last Edit: 
 ========================================================================== 
 */

// On Ready
jQuery(function($) {
$(document).ready(function () {

    // Slider - Slick - http://kenwheeler.github.io/slick/
    /*
    $('.responsive').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1023,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    */

});
});

// On Load
(function ($) {
    $(window).load(function () {

        // Contact Form 7 - Disable span tags
        $('span.wpcf7-form-control-wrap input').unwrap();
        $('span.wpcf7-form-control-wrap textarea').unwrap();

        // Responsive Video
        /*
        $(function () {
            var iframes = document.getElementsByTagName('iframe');
            for (var i = 0; i < iframes.length; i++) {
                var iframe = iframes[i],
                        players = /www.youtube.com|player.vimeo.com/;
                if (iframe.src.search(players) > 0) {
                    var videoRatio = (iframe.height / iframe.width) * 100;
                    iframe.style.position = 'absolute';
                    iframe.style.top = '0';
                    iframe.style.left = '0';
                    iframe.width = '100%';
                    iframe.height = '100%';
                    var wrap = document.createElement('div');
                    wrap.className = 'fluid-vids';
                    wrap.style.width = '100%';
                    wrap.style.position = 'relative';
                    wrap.style.paddingTop = videoRatio + '%';
                    var iframeParent = iframe.parentNode;
                    iframeParent.insertBefore(wrap, iframe);
                    wrap.appendChild(iframe);
                }
            }
        });
        */

    });
})(jQuery);