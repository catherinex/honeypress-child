( function ($) {



    $( document ).ready(function() {

      if ($( window ).width() <= 576) {
        $('#home-arrow').attr('src', '/wordpress/wp-content/themes/honeypress-child/images/sottrazione-165-mobile.png')
      }

      if (document.getElementById("bigArrow-row") !== null && $( window ).width() >= 992) {
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
              pos = pos + 3;
              elem.style.left = pos + "px";
            }
          }
      }



      if (document.getElementById("home-arrow") !== null) {

        var windowWidth = $( window ).width();

        $('.text1').fadeIn( 1000, function() {
          var elem = document.getElementById("home-arrow");
          if ($( window ).width() >= 1200) {
            // pc
            var pos = -745;
            var init = -745;
            var gap = Math.floor((windowWidth + 745) / 3);
            console.log(gap);
            var id = setInterval(frame, 8);

            function frame() {
              if (pos == init + gap) {
                $('.text1').fadeOut( function() {
                  $('.text2').fadeIn( 1000 );
                })
              }
              if (pos == init + gap*2) {
                $('.text2').fadeOut( function() {
                  $('.text3').fadeIn( 1000 );
                });
              }
              if (pos == windowWidth) {
                  pos = -746;
                  $('.text3').fadeOut( function() {
                    $('.text1').fadeIn( 1000 );
                  });
              }
              pos++;
              elem.style.left = pos + "px";
            }

          } else if ($( window ).width() >= 576) {
            // tablet
            var pos = -745;
            var init = -745;
            var gap = Math.floor((windowWidth + 745) / 3);
            var id = setInterval(frame, 12);
            function frame() {
              if (pos == init + gap) {
                $('.text1').fadeOut( function() {
                  $('.text2').fadeIn( 1000 );
                })
              }
              if (pos == init + gap*2) {
                $('.text2').fadeOut( function() {
                  $('.text3').fadeIn( 1000 );
                });
              }
              if (pos == windowWidth) {
                pos = -746;
                $('.text3').fadeOut( function() {
                  $('.text1').fadeIn( 1000 );
                });
              }
              pos++;
              elem.style.left = pos + "px";

            }
          } else {
            // mobile
            var pos = -331;
            var init = -331;
            var gap = Math.floor((windowWidth + 331) / 3);
            var id = setInterval(frame, 14);
            function frame() {
              if (pos == init + gap) {
                $('.text1').fadeOut( function() {
                  $('.text2').fadeIn(1000);
                })
              }
              if (pos == init + gap*2) {
                $('.text2').fadeOut( function() {
                  $('.text3').fadeIn(1000);
                });
              }
              if (pos == windowWidth) {
                pos = -332;
                $('.text3').fadeOut( function() {
                  $('.text1').fadeIn(1000);
                });
              }
              pos++;
              elem.style.left = pos + "px";
            }
          }
        })

      }


      $( ".navbar-toggler" ).bind( "click", function() {
        $('#navbarNavDropdown').toggleClass( "collapse" );
      });
    });



  }) ( jQuery);
