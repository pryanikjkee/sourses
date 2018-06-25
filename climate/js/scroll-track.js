(function ( $ ) {

    $.fn.scrolltrack = function( options ) {

        var settings = $.extend({
            // These are the defaults.
            scrollTarget: 'window',
            targetConstraint: null,
        }, options );
        $.each( settings, function( index, value ){
            //console.log(index + ' = ' + value);
        });
        // Do the do
        return this.each(function() {

          var $element = $(this);
          var $window = $(settings.scrollTarget);
          var $container = $(settings.targetConstraint);
          var positioner = new move($window, $element, $container);

          //$element.css('border', '1px dashed green');
          //$container.css('border', '1px solid red');

          $(window).scroll(function() {

            $element
              .stop()
              .animate(positioner.getMargin($(window)));
          });
        });


        // Private
        function move($window, $element, $container) {


          // console.log('move called');
          // console.log("container top = " + $container.offset().top);
          // console.log("container bottom = " + $container.outerHeight());
          // console.log("element top = " + $element.offset().top);
          this.min = $element.offset().top;

          this.originalMargin = parseInt($($element).css("margin-top"), 10) || 0;
          this.getMargin = function ($window)
          {
            var max = $($element).parent().height() - $($element).outerHeight();
            var margin = this.originalMargin;

            if ($(window).scrollTop() >= this.min)
              margin = margin + $(window).scrollTop() - this.min;

            if (margin > max)
              margin = max;

            return ({"marginTop" : margin + 'px'});
          }
        }
    };
}( jQuery ));