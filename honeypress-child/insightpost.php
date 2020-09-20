<?php
/*
 * Template Name: Insight Post
 * Template Post Type: post, page, product
 */

 get_header();  ?>
 <section class="section-module blog insight-post">
   <div class="row insight-post-breadcrumb">
     <div class="col-sm-3">
       <img src="http://localhost/wordpress/wp-content/uploads/2020/09/Sottrazione-35.png" />
       <a href="<?php echo get_permalink( get_page_by_path( 'insights' ) ) ?>"><h6>Torna a Insights</h6></a>
     </div>
     <div class="col-sm-9">
       <img src="http://localhost/wordpress/wp-content/uploads/2020/09/Raggruppa-231.png" />
     </div>
   </div>
 	<div class="container insight-post-content">
 		<div class="row">
 			<?php
 			if ( is_active_sidebar( 'sidebar-1' ) ):
 				echo '<div class="col-lg-8 col-md-7 col-sm-12 standard-view blog-single">';
 			else:
 				echo '<div class="col-lg-12 col-md-12 col-sm-12 standard-view blog-single">';
 			endif;
 				while(have_posts()): the_post();
 					get_template_part('template-parts/content','single');
 				endwhile;
 				if(get_theme_mod('honeypress_enable_single_post_admin_details',true)===true):
 					get_template_part('template-parts/auth-details');
 				endif;

 				// If comments are open or we have at least one comment, load up the comment template.
 				if ( comments_open() || get_comments_number() ) : comments_template(); endif;?>
 			</div>
 		</div>
 	</div>
  <div class="bottom">
    <img src="http://localhost/wordpress/wp-content/uploads/2020/09/Raggruppa-232.png" />
  </div>
 </section>
 <?php get_footer();?>
