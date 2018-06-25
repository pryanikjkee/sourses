(function ($, Drupal) {

  // Outbound click
  Drupal.behaviors.gdstGA = {
    attach: function(context, settings) {
      var localUrl = new RegExp('^\\w+://' + window.location.hostname, 'i');
      if (typeof ga == 'undefined'){
        return;
      }

      // newsletter form
      $('form.webform-client-form-141 .form-submit', context).bind('click', function(e){
        ga('send', 'event', 'Form', 'Click', 'sign-up');
        ga('send', 'pageview', '/form/signup');
      });

      // contact form
      $('form.webform-client-form-134 .form-submit', context).bind('click', function(e){
        ga('send', 'event', 'Form', 'Click', 'contact-form');
        ga('send', 'pageview', '/form/contact');
      });

      var socialmediaSetup = function(e){
        var url = $(this).attr('href');

        var parentElement = $(this).parent('.widgets-element');
        var parentID = parentElement.attr('id');
        var searchURL = new RegExp('widgets-element-socialmedia_[^-]*-([^-]*).*', 'i');
        var matches = parentID.match(searchURL);
        if (matches){
          var socialChannel = matches[1];
          //console.log('sending sm click: ' + socialChannel);
          ga('send', 'event', 'Social', 'Click', socialChannel);
          ga('send', 'pageview', '/social/share-' + socialChannel);
        }
      };

      // social shares sidebar
      $('#widgets-element-socialmedia_tcg_grey .widgets-element a', context).bind('click', socialmediaSetup);
      // social shares header
      $('#widgets-element-socialmedia_profile-default .widgets-element a', context).bind('click', socialmediaSetup);
      // Social media mobile
      $('#widgets-element-socialmedia_tcg_white .widgets-element a', context).bind('click', socialmediaSetup);


      // tweet this
      $('.paragraphs-item-tweetable-pull-quote .tweet-call a', context).bind('click', function(e){
        ga('send', 'event', 'Social', 'Click', 'twitter');
        ga('send', 'pageview', '/social/share-twitter');
      });
    }
  };

  Drupal.gaSearchTracking = {};

  Drupal.gaSearchTracking.init = function(){
    if (typeof ga == 'undefined'){
      return;
    }
    var searchURL = new RegExp('^/site-search/(.*)$', 'i');
    var url = window.location.pathname;
    var matches = url.match(searchURL);
    if (matches){
      var searchTerm = matches[1];
      ga('send', 'pageview', '/site-search?search=' + searchTerm);
    }
  }


  $(document).ready(function(){
    Drupal.gaSearchTracking.init();
  });

})(jQuery, Drupal);
