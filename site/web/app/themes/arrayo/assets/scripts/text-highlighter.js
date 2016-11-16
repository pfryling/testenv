$(function() {
            var text = $(".text--fade");
            var textIndex = -1;

            function showNextText() {
                ++textIndex;
                text.eq(textIndex % text.length)
                    .fadeIn(700)
                    .delay(1500)
                    .fadeOut(700, showNextText);
            }
            showNextText();
        })