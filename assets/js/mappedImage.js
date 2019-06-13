

$(document).ready(function() {

    $(window).resize()

    $('.tooltip').tooltipster({
        animation: "fade",
        delay: 200,
        theme: ".tooltipster-default",
        position: "top"
    });

    $('.tooltip').tooltipster('open')
    $('img[usemap]').rwdImageMaps();
});


