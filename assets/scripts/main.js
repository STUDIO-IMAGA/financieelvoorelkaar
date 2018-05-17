/* ========================================================================
* DOM-based Routing
* Based on http://goo.gl/EUTi53 by Paul Irish
*
* Only fires on body classes that match. If a body class contains a dash,
* replace the dash with an underscore when adding it to the object below.
*
* .noConflict()
* The routing is enclosed within an anonymous function so that you can
* always reference jQuery with $, even when in .noConflict() mode.
* ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'routeplanner': {
      init: function() {

        init();

        var vestiging_address = 'Gauke Boelensstraat 120, 9203 RS Drachten';
        var directionsService = new google.maps.DirectionsService();
        var map;

        function init() {
          directionsDisplay = new google.maps.DirectionsRenderer();

          var vestiging_latlng = new google.maps.LatLng(53.103326,6.082704);
          var options = {
            zoom: 16,
            disableDefaultUI: false,
            navigationControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
          }

          map = new google.maps.Map(document.getElementById("map"), options);

          var mapMarker = new google.maps.Marker({
            position: vestiging_latlng,
            map: map
          });

          map.setCenter(vestiging_latlng);
          directionsDisplay.setMap(map);
          directionsDisplay.setPanel(document.getElementById("route-directions"));
        }

        function PlanRoute() {
          var request = {
            origin: document.getElementById("wherefrom").value,
            destination: vestiging_address,
            travelMode: google.maps.DirectionsTravelMode.DRIVING
          };
          directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
              directionsDisplay.setDirections(response);
            }
          });
        }

        $(function() {
          $('#wherefrom-submit').click(function() {
            $('#route-directions-wrap').show();
            PlanRoute();
          });
        });
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
