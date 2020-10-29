( function ($) {

    $( document ).ready(function() {

      // home page - navigation
      //$( ".lang-item-en .nav-link img").attr('src', 'http://localhost/wordpress/wp-content/themes/honeypress-child/images/flag-eng.png');
      //$( ".lang-item-it .nav-link img").attr('src', 'http://localhost/wordpress/wp-content/themes/honeypress-child/images/flag-ita.png');
      //$( ".lang-item .nav-link img").attr('style', 'width: 38px; height: 24px;');

      // home page - services
      $( ".image-grid .col-lg-4" ).hover(
          function() {
            var imgUrl = $( this ).find('img').attr('src');
            var newUrl = imgUrl.substr(0, imgUrl.length-4)+"A.png";
            $( this ).find('img').attr('src', newUrl);
            $( this ).find('img').data('oUrl', imgUrl);
          }, function() {
            var imgUrl = $( this ).find('img').attr('src');
            var newUrl = imgUrl.substr(0, imgUrl.length-5)+".png";
            $( this ).find('img').attr('src', newUrl);
      });



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

      // START services page - logo carousel
      if ($( window ).width() >= 1545) {
        $('.single-item').slick({
          speed: 500,
          slidesToShow: 4,
          slidesToScroll: 1
        });
      } else if ($( window ).width() >= 1100) {
        $('.single-item').slick({
          speed: 500,
          slidesToShow: 3,
          slidesToScroll: 1
        });
      }
      else if ($( window ).width() >= 992) {
        $('.single-item').slick({
          speed: 500,
          slidesToShow: 2,
          slidesToScroll: 1
        });
      }
      else {
        $('.single-item').slick({
          speed: 500,
          slidesToShow: 1,
          slidesToScroll: 1
        });
      }
      // END services page - logo carousel

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
        $('.accordion-content').append('<a href="mailto:demonxuxiang@gmail.com" class="mp-btn mp-btn-small-en" type="button"><h6 class="bold">Send your resume</h6></a>');
        $('#custom_html-6 h6.label').html("You want to talk to us?");
        $('#custom_html-6 button h6').html("Contact us");
        $('#custom_html-6 button').attr("onclick", "location.href='/wordpress/en/contacts/'");
      } else {
        $('.accordion-content').append('<a href="mailto:demonxuxiang@gmail.com" class="mp-btn mp-btn-small" type="button"><h6 class="bold">Invia il tuo CV</h6></a>');
      }

      // START work with us - accordion
      $('.workwithus-jobs .module-accordion').accordion({
        active: false,
        collapsible: true,
          beforeActivate: function( event, ui ) {
            ui.newHeader.find('img').attr('src', 'http://localhost/wordpress/wp-content/themes/honeypress-child/images/arrow_top.png');
            ui.oldHeader.find('img').attr('src', 'http://localhost/wordpress/wp-content/themes/honeypress-child/images/sottrazione-15.png');
          }
      });
      // END work with us - accordion


      $( ".image-grid .col-lg-4" ).click(
        function() {
          var imgUrl = $( this ).data('url');
          var modal = document.getElementById("myModal");
          var modalImg = document.getElementById("img01");
          modal.style.display = "block";
          modalImg.src = imgUrl;
        }
      )

      $( ".modal .close" ).click(
        function() {
          $('#myModal').attr('style', 'display:none;');
        }
      )

      // START service box
      if ($( window ).width() >= 1200) {
        $( ".section-service .col-xl-4" ).find('img').attr('width', '352px');
      }


      $( ".section-service .col-lg-4" ).hover(
          function() {
            if ($( window ).width() >= 1200) {
              var imgUrl = $( this ).find('img').attr('src');
              var newUrl = imgUrl.substr(0, imgUrl.length-5)+"2.png";
              $( this ).find('img').attr('src', newUrl);
              $( this ).find('img').attr('width', '469px');
              $( this ).attr('style', 'z-index:10;top:-129px;left:-48px;');
            }

          }, function() {
            if ($( window ).width() >= 1200) {
              var imgUrl = $( this ).find('img').attr('src');
              var newUrl = imgUrl.substr(0, imgUrl.length-5)+"1.png";
              $( this ).find('img').attr('src', newUrl);
              $( this ).find('img').attr('width', '352px');
              $( this ).removeAttr('style');
            }

      });

      $('.home .section-service .col-xl-4 img').on('click', function() {
        if ( document.documentElement.lang.toLowerCase() === "en-gb" ) {
          window.open('wordpress/en/services', '_self');
        } else {
          window.open('wordpress/servizi', '_self');
        }
      });
      // END service box
    });




  }) ( jQuery);
