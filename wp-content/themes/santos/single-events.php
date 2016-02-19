<?php get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="events-single">  
	<div class="events__item">
		<h2 class="events__item__title"><?php the_title(); ?></h2>
		<a class="events-single__item__img__container html5lightbox" data-group="mygroup" href="<?php the_field('event_image'); ?>">
			<img class="events__item__img" src="<?php the_field('event_image'); ?>" />
		</a>
		<div class="events__item__list-data">
			<div class="events__item__list-data__date">
				<?php echo date("n/j",strtotime(get_field('event_date'))); ?>
			</div>
		</div>
		<div class="events-single__item__info">
			<span class="events__item__subinfo"><?php the_field('age_limit'); ?> | <?php the_field('event_location'); ?> | <?php the_field('event_date'); ?></span>
			<?php the_content(); ?>
			<a class="events__item__tickets button <?php the_field('tickets_available'); ?>" href="<?php the_field('tickets_link'); ?>">Tickets</a>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer();?>