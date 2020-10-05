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
			<h1 class="text1 bold">Le notizie<br><br>&nbsp;&nbsp;vengono prima di tutto.</h1>
			<h1 class="text2 bold">Lavoriamo con<br><br>&nbsp;&nbsp;pagamenti a performance.</h1>
			<h1 class="text3 bold">Il nostro focus<br><br>&nbsp;&nbsp;è l'innovazione.</h1>
	  </div>
		<div class="action">
			<button class="mp-btn mp-btn-small" type="button" onclick="location.href='<?php echo get_permalink( get_page_by_path( 'servizi' ) ) ?>'"><h6 class="bold">Scopri di più</h6></button>
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
   <div class="col-sm-4">
		 <div class="table zoom" onmouseover="mouseOver(this)" onmouseout="mouseOut(this)">
			 <div class="title"><h2><span>SPAGNA</span><br>2000&nbsp;&nbsp;‎€</h2></div>
			 <div class="content">
				 <div class="icon"><img src="http://localhost/wordpress/wp-content/uploads/2020/09/Sottrazione-15.png" /></div>
         <div><h5>5 uscite garantite<span hidden>una fra le maggiori testate nazionali</span></h5><hr></div>
				 <div><h5>Meeting dedicato</h5><hr></div>
				 <div><h5>Ideazione della notizia</h5><hr></div>
				 <div><h5>Scrittura del comunicato</h5><hr></div>
				 <div><h5>Invio comunicato ai giornalisti</h5><hr></div>
				 <div><h5>Raccolta delle pubblicazioni</h5><hr></div>
				 <div><h5>Reporting</h5><hr></div>
				 <div class="extra"><h5>Extra<span hidden><h2>1000&nbsp;‎€</h2></span></h5><hr></div>
				 <div><h5>Una seconda uscita garantita<span hidden>una fra le maggiori testate nazionali</span></h5></div>
				 <div><button type="button" class="mp-btn mp-btn-small"><h6 class="bold">Scopri di più</h6></button></div>
			</div>
		</div>
	 </div>
   <div class="col-sm-4"><div class="table zoom" onmouseover="mouseOver(this)" onmouseout="mouseOut(this)">
		 <div class="title"><h2><span>ITALIA</span><br>2000&nbsp;&nbsp;‎€</h2></div>
		 <div class="content">
			 <div class="icon"><img src="http://localhost/wordpress/wp-content/uploads/2020/09/Sottrazione-15.png" /></div>
			 <div><h5>5 uscite garantite<span hidden>una fra Milano Finanza, Ilsole24ore, Corriere o Repubblica</span></h5><hr></div>
			 <div><h5>Meeting dedicato</h5><hr></div>
			 <div><h5>Ideazione della notizia</h5><hr></div>
			 <div><h5>Scrittura del comunicato</h5><hr></div>
			 <div><h5>Invio comunicato ai giornalisti</h5><hr></div>
			 <div><h5>Raccolta delle pubblicazioni</h5><hr></div>
			 <div><h5>Reporting</h5><hr></div>
			 <div class="extra"><h5>Extra<span hidden><h2>1000&nbsp;‎€</h2></span></h5><hr></div>
			 <div><h5>Una seconda uscita garantita<span hidden>Una seconda grande uscita garantita fra Milano Finanza, Ilsole24ore,Corriere, Wired, Start up Italia,Libero, il giornale, la verità</span></h5></div>
			 <div><button type="button" class="mp-btn mp-btn-small"><h6 class="bold">Scopri di più</h6></button></div>
		</div>
	</div></div>
   <div class="col-sm-4"><div class="table zoom" onmouseover="mouseOver(this)" onmouseout="mouseOut(this)">
		 <div class="title"><h2><span>UK</span><br>3500&nbsp;&nbsp;‎€</h2></div>
		 <div class="content">
			 <div class="icon"><img src="http://localhost/wordpress/wp-content/uploads/2020/09/Sottrazione-15.png" /></div>
			 <div><h5>5 uscite garantite<span hidden>una fra le maggiori testate nazionali</span></h5><hr></div>
			 <div><h5>Meeting dedicato</h5><hr></div>
			 <div><h5>Ideazione della notizia</h5><hr></div>
			 <div><h5>Scrittura del comunicato</h5><hr></div>
			 <div><h5>Invio comunicato ai giornalisti</h5><hr></div>
			 <div><h5>Raccolta delle pubblicazioni</h5><hr></div>
			 <div><h5>Reporting</h5><hr></div>
			 <div class="extra"><h5>Extra<span hidden><h2>1500&nbsp;‎€</h2></span></h5><hr></div>
			 <div><h5>Una seconda uscita garantita<span hidden>una fra le maggiori testate nazionali</span></h5></div>
			 <div><button type="button" class="mp-btn mp-btn-small"><h6 class="bold">Scopri di più</h6></button></div>
		</div>
	</div>
	</div>
  </div>
</section>


<section class="section-know-more">
	 	<div class="rec">
			<h3 class="bold">Vuoi saperne di più?</h3>
			<button type="button" onclick="location.href='<?php echo get_permalink( get_page_by_path( 'contatti' ) ) ?>'"><h4>Contattaci</h4></button>
		</div>
</section>

<?php
    get_footer();
