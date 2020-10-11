( function ($) {

    $( document ).ready(function() {



      $( ".insights-post-list .post" ).hover(
        function() {
          $( this ).css('background-color', '#ffaa00');
          $( this ).find('img').attr('src', 'http://localhost/wordpress/wp-content/uploads/2020/10/arrow1.png');
          $( this ).find('img').attr('srcset', 'http://localhost/wordpress/wp-content/uploads/2020/10/arrow1.png');
        }, function() {
          $( this ).css('background-color', '#ffffff');
          $( this ).find('img').attr('src', 'http://localhost/wordpress/wp-content/uploads/2020/09/arrow2.png');
          $( this ).find('img').attr('srcset', 'http://localhost/wordpress/wp-content/uploads/2020/09/arrow2.png');
      });

      if ($( window ).width() > 991) {
        $('.single-item').slick({
          speed: 500,
          slidesToShow: 4,
          slidesToScroll: 1
        });
      } else {
        $('.single-item').slick({
          speed: 500,
          slidesToShow: 1,
          slidesToScroll: 1
        });
      }

      $('.service-tabs .builder-tabs-wrap').tabs();

      $( ".accordion-title" ).each(function() {
          if ($(this).find('a').attr('aria-expanded') === 'true') {
            $(this).append( "<img src='http://localhost/wordpress/wp-content/themes/honeypress-child/images/arrow_top.png' />" );
          }
          else {
            $(this).append( "<img src='http://localhost/wordpress/wp-content/themes/honeypress-child/images/sottrazione-15.png' />" );
          }
      })

      if ( document.documentElement.lang.toLowerCase() === "en-gb" ) {
        $('.accordion-content').append('<a href="#" class="mp-btn mp-btn-small-en" type="button" onclick=""><h6 class="bold">Send your resume</h6></a>');
        $('#custom_html-6 h6.label').html("You want to talk to us?");
        $('#custom_html-6 button h6').html("Contact us");
        $('#custom_html-6 button').attr("onclick", "location.href='/wordpress/en/contacts/'");
      } else {
        $('.accordion-content').append('<a href="#" class="mp-btn mp-btn-small" type="button" onclick=""><h6 class="bold">Invia il tuo CV</h6></a>');
      }


      $('.workwithus-jobs .module-accordion').accordion({
          beforeActivate: function( event, ui ) {
            ui.newHeader.find('img').attr('src', 'http://localhost/wordpress/wp-content/themes/honeypress-child/images/arrow_top.png');
            ui.oldHeader.find('img').attr('src', 'http://localhost/wordpress/wp-content/themes/honeypress-child/images/sottrazione-15.png');
          }
      });

      $( ".image-grid .col-lg-4" ).hover(
          function() {
            var imgUrl = $( this ).find('img').attr('src');
            var newUrl = imgUrl.substr(0, imgUrl.length-4)+"A.png";
            $( this ).find('img').attr('src', newUrl);
            //$( this ).find('img').attr('srcset', 'http://localhost/wordpress/wp-content/uploads/2020/09/Gruppo-di-maschere-91.png');
          }, function() {
            var imgUrl = $( this ).find('img').attr('src');
            var newUrl = imgUrl.substr(0, imgUrl.length-5)+".png";
            $( this ).find('img').attr('src', newUrl);
            //$( this ).find('img').attr('srcset', 'http://localhost/wordpress/wp-content/uploads/2020/09/Gruppo-di-maschere-86.png');
      });

      $( ".section-service .col-lg-4" ).hover(
          function() {
            var imgUrl = $( this ).find('img').attr('src');
            var newUrl = imgUrl.substr(0, imgUrl.length-5)+"2.png";
            $( this ).find('img').attr('src', newUrl);
            $( this ).attr('style', 'z-index:1000;top:-172px;left:-64px;');
            //$( this ).find('img').attr('srcset', 'http://localhost/wordpress/wp-content/uploads/2020/09/Gruppo-di-maschere-91.png');
          }, function() {
            var imgUrl = $( this ).find('img').attr('src');
            var newUrl = imgUrl.substr(0, imgUrl.length-5)+"1.png";
            $( this ).find('img').attr('src', newUrl);
            $( this ).removeAttr('style');
            //$( this ).find('img').attr('srcset', 'http://localhost/wordpress/wp-content/uploads/2020/09/Gruppo-di-maschere-86.png');
      });
    });




  }) ( jQuery);
