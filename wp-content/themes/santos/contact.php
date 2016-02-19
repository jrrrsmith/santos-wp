<?php

/**
 * Template Name: Contact Page
 */

get_header(); 

?>
	<div class="main">
		<?php while(have_posts()) : the_post(); ?>
		<div class="map-wrap">
			<div id="map_canvas"></div>
		</div>
		<div class="contact-wrap">
			<div class="contact-email">
				<h2>Contact Info:</h2>
				<p><a href="mailto:info@santospartyhouse.com">General Information</a></p>
				<p><a href="mailto:info@santospartyhouse.com">Lost &amp; Found</a></p>
				<h2>Booking Info:</h2>
				<p>Head Booker: Curtis Nystrom- <a href="mailto:live@santospartyhouse.com">live@santospartyhouse.com</a></p>
				<p>Bands: Contact- <a href="mailto:bands@santospartyhouse.com">bands@santospartyhouse.com</a></p>
				<p>VIP Host/Bottle Reservations- <a href="mailto:tables@santospartyhouse.com">tables@santospartyhouse.com</a></p>
			</div> <!-- END OF CONTACT EMAIL -->
			<div class="contact-address">
				<p>Santos Party House</p>
				<p>96 Lafayette St.</p>
				<p>New York, NY 10013</p>
				<p>212-584-5492</p>
			</div>
		</div> <!-- END OF CONTACT WRAP -->
		<div class="form-wrap">
			<h2>Send Us a Message:</h2>
			<?php the_field('form_shortcode'); ?>
		</div>
		<?php endwhile; ?>
	</div> <!-- END OF MAIN -->

<?php get_footer(); ?>
