$(function() {

    $('.main-slider').slick();

    $('.before-slider').slick({
        infinite: false,
        arrows: true,
        slidesToShow: 2,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

});
