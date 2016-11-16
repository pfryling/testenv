$(function() {
    $('.tabs .tabs--list ul li a').eq(0).addClass("selected");
    $('.tabs .tabs--content div article').eq(0).css('display', 'block');
    $('.tabs .tabs--list ul').click(function(e) {
        if ($(e.target).is("a")) {
            $('.tabs .tabs--list ul li a').removeClass("selected");
            $(e.target).addClass("selected");
            var clicked_index = $("a", this).index(e.target);
            $('.tabs .tabs--content div article').css('display', 'none');
            $('.tabs .tabs--content div article').eq(clicked_index).fadeIn();
        }
        $(this).blur();
        return false;
    });
});

$(".tabs .tabs--list ul li").on('click', function() {
    $(this).addClass('active').siblings().removeClass('active');
});
$(".tabs .tabs--list ul li").hover(function() {
    $(this).addClass('active').siblings().removeClass('active');
});