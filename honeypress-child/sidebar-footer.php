<?php
/**
 * Footer Widget Area
 *
 * @package Honeypress
 */
?>
<div class="row footer-sidebar">
	<?php
		for($i=1; $i<=2; $i++)
		{
			echo '<div class="col-lg-4 col-md-6 col-sm-12">';
			dynamic_sidebar('footer-sidebar-'.$i);
			echo '</div>';
		}?>
		<div class="col-lg-4 col-md-6 col-sm-12">
		  <?php
		    if (is_front_page() && 'page' == get_option( 'show_on_front' )) {?>
		      <aside id="nav_menu-3" class="widget widget_text sml-device widget_news">
		        <h3 class="widget-title">News</h3>
		        <div class="menu-menu-1-container">
		          <ul id="menu-menu-3" class="menu">
		          <?php $news = get_posts(
		          array(
		            'post_type'=> 'post',
		            'orderby'    => 'ID',
		            'post_status' => 'publish',
		            'order'    => 'DESC',
		            'posts_per_page' => -1
		          )
		        );
		        foreach ($news as $singleNews) {?>
		          <li class="menu-item menu-item-type-post_type menu-item-object-page">
		          <a href="<?php echo get_permalink( $singleNews -> ID ); ?>"><?php echo get_the_title( $singleNews -> ID ); ?></a>
		        </li>
					<?php } ?>
						  </ul>
					  </div>
					</aside>
		    <?php } else { ?>
					<aside id="nav_menu-3" class="widget_text sml-device widget-contact">
						<div class="menu-menu-1-container">
							<h6 class="bold">Vuoi saperne di più?</h6>
							<button type="button" class="mp-btn mp-btn-small" onclick="location.href='<?php echo get_permalink( get_page_by_path( 'contatti' ) ) ?>'"><h6 class="bold">Contattaci</h6>
						</div>
					</aside>
				<?php }?>

		</div>


</div>
