import 'bootstrap';
$(document).ready(function() {
    $('#gallery-cards').slick({
        infinite: true,
        speed: 500,
        fade: true,
        centerPadding: '40px',
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 2000,
    });
});
