$(document).ready(function () {

    $("#btn-video-next").click(function () {
        $('#videoCarousel').carousel('next')
    });
    $("#btn-video-prev").click(function () {
        $('#videoCarousel').carousel('prev')
    });
    
    $("#btn-blog-next").click(function () {
        $('#blogCarousel').carousel('next')
    });
    $("#btn-blog-prev").click(function () {
        $('#blogCarousel').carousel('prev')
    });

    $("#btn-client-next").click(function () {
        $('#clientCarousel').carousel('next')
    });
    $("#btn-client-prev").click(function () {
        $('#clientCarousel').carousel('prev')
    });

});

$(window).load(function () {

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
});