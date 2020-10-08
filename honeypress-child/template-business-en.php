<?php
// Template Name: Business Template English
	get_header();

	do_action( 'spiceb_honeypress_sections', false );
	get_template_part('index','news');
?>

<!-- template-business.php -->

<div>
	<div class="home-banner">
		<div class="text">
			<h1 class="text1 bold">News<br><br>&nbsp;&nbsp;&nbsp;&nbsp;come first.</h1>
			<h1 class="text2 bold">We get paid<br><br>&nbsp;&nbsp;&nbsp;&nbsp;based on results.</h1>
			<h1 class="text3 bold">Our focus is<br><br>&nbsp;&nbsp;&nbsp;&nbsp;on innovation.</h1>
	  </div>
		<div class="action">
			<a class="mp-btn mp-btn-small" type="button" href="<?php echo get_permalink( get_page_by_path( 'servizi' ) ) ?>"><h6 class="bold">Find more</h6></a>
		</div>
	</div>
	<img id="home-arrow" src="/wordpress/wp-content/themes/honeypress-child/images/sottrazione-165.png" />
</div>

<div class="home-arrow-down">
	<img src="/wordpress/wp-content/themes/honeypress-child/images/unione-9s.png" />
	<h1 class="bold">What are our solutions?</h1><br>
	<h3 class="bold">We get paid based on results and we work with 30-days contracts.</h3>
</div>

<section class="section-service container">
	<div class="row">
		<div class="col-lg-4"><a href="/wordpress/en/services/"><img src="/wordpress/wp-content/themes/honeypress-child/images/solutions/BOX_SPAIN_1.png" /></a></div>
		<div class="col-lg-4"><a href="/wordpress/en/services/"><img src="/wordpress/wp-content/themes/honeypress-child/images/solutions/BOX_ITALY_1.png" /></a></div>
		<div class="col-lg-4"><a href="/wordpress/en/services/"><img src="/wordpress/wp-content/themes/honeypress-child/images/solutions/BOX_GB_1.png" /></a></div>
	</div>
</section>


<section class="section-know-more">
	 	<div class="rec">
			<h3 class="bold">You want to talk to us?</h3>
			<button class="mp-btn-big" type="button" onclick="location.href='<?php echo get_permalink( get_page_by_path( 'contacts' ) ) ?>'"><h4>Contact us</h4></button>
		</div>
</section>

<?php
    get_footer();
