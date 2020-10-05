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
			<h1 class="text1 bold">News<br><br>&nbsp;&nbsp;come first.</h1>
			<h1 class="text2 bold">We get paid<br><br>&nbsp;&nbsp;based on results.</h1>
			<h1 class="text3 bold">Our focus is<br><br>&nbsp;&nbsp;on innovation.</h1>
	  </div>
		<div class="action">
			<button class="mp-btn mp-btn-small" type="button" onclick="location.href='<?php echo get_permalink( get_page_by_path( 'servizi' ) ) ?>'"><h6 class="bold">Find more</h6></button>
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
   <div class="col-sm-4">
		 <div class="table zoom" onmouseover="mouseOver(this)" onmouseout="mouseOut(this)">
			 <div class="title"><h2><span>SPAIN</span><br>2000&nbsp;&nbsp;‎€</h2></div>
			 <div class="content">
				 <div class="icon"><img src="http://localhost/wordpress/wp-content/uploads/2020/09/Sottrazione-15.png" /></div>
         <div><h5>5 guaranteed media outlets<span hidden>one media outlets out of the major in the country</span></h5><hr></div>
				 <div><h5>Dedicated meeting</h5><hr></div>
				 <div><h5>Creation of effective news</h5><hr></div>
				 <div><h5>Writing the press release</h5><hr></div>
				 <div><h5>Contacting the journalists</h5><hr></div>
				 <div><h5>Collection of publications</h5><hr></div>
				 <div><h5>Reporting</h5><hr></div>
				 <div class="extra"><h5>Extra<span hidden><h2>1000&nbsp;‎€</h2></span></h5><hr></div>
				 <div><h5>A second big guaranteed media outlet<span hidden>one media outlets out of the major in the country</span></h5></div>
				 <div><button type="button" class="mp-btn mp-btn-small"><h6 class="bold">Find more</h6></button></div>
			</div>
		</div>
	 </div>
   <div class="col-sm-4"><div class="table zoom" onmouseover="mouseOver(this)" onmouseout="mouseOut(this)">
		 <div class="title"><h2><span>ITALY</span><br>2000&nbsp;&nbsp;‎€</h2></div>
		 <div class="content">
			 <div class="icon"><img src="http://localhost/wordpress/wp-content/uploads/2020/09/Sottrazione-15.png" /></div>
			 <div><h5>5 guaranteed media outlets<span hidden>one between Milano Finanza, Ilsole24ore, Corriere or Repubblica</span></h5><hr></div>
			 <div><h5>Dedicated meeting</h5><hr></div>
			 <div><h5>Creation of effective news</h5><hr></div>
			 <div><h5>Writing the press release</h5><hr></div>
			 <div><h5>Contacting the journalists</h5><hr></div>
			 <div><h5>Collection of publications</h5><hr></div>
			 <div><h5>Reporting</h5><hr></div>
			 <div class="extra"><h5>Extra<span hidden><h2>1000&nbsp;‎€</h2></span></h5><hr></div>
			 <div><h5>A second big guaranteed media outlet<span hidden>one between Milano Finanza, Ilsole24ore, Corriere, Wired, Start up Italia, Libero, il giornale, la verità</span></h5></div>
			 <div><button type="button" class="mp-btn mp-btn-small"><h6 class="bold">Find more</h6></button></div>
		</div>
	</div></div>
   <div class="col-sm-4"><div class="table zoom" onmouseover="mouseOver(this)" onmouseout="mouseOut(this)">
		 <div class="title"><h2><span>UK</span><br>3500&nbsp;&nbsp;‎€</h2></div>
		 <div class="content">
			 <div class="icon"><img src="http://localhost/wordpress/wp-content/uploads/2020/09/Sottrazione-15.png" /></div>
			 <div><h5>5 guaranteed media outlets<span hidden>one media outlets out of the major in the country</span></h5><hr></div>
			 <div><h5>Dedicated meeting</h5><hr></div>
			 <div><h5>Creation of effective news</h5><hr></div>
			 <div><h5>Writing the press release</h5><hr></div>
			 <div><h5>Contacting the journalists</h5><hr></div>
			 <div><h5>Collection of publications</h5><hr></div>
			 <div><h5>Reporting</h5><hr></div>
			 <div class="extra"><h5>Extra<span hidden><h2>1500&nbsp;‎€</h2></span></h5><hr></div>
			 <div><h5>A second big guaranteed media outlet<span hidden>one media outlets out of the major in the country</span></h5></div>
			 <div><button type="button" class="mp-btn mp-btn-small"><h6 class="bold">Find more</h6></button></div>
		</div>
	</div>
	</div>
  </div>
</section>


<section class="section-know-more">
	 	<div class="rec">
			<h3 class="bold">You want to talk to us?</h3>
			<button style="width:auto;" type="button" onclick="location.href='<?php echo get_permalink( get_page_by_path( 'contatti' ) ) ?>'"><h4>Contact us</h4></button>
		</div>
</section>

<?php
    get_footer();
