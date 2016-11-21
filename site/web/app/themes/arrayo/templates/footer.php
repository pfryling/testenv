<footer class="inner-footer">
  <div class="wrapper">
      <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
            <ul class="flex-row">
                <li class="ul-item">
                    <p class="header">Services</p>
                    <a href="/rtech" class="list-item list-item--inline list-item--right">RTech</a>
                    <a href="/agiledata" class="list-item list-item--inline list-item--right">AgileData</a><br>
                    <a href="/databridge" class="list-item list-item--inline list-item--push">DataBridge</a>
                    <a href="/connect" class="list-item list-item--inline ">Connect</a><br>

                    <p class="header">Industries</p>
                    <a href="/fintech" class="list-item list-item--inline list-item--right">FinTech</a>
                    <a href="/healthtech" class="list-item list-item--inline">HealthTech</a><br>
                    <a href="/hightech" class="list-item list-item--inline">HighTech</a><br>

                    <a href="/company" class="header"><br>company<br></a><br>

                    <a href="/careers" class="header">careers</a>
                </li>
            </ul>
            <ul class="flex-row">
                <li class="ul-item">
                    <p class="header">headquarters</p>
                    <p class="list-item">
                        <strong>Downtown Boston Office</strong><br>
                        50 Milk Street, 18th Floor,<br>
                        Boston, MA 02109
                    </p>
                    <p class="list-item">
                        <strong>Kendall Cambridge</strong><br>
                        1 Boradway, 5th Floor,<br>
                        Cambridge, MA 02142
                    </p>
                    <p class="list-item">
                        <strong>Manhattan Mid-town</strong><br>
                        1117 Avenue of the Americas, 7th Floor<br>
                        Mid-town, New York, NY 10036
                    </p><br>
                </li>
            </ul>
            <ul class="flex-row">
                <li class="ul-item">
                    <h3>Apply now-<br>for Now or Later</h3>
                    <p style="16px">Join Arrayo, Get on board</p>

<button class="toggle-overlay">Apply Now</button>

<aside>
  <div class="outer-close toggle-overlay">
    <a class="close"><span></span></a>
    </div>
      <div class="apply-form-wrap">
      <div class="apply-form">
        <h2>Apply Now-<br>for Now or Later</h2>
        <h5>Join Arrayo, Get on Board</h5>
        <div class='cb-input'>
            <?php echo do_shortcode("[ninja_form id=4]"); ?>
      </div>
</aside>
                </li>
              </ul>
            </div>
    </footer>
    <section class="social">
        <div class="wrapper">
            <div class="social-container">
                <ul class="social-networks bounce">
                      <li><a href="https://www.linkedin.com/company/15217733" class="icon-linkedin">LinkedIn</a></li>
                      <li><a href="https://plus.google.com/115373596857745876958" class="icon-googleplus">Google+</a></li>
                      <li><a href="https://www.facebook.com/teamarrayo" class="icon-facebook">Facebook</a></li>

                    </ul>
                <div class="info">
                    &copy; 2016 steepconsult
                    <br>all rights reserved
                    <br><a href="/privacy-policy">privacy policy</a> - <a href="/legal-policy">terms of use</a>
                </div>
            </div>
        </div>
    </section>

<!-- Vendor Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.0/vivus.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.0.1/progressbar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/inview.min.js"></script>
<script src="http://kenwheeler.github.io/slick/slick/slick.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/noframework.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.js"></script>
<script>
(function($) {
  $(function() {
    $('.toggle-overlay').click(function() {
      $('aside').toggleClass('open');
    });
  });
})(jQuery);
</script>
<script>
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
<script>
$('#return-to-top').click(function() {
    $('body,html').animate({
        scrollTop : 0
    }, 500);
});
</script>
<script>
$(function () {

  $('.md-trigger').on('click', function() {
    $('.md-modal').addClass('md-show');
  });

  $('.md-close').on('click', function() {
    $('.md-modal').removeClass('md-show');
  });

});

$(document).ready(function() {
  var panelOne = $('.applymodal-panel.two').height(),
    panelTwo = $('.applymodal-panel.two')[0].scrollHeight;

  $('.applymodal-panel.two').not('.applymodal-panel.two.active').on('click', function(e) {
    e.preventDefault();

    $('.applymodal-toggle').addClass('visible');
    $('.applymodal-panel.one').addClass('hidden');
    $('.applymodal-panel.two').addClass('active');
    $('.applymodal').animate({
      'height': panelTwo
    }, 200);
  });

  $('.applymodal-toggle').on('click', function(e) {
    e.preventDefault();
    $(this).removeClass('visible');
    $('.applymodal-panel.one').removeClass('hidden');
    $('.applymodal-panel.two').removeClass('active');
    $('.applymodal').animate({
      'height': panelOne
    }, 200);
  });
});
</script>
<script>
$(document).ready(function() {

  "use strict";

  $('.mnav > ul > li:has( > ul)').addClass('mnav-dropdown-icon');

  $('.mnav > ul > li > ul:not(:has(ul))').addClass('normal-sub');

  $(".mnav > ul").before("<a href=\"#\" class=\"mnav-mobile\"><img style=\"float:left;\" src=\"http://imgh.us/arrayo-logo-official.png\"></a>");

  $(".mnav > ul > li").hover(function(e) {
    if ($(window).width() > 943) {
      $(this).children("ul").stop(true, false).fadeToggle(150);
      e.preventDefault();
    }
  });

  $(".mnav > ul > li").click(function() {
    if ($(window).width() <= 943) {
      $(this).children("ul").fadeToggle(150);
    }
  });

  $(".subsub").click(function() {
    if ($(window).width() <= 943) {
      $(this).children("ul").fadeToggle(150);
    }
  });

  $(".subsub").click(function(event) {
    event.stopPropagation();
  });

  $(".mnav-mobile").click(function(e) {
    $(".mnav > ul").toggleClass('show-on-mobile');
    e.preventDefault();
  });

});
</script>
<script>
jQuery(document).ready(function($) {
    $('.ind-carousel').owlCarousel({
        autoplay: true,
        autoPlay: 5000,
        loop: true,
        items: 3,
        center: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            650: {
                items: 3
            },
        }
    });
});
</script>
<script>
jQuery(document).ready(function($) {
    $('.com-carousel').owlCarousel({
        autoplay: true,
        autoPlay: 5000,
        loop: true,
        items: 1,
        singleItem: true,
        center: true,
        loop: true,
        margin: 40
    });
});
</script>

