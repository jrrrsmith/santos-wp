<?php

/**
 * Template Name: Gallery Page
 */

get_header(); 

?>
	<div class="gallery">
		<ul class="gallery-feed clear">
			<?php while ( have_posts() ) : the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<div class="content">
						<img class="post-img" src="<?php the_field('featured_image'); ?>" />
					</div> <!-- END OF CONTENT -->
					<div class="title-wrap">
						<p><?php the_title(); ?> - <?php echo date("n/j/y",strtotime(get_field('date'))); ?></p>
					</div> <!-- END OF TITLE WRAP -->
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>

<?php get_footer(); ?>