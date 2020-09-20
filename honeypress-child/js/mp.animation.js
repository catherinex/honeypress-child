( function ($) {

    $( document ).ready(function() {

      if (document.getElementById("bigArrow-row") !== null) {
        var elem = document.getElementById("bigArrow");
          var pos = -1920;
          var id = setInterval(frame, 1);
          function frame() {
            if (pos == 0) {
              clearInterval(id);
              $('.how1').fadeIn( 3000, function() {
                $('.how2').fadeIn( 3000, function() {
                  $('.how3').fadeIn( 3000, function() {
                    $('.how4').fadeIn( 3000 );
                  })
                })
              } );
            } else {
              pos++;
              elem.style.left = pos + "px";
            }
          }
      }


      $( ".navbar-toggler" ).bind( "click", function() {
        $('#navbarNavDropdown').toggleClass( "collapse" );
      });
    });



  }) ( jQuery);