<script>
jQuery(document).ready(function($){
  $('#Container').mixItUp({
    load: {
      filter: ''
    },
    controls: {
      toggleFilterButtons: true,
      toggleLogic: 'and'
    },
    callbacks: {
      onMixEnd: function(state){
        console.log(state.activeFilter)
      }
    }
  });
});
</script>
        <script>
        new Vivus('wiggly', {
            start: 'inViewport',
            type: 'delayed',
            duration: 400,
            animTimingFunction: Vivus.EASE_OUT
        });
        </script>
        <script>
        new Vivus('line2', {
            start: 'inViewport',
            type: 'delayed',
            duration: 400,
            animTimingFunction: Vivus.EASE_OUT
        });
        </script>
        <script>
        new Vivus('careers-line', {
            start: 'inViewport',
            type: 'delayed',
            duration: 400,
            animTimingFunction: Vivus.EASE_OUT
        });
        </script>
                <script>
        new Vivus('line', {
            start: 'inViewport',
            type: 'delayed',
            duration: 500,
            animTimingFunction: Vivus.EASE_OUT
        });
        </script>
        <script>
            new WOW().init();
        </script>
        <script>
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
        </script>
        <script>
function isScrolledIntoView(elem) {
  var docViewTop = $(window).scrollTop();
  var docViewBottom = docViewTop + $(window).height();

  var elemTop = $(elem).offset().top;
  var elemBottom = elemTop + $(elem).height();

  return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

var IsViewed = false;
var index = 0;

function animateThis() {
  var progress = $('.bar-percentage[data-percentage]:eq("' + index + '")');
  var percentage = Math.ceil(progress.attr('data-percentage'));
  progress.animate({
    countNum: percentage
  }, {
    duration: 800,
    easing: 'swing',
    step: function() {
      // What todo on every count
      var pct = '';
      if (percentage == 0) {
        pct = Math.floor(this.countNum) + '%';
      } else {
        pct = Math.floor(this.countNum + 1) + '%';
      }
      progress.text(pct) && progress.siblings().children().css('width', pct);
    },
    complete: function() {
      ++index;
      animateThis();
    }
  });
}

$(document).scroll(function() {

  if (isScrolledIntoView('#progress-bar') && !IsViewed) {

    animateThis()
    IsViewed = true;
  }
});

        </script>
        <script>
        // inViewport jQuery plugin
        // http://stackoverflow.com/a/26831113/383904
        $(function($, win) {
            $.fn.inViewport = function(cb) {
                return this.each(function(i, el) {
                    function visPx() {
                        var H = $(this).height(),
                            r = el.getBoundingClientRect(),
                            t = r.top,
                            b = r.bottom;
                        return cb.call(el, Math.max(0, t > 0 ? H - t : (b < H ? b : H)));
                    }
                    visPx();
                    $(win).on("resize scroll", visPx);
                });
            };
        }(jQuery, window));


        jQuery(function($) { // DOM ready and $ in scope

            $(".fig-number").inViewport(function(px) { // Make use of the `px` argument!!!
                // if element entered V.port ( px>0 ) and
                // if prop initNumAnim flag is not yet set
                //  = Animate numbers
                if (px > 0 && !this.initNumAnim) {
                    this.initNumAnim = true; // Set flag to true to prevent re-running the same animation
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 1000,
                        step: function(now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                }
            });

        });
        </script>

<script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "Organization",
  "name": "Arrayo",
  "url": "http://www.teamarrayo.com",
  "logo": "http://arrayo.dev/app/uploads/2016/11/arrayo-logo-transparent-full-color.png",
  "image": "http://arrayo.dev/app/uploads/2016/11/arrayo-open-image.png",
  "description": "We envision and deliver highly automated processes and integrated systems thanks to our deep industry experience",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "50 Milk Street",
    "addressLocality": "Boston",
    "addressRegion": "Massachusetts",
    "postalCode": "02109",
    "addressCountry": "United States"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "42.357000",
    "longitude": "-71.057588"
  },
  "hasMap": "https://www.google.com/maps/place/50+Milk+St,+Boston,+MA+02109/@42.3569998,-71.0597768,17z/data=!3m1!4b1!4m5!3m4!1s0x89e3708476089075:0xbc8dd70d06accf26!8m2!3d42.3569998!4d-71.0575881"
}
 </script>
