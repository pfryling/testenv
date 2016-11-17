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

var $megaMenu = $('.megamenu .dropdown');
  $megaMenu.on('show', '.collapse', function() {
    $megaMenu.find('.collapse.in').collapse('hide');
  });



$(function(){
  $(".nav-sub").click(function(){
    $(".nav-sub-item").slideToggle(300);
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

$('.js-toggle-menu').click(function(e){
  e.preventDefault();
  $(this).toggleClass('open');
  $('.m-page-wrap').toggleClass('disabled');
  $('body').toggleClass('disabled');
});

jQuery(document).ready(function (e) {
    function t(t) {
        e(t).bind("click", function (t) {
            t.preventDefault();
            e(this).parent().fadeOut()
        })
    }
    e(".m-dropdown-toggle").click(function () {
        var t = e(this).parents(".m-button-dropdown").children(".m-dropdown-menu").is(":hidden");
        e(".m-button-dropdown .m-dropdown-menu").hide();
        e(".m-button-dropdown .m-dropdown-toggle").removeClass("active");
        if (t) {
            e(this).parents(".m-button-dropdown").children(".m-dropdown-menu").toggle().parents(".m-button-dropdown").children(".dropdown-toggle").addClass("active")
        }
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("m-button-dropdown")) e(".m-button-dropdown .m-dropdown-menu").hide();
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("m-button-dropdown")) e(".m-button-dropdown .m-dropdown-toggle").removeClass("active");
    })
});

jQuery(document).ready(function (e) {
    function t(t) {
        e(t).bind("click", function (t) {
            t.preventDefault();
            e(this).parent().fadeOut()
        })
    }
    e(".m-sub-dropdown-toggle").click(function () {
        var t = e(this).parents(".m-sub-button-dropdown").children(".m-sub-dropdown-menu").is(":hidden");
        e(".m-sub-button-dropdown .m-sub-dropdown-menu").hide();
        e(".m-sub-button-dropdown .m-sub-dropdown-toggle").removeClass("active");
        if (t) {
            e(this).parents(".m-sub-button-dropdown").children(".m-sub-dropdown-menu").toggle().parents(".sub-button-dropdown").children(".sub-dropdown-toggle").addClass("active")
        }
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("m-sub-button-dropdown")) e(".m-sub-button-dropdown .m-sub-dropdown-menu").hide();
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("m-sub-button-dropdown")) e(".m-sub-button-dropdown .m-sub-dropdown-toggle").removeClass("active");
    })
});