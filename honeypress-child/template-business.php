<?php
// Template Name: Business Template
	get_header();

	do_action( 'spiceb_honeypress_sections', false );
	get_template_part('index','news');
?>

<!-- template-business.php -->

<div>
	<div class="home-banner">
		<div class="text">
			<h1 class="text1 bold">Le notizie<br><br>&nbsp;&nbsp;&nbsp;&nbsp;vengono prima di tutto.</h1>
			<h1 class="text2 bold">Lavoriamo con<br><br>&nbsp;&nbsp;&nbsp;&nbsp;pagamenti a performance.</h1>
			<h1 class="text3 bold">Il nostro focus<br><br>&nbsp;&nbsp;&nbsp;&nbsp;è l'innovazione.</h1>
	  </div>
		<div class="action">
			<button class="mp-btn mp-btn-small mp-btn-reverse" type="button" onclick="location.href='<?php echo get_permalink( get_page_by_path( 'servizi' ) ) ?>'"><h6 class="bold">Scopri di più</h6></button>
		</div>
	</div>
	<img id="home-arrow" src="/wordpress/wp-content/themes/honeypress-child/images/sottrazione-165.png" />
</div>

<div class="home-arrow-down">
	<img src="/wordpress/wp-content/themes/honeypress-child/images/unione-9s.png" />
	<h1 class="bold">Quali le nostre soluzioni?</h1><br>
	<h3 class="bold">Lavoriamo a PERFORMANCE e con contratti di 30 giorni.</h3>
</div>

<section class="section-service container">
	<div class="row">
		<div class="col-lg-4"><a href="/wordpress/servizi/"><img src="/wordpress/wp-content/themes/honeypress-child/images/solutions/BOX_SPAGNA_1.png" /></a></div>
		<div class="col-lg-4"><a href="/wordpress/servizi/"><img src="/wordpress/wp-content/themes/honeypress-child/images/solutions/BOX_ITALIA_1.png" /></a></div>
		<div class="col-lg-4"><a href="/wordpress/servizi/"><img src="/wordpress/wp-content/themes/honeypress-child/images/solutions/BOX_UK_1.png" /></a></div>
	</div>
</section>


<section class="section-know-more">
	 	<div class="rec">
			<h3 class="bold">Vuoi saperne di più?</h3>
			<button class="mp-btn-big" type="button" onclick="location.href='<?php echo get_permalink( get_page_by_path( 'contatti' ) ) ?>'"><h4>Contattaci</h4></button>
		</div>
</section>

<?php
    get_footer();
