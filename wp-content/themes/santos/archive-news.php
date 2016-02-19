<?php

/**
 * Template Name: News Page
 */

get_header(); 

?>
	<div class="news">
		<ul class="news-feed clear">
			<?php while ( have_posts() ) : the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<div class="content">
						<img class="post-img" src="<?php the_field('news_image'); ?>" />
					</div> <!-- END OF CONTENT -->
					<div class="title-wrap">
						<h2><?php the_title(); ?></h2>
						<p><?php the_field('subtitle'); ?></p>
					</div> <!-- END OF TITLE WRAP -->
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>

<?php get_footer(); ?>