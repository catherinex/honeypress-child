<?php

//require_once( get_stylesheet_directory() . 'inc/breadcrumbs/breadcrumbs.php' );
//require_once HONEYPRESS_CHILD_THEME_DIR . '/inc/breadcrumbs/breadcrumbs.php';

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet' );
function my_plugin_add_stylesheet() {
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style( 'mp-style-homepage', get_stylesheet_directory_uri() . '/css/homepage.css', array(), rand(111,9999));
    wp_enqueue_style( 'mp-style-footer', get_stylesheet_directory_uri() . '/css/footer.css');
    wp_enqueue_style( 'mp-style-button', get_stylesheet_directory_uri() . '/css/button.css', array(), rand(111,9999));
    wp_enqueue_style( 'mp-style-contactus', get_stylesheet_directory_uri() . '/css/contactus.css', array(), rand(111,9999));
    wp_enqueue_style( 'mp-style-menu', get_stylesheet_directory_uri() . '/css/menu.css');
    wp_enqueue_style( 'mp-style-insightpost', get_stylesheet_directory_uri() . '/css/insightpost.css');
    wp_enqueue_style( 'mp-style-insights', get_stylesheet_directory_uri() . '/css/insights.css');
    wp_enqueue_style( 'mp-style-services', get_stylesheet_directory_uri() . '/css/services.css', array(), rand(111,9999));
    wp_enqueue_style( 'mp-style-workwithus', get_stylesheet_directory_uri() . '/css/workwithus.css');
    // slick
    wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/js/slick/slick.css');
    wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/js/slick/slick-theme.css');
    wp_enqueue_script( 'slick.min', get_stylesheet_directory_uri() . '/js/slick/slick.min.js');
    // jquery ui
    wp_enqueue_style( 'jquery-ui', get_stylesheet_directory_uri() . '/js/jquery-ui-1.12.1/jquery-ui.css');
    wp_enqueue_script( 'jquery-ui-js', get_stylesheet_directory_uri() . '/js/jquery-ui-1.12.1/jquery-ui.js');

    // mp js
    wp_enqueue_script( 'mp.animation', get_stylesheet_directory_uri() . '/js/mp.animation.js', array(), rand(111,9999));
    wp_enqueue_script( 'mp.custom', get_stylesheet_directory_uri() . '/js/mp.custom.js');

}

function honeypress_breadcrumbs()
	{
		global $post;
		$homeLink = home_url('/');
		?>
		<section class="page-title-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
                      <?php
                    	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
                      	if (is_home() || is_front_page()) {
	                    	if( ! function_exists( 'spiceb_activate' ) )
	                      	{
	                      	 	?>
	                      	 	<div class="page-title text-center text-white">
									<h1 class="text-white"><?php esc_html_e('Home', 'honeypress') ?></h1>
								</div>
	                      	 	<?php
	                      	}
	                      	else
	                      	{
	                      	 	if(get_option('show_on_front')=='posts')
	                      	 	{
	                      	 	?>
		                      	 	<div class="page-title text-center text-white">
										<h1 class="text-white"><?php esc_html_e('Home', 'honeypress') ?></h1>
									</div>
	                      	 	<?php
	                      	 	}
	                      	 	else
	                      	 	{
	                      	 		?>
	                      	 		<div class="page-title text-center text-white">
										<h1 class="text-white"><?php esc_html_e('Blog', 'honeypress') ?></h1>
									</div>
	                      	 		<?php
	                      	 	}
	                      	}
						}
						else
						{ ?>
							<div class="page-title text-center text-white">
								<?php
								if (is_search())
								{
									echo '<h1 class="text-white">'. get_search_query() .'</h1>';
								}
								else if(is_404())
								{
									echo '<h1 class="text-white">'. esc_html__('Error 404','honeypress') .'</h1>';
								}
								else if(is_category())
								{
									echo '<h1 class="text-white">'. ( esc_html__('Category: ','honeypress').single_cat_title( '', false ) ) .'</h1>';
								}
								else if ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() )
								{
									if ( class_exists( 'WooCommerce' ) )
									{
	                   if(is_shop())
	                   { ?>
	                        				<h1 class="text-white"><?php woocommerce_page_title(); ?></h1>
	                    				<?php
	                   }
	                   				 }
		            }
		            elseif( is_tag() )
		            {
		                			echo '<h1 class="text-white">'. ( esc_html__('Tag : ','honeypress') .single_tag_title( '', false ) ) .'</h1>';
		            }
		            else if(is_archive())
								{
								  the_archive_title( '<h1 class="text-white">', '</h1>' );
								}
			          else
			          { ?>
			            <h1 class="text-white"><?php the_title(''); ?></h1>
			            <?php
			          }
			                    ?>
			                </div>
						<?php }
						$breadcrumb_enable = get_theme_mod('breadcrumb_setting_enable',true);
						if($breadcrumb_enable == true)
						{
							if ( function_exists('yoast_breadcrumb') ) {
								$wpseo_titles=get_option('wpseo_titles');
								if($wpseo_titles['breadcrumbs-enable']==true){

								echo '<ul class="page-breadcrumb text-center">';
									echo '<li>';
									echo '</li>';
								$breadcrumbs = yoast_breadcrumb("","",false);
								echo wp_kses_post($breadcrumbs);
								echo '</ul>';
								}
							}
						}
						?>
                    </div>
				</div>
			</div>
		</section>
	<?php }

  function wpb_hook_javascript() {
      ?>
          <script>
          function mouseOver(x) {
            x.classList.add("bigger");
            x.classList.add("yellow-border");
            x.querySelector('.content').classList.add("yellow");
            x.querySelector('.content').querySelectorAll('span').forEach(function(s) {
              s.removeAttribute("hidden");
            })
            x.querySelector('.content').querySelector('.extra').classList.add("dark-blue-background");
            x.querySelector('.content').querySelector('.extra').querySelector('h5').style.color = '#ffaa00';
            /*document.querySelectorAll('.zoom').forEach(function(y) {
              if (x !== y) {
                y.classList.add("smaller");
              }

            });*/
          }

          function mouseOut(x) {
              x.classList.remove("bigger");
              x.classList.remove("yellow-border");
              x.querySelector('.content').classList.remove("yellow");
              x.querySelector('.content').querySelectorAll('span').forEach(function(s) {
                s.setAttribute("hidden", true);
              })
              x.querySelector('.content').querySelector('.extra').classList.remove("dark-blue-background");
              x.querySelector('.content').querySelector('.extra').querySelector('h5').style.color = '#011a27';
          }


          </script>
      <?php
  }
  add_action('wp_head', 'wpb_hook_javascript');
