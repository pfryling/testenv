function megaMenu(){
    $('.megamenu .dropdown').click('show.bs.dropdown', function (e) {
        var $dropdown = $(this).find('.dropdown-menu');
        var orig_margin_top = parseInt($dropdown.css('margin-top'));
        $dropdown.css({
            'margin-top': (orig_margin_top + 65) + 'px',
            opacity: 0
        }).animate({
            'margin-top': orig_margin_top + 'px',
            opacity: 1
        }, 420, function () {
            $(this).css({
                'margin-top': ''
            });
        });
    });
}

$(function(){
    "use strict";

    // Navigation
    megaMenu();

    $(".navbar-toggle").on("click", function () {
        $(this).toggleClass("active");
    });


});

(function ($) {
    "use strict";
     var header = $("#header");
    $(window).scroll(function () {

    if ($(this).scrollTop() > 50) {
        header.addClass("sticky");
            $(".navbar").addClass("fixed");
    }
            else {
                 header.removeClass("sticky");
            $(".navbar").removeClass("fixed");
            }
    });


$(function(){
  $(".nav-sub").click(function(){
    $(".nav-sub-item").slideToggle(300);
  });
});

$(function() {
    $(".subtoggle").click(function(e) {
        e.stopPropagation();
    });
});

$(function(){
  $(".nav-sub-2").click(function(){
    $(".nav-sub-item-2").slideToggle(300);
  });
});

$(function(){
  $(".nav-sub-3").click(function(){
    $(".nav-sub-item-3").slideToggle(300);
  });
});

$(function(){
  $(".nav-sub-4").click(function(){
    $(".nav-sub-item-4").slideToggle(300);
  });
});

$('.nav-sub').click(function(){
    $(this).find('i').toggleClass('fa-angle-down fa-angle-up');
});

$('.nav-sub-2').click(function(){
    $(this).find('i').toggleClass('fa-angle-down fa-angle-up');
});

$('.nav-sub-3').click(function(){
    $(this).find('i').toggleClass('fa-angle-down fa-angle-up');
});

$('.nav-sub-4').click(function(){
    $(this).find('i').toggleClass('fa-angle-down fa-angle-up');
});

$('.dropdown-toggle').click(function(){
    $(this).find('i').toggleClass('fa-caret-down fa-caret-up');
});
