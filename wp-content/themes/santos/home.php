<?php

/**
 * Template Name: Home Page
 */

get_header(); 

?>
<div id="owl-demo" class="owl-carousel owl-theme">
	<div class="hero-section hero-1">
		<div class="hero-inner">
			<div class="wrap">
				<div class="content">
					<div class="title-wrap">
						<h2>DJ Calvin Harris</h2>
						<p>Calvin came by and DJ'ed for everybody for a couple hours and people were into it.</p>
					</div> <!-- END OF TITLE WRAP -->
					<a href="#">Gallery</a>
				</div> <!-- END OF CONTENT -->
			</div> <!-- END OF WRAP -->
		</div> <!-- END OF HERO INNER -->
	</div> <!-- END OF HERO SECTION -->
	<div class="hero-section hero-2">
		<div class="hero-inner">
			<div class="wrap">
				<div class="content">
					<div class="title-wrap">
						<h2>Slash</h2>
						<p>We love when Slash comes by with his friends and plays some songs. Check out the photos from his show the other night.</p>
					</div> <!-- END OF TITLE WRAP -->
					<a href="#">Gallery</a>
				</div> <!-- END OF CONTENT -->
			</div> <!-- END OF WRAP -->
		</div> <!-- END OF HERO INNER -->
	</div> <!-- END OF HERO SECTION -->
	<div class="hero-section hero-3">
		<div class="hero-inner">
			<div class="wrap">
				<div class="content">
					<div class="title-wrap">
						<h2>Action Bronson</h2>
						<p>Tickets are now on sale for this upcoming show. Click the link below to get your tickets now.</p>
					</div> <!-- END OF TITLE WRAP -->
					<a href="#">Tickets</a>
				</div> <!-- END OF CONTENT -->
			</div> <!-- END OF WRAP -->
		</div> <!-- END OF HERO INNER -->
	</div> <!-- END OF HERO SECTION -->
</div> <!-- END OF OWL CAROUSEL -->
<div class="main">
	<div class="flyer-container clear">
		<div class="title-wrap">
			<h2><a href="#">Upcoming Events</a></h2>
		</div> <!-- END OF TITLE WRAP -->
		<ul>
			<li id="card">
				<div class="front"> 
					<div class="overlay">
						<div class="overlay-inner">
							<h3>Key!</h3>
							<span>w/ B.I.C. & Dee Goodz</span>
							<span class="date">7/1/15</span>
						</div>
					</div>
					<img src="<?php bloginfo('template_url');?>/images/flyer-orange-big.png" />
				</div> <!-- END OF FRONT -->
				<div class="back">
			    <img src="<?php bloginfo('template_url');?>/images/Statik.jpg" />
			  </div> <!-- END OF BACK -->
			</li>
			<li id="card-two">
				<div class="front"> 
					<div class="overlay">
						<div class="overlay-inner">
							<h3>The Breakdown</h3>
							<span>w/ Natty Kasha & The Burning Bush</span>
							<span class="date">6/26/15</span>
						</div>
					</div>
					<img src="<?php bloginfo('template_url');?>/images/flyer-orange-big.png" />
				</div> <!-- END OF FRONT -->
				<div class="back">
			    <img src="<?php bloginfo('template_url');?>/images/Statik.jpg" />
			  </div> <!-- END OF BACK -->
			</li>
			<li id="card-three">
				<div class="front"> 
					<div class="overlay">
						<div class="overlay-inner">
							<h3>Statik Selektah</h3>
							<span>Lucky 7 Album Release Show</span>
							<span class="date">7/6/15</span>
						</div>
					</div>
					<img src="<?php bloginfo('template_url');?>/images/flyer-orange-big.png" />
				</div> <!-- END OF FRONT -->
				<div class="back">
			    <img src="<?php bloginfo('template_url');?>/images/Statik.jpg" />
			  </div> <!-- END OF BACK -->
			</li>
		</ul>
	</div> <!-- END OF FLYER CONTAINER -->
	<div class="social-feeds clear">
		<div class="twitter-wrap feed-col">
			<a class="twitter-timeline" href="https://twitter.com/SantosPartyHaus" data-widget-id="616777679107436544">Tweets by @SantosPartyHaus</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
			</script>
		</div> <!-- END OF TWITTER WRAP -->
		<div class="instagram-wrap feed-col">
			<div class="ig-title-wrap clear">
				<h2><a href="http://www.instagram.com/santospartyhaus" target="_blank">Instagram</a></h2>
				<style>.ig-b- { display: inline-block; }
				.ig-b- img { visibility: hidden; }
				.ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
				.ig-b-v-24 { width: 137px; height: 24px; background: url(http://badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }
				@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
				.ig-b-v-24 { background-image: url(http://badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }</style>
				<a href="http://www.instagram.com/santospartyhaus?ref=badge" class="ig-b- ig-b-v-24 instagram">
					<img src="//www.badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" />
				</a>
			</div> <!-- END OF IG TITLE WRAP -->
			<div class="ig-feed-wrap">
				<!-- INSTANSIVE WIDGET --><script src="//instansive.com/widget/js/instansive.js"></script><iframe src="//instansive.com/widgets/7c677d5668f98ba5ee4a3a70b5ce2e0f714f200c.html" id="instansive_7c677d5668" name="instansive_7c677d5668"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
			</div> <!-- END OF IG FEED WRAP -->
		</div> <!-- END OF INSTAGRAM WRAP -->
	</div> <!-- END OF SOCIAL FEEDS -->
</div> <!-- END OF MAIN -->
<?php get_footer(); ?>