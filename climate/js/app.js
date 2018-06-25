(function ($, Drupal) {

    // Stuff that needs to be called on DOM ready
    // Notice the absecents of .behaviour.
    Drupal.behaviors.inits = {
        attach: function (context, settings) {
            svg4everybody();

            Drupal.behaviors.breakpoints.refreshValue();
            $(window).resize(function () {
                Drupal.behaviors.breakpoints.refreshValue();
            }).resize();
            $(document).foundation();
        }
    };

    // Breakpoints importing
    Drupal.behaviors.breakpoints = {
        attach: function (context, settings) {

        },
        refreshValue: function (context, settings) {
            Drupal.settings.breakpoint = window.getComputedStyle(document.querySelector('body'), ':before').getPropertyValue('content').replace(/\"/g, '');
        }
    };


    $(Drupal.behaviors.inits);

    Drupal.behaviors.mobileMenu = {
        attach: function (context, settings) {

            $('#menu-toggle').bind('click', function (e) {

                $('.title-bar').toggleClass('menu-expanded');
                var menu = $('#main-menus');
                if (menu.is(':visible')) {
                    // jQuery cant apply classes to svg elements. So no lovely toggleClass.
                    $('#logo-head-black').attr("class", "");
                    $('#logo-head-white').attr("class", "show");
                } else {
                    $('#logo-head-black').attr("class", "show");
                    $('#logo-head-white').attr("class", "");
                }


            });
        }
    };

    $(document).ready(function () {
        Drupal.gaSearchTracking.init();


        //open external links in new window
        $('a').each(function () {
            var a = new RegExp('/' + window.location.host + '/');
            if (!a.test(this.href) && this.href !== "" && this.href !== "#") {
                $(this).click(function (event) {
                    event.preventDefault();
                    event.stopPropagation();
                    window.open(this.href, '_blank');
                });
            }
        });

        //set focus in search box (timeout needed as on click the element is still hiddend and cant be focused to)
        $('.ti-search').click(function () {
            setTimeout(function () {
                $('#edit-search-block-form--2').focus();
            }, 500);
        });

        adjustSocialBar();

        $(window).scroll(function () {
            adjustSocialBar();
        });

        function adjustSocialBar() {
            if ($(window).width() > 600) {
                var topy = $(".panel-content .content-body > .container").offset();
                $(".panel-col-share-sidebar").css("top", Math.max(0, (topy.top) - $(this).scrollTop()) + 50);
            }
        }
    });

    $(window).load(function(){


      //set heights on divs to be the same in a row
      equalheight = function (container) {

          var currentTallest = 0,
                  currentRowStart = 0,
                  rowDivs = new Array(),
                  $el,
                  topPosition = 0;
          $(container).each(function () {

              $el = $(this);
              $($el).height('auto')
              topPostion = $el.position().top;

              if (currentRowStart != topPostion) {
                  for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                      rowDivs[currentDiv].height(currentTallest);
                  }
                  rowDivs.length = 0; // empty the array
                  currentRowStart = topPostion;
                  currentTallest = $el.height();
                  rowDivs.push($el);
              } else {
                  rowDivs.push($el);
                  currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
              }

              for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                  rowDivs[currentDiv].height(currentTallest);
              }
          });
      }

      elementsToEqualise();

      $(window).resize(function () {
          elementsToEqualise();
      });
      $('[data-tabs]').on('change.zf.tabs', function() {
        elementsToEqualise();
      });

      function elementsToEqualise() {
        equalheight('.views-homepage-grid h2');

        equalheight('.view-partnerships-listing .views-row h2');
        equalheight('.view-partnerships-listing .views-row .field-name-field-tags');

        equalheight('.view-project-and-event-related-content .views-row h2');
        equalheight('.view-project-and-event-related-content .views-row .field-name-field-tags');

        equalheight('.view-page-footer-related-content .views-row h2');
        equalheight('.view-page-footer-related-content .views-row .field-name-field-tags');

        equalheight('.view-news-and-briefings .views-row h2');
        equalheight('.view-news-and-briefings .views-row .field-name-field-tags');

        equalheight('.view-people-listing .views-row h2');
        equalheight('.view-people-listing .views-row .field-name-field-strapline');

        equalheight('.entity-paragraphs-item .paragraphs-items-field-paragraph-links .field-name-field-paragraph-link');
        equalheight('.entity-paragraphs-item .paragraphs-item-download-link');

        equalheight('.paragraphs-item-links-and-buttons .paragraphs-item-link a.button');

        equalheight('.view .views-responsive-grid article');
      }
    });

})(jQuery, Drupal);
