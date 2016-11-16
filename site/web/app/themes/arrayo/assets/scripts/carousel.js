$(function() {
    $('.ind-carousel').owlCarousel({
        autoPlay: 3000,
        items: 3,
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 3
            },
        }
    });
});