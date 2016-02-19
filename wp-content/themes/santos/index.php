<?php get_header();?>
<?php while(have_posts()) : the_post(); ?>
	<div class="index-body">
		<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="meta post-data"><?php  the_time('F jS, Y'); ?>
			</p>
		<?php the_content('Read More'); ?>
	</div>
	<div class="navigation"><p><?php posts_nav_link(); ?></p></div>
<?php endwhile; ?>
<?php get_footer();?>