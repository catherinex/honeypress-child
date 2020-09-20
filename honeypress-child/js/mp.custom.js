( function ($) {

    $( document ).ready(function() {


      $( ".insights-post-list .post" ).hover(
        function() {
          $( this ).css('background-color', '#ffaa00');
          //$( this ).find('img').attr('src', 'http://localhost/wordpress/wp-content/uploads/2020/09/Gruppo-di-maschere-91.png');
          //$( this ).find('img').attr('srcset', 'http://localhost/wordpress/wp-content/uploads/2020/09/Gruppo-di-maschere-91.png');
        }, function() {
          $( this ).css('background-color', '#ffffff');
          //$( this ).find('img').attr('src', 'http://localhost/wordpress/wp-content/uploads/2020/09/Gruppo-di-maschere-86.png');
          //$( this ).find('img').attr('srcset', 'http://localhost/wordpress/wp-content/uploads/2020/09/Gruppo-di-maschere-86.png');
        });
    });



  }) ( jQuery);
