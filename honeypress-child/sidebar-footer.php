<?php
/**
 * Footer Widget Area
 *
 * @package Honeypress
 */
?>
<div class="row footer-sidebar">
	<?php
	  if ((is_front_page() && 'page' == get_option( 'show_on_front' )) || (is_page('servizi'))) {
		for($i=1; $i<=1; $i++)
		{
			echo '<div class="col-lg-4 col-md-12 col-sm-12">';
			dynamic_sidebar('footer-sidebar-'.$i);
			echo '</div>';
		}
		for($i=2; $i<=2; $i++)
		{
			echo '<div class="col-lg-4 col-md-6 col-sm-6 col-6">';
			dynamic_sidebar('footer-sidebar-'.$i);
			echo '</div>';
		}
		?>
		<div class="col-lg-4 col-md-6 col-sm-6 col-6">

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
		            //'posts_per_page' => -1,
								'category_name' => 'news'
		          )
		        );
		        foreach ($news as $singleNews) {?>
		          <li class="menu-item menu-item-type-post_type menu-item-object-page">
		          <a href="<?php echo get_permalink( $singleNews -> ID ); ?>"><?php echo get_the_title( $singleNews -> ID ); ?></a>
		        </li>
					<?php } ?>
						  </ul>
					  </div>
					</aside></div>
		    <?php } else {
					for($i=1; $i<=1; $i++)
					{
						echo '<div class="col-lg-4 col-md-12 col-sm-12">';
						dynamic_sidebar('footer-sidebar-'.$i);
						echo '</div>';
					}
					for($i=2; $i<=3; $i++)
					{
						echo '<div class="col-lg-4 col-md-6 col-sm-6 col-6">';
						dynamic_sidebar('footer-sidebar-'.$i);
						echo '</div>';
					}
				?>
					<div class="col-lg-4 col-md-6 col-sm-6 col-6">
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
								'category_name' => 'news'
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
				</div>
				<?php }?>


</div>
