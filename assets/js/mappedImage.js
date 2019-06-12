$('.map').maphilight();

$(document).ready(function() {
    $('img[usemap]').rwdImageMaps();
    $('.tooltip').tooltipster({
        animation: "fade",
        delay: 200,
        theme: ".tooltipster-default",
        touchDevices: true,
        trigger: "hover",
        interactive: true,
        position: "top"
    });
});


