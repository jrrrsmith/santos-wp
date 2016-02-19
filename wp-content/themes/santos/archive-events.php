<?php

/**
 * Template Name: Events Page
 */

get_header(); 

?>
	<div class="events list">
		<h1 class="events__title">Upcoming Events</h1>
		<span class="events__view">
			<a class="list-view active">List View</a>
			<a class="flyer-view">Flyer View</a>
		</span>
		<ul class="events__feed clear">
			<?php 
				$posts = get_posts(array(
					'post_type'			=> 'events',
					'posts_per_page'	=> -1,
					'meta_key'			=> 'event_date',
					'meta_type'   => 'date',
					'orderby'			=> 'meta_value_num',
					'order'				=> 'ASC'
				));

				if( $posts ): ?>
			<?php foreach( $posts as $post ): 
				setup_postdata( $post )
			?>
			<li class="events__item">
				<a class="events__item__img__container html5lightbox" data-group="mygroup" href="<?php the_field('event_image'); ?>">
					<img class="events__item__img" src="<?php the_field('event_image'); ?>" />
				</a>
				<div class="events__item__list-data">
					<div class="events__item__list-data__date">
						<?php echo date("n/j",strtotime(get_field('event_date'))); ?>
					</div>
				</div>
				<div class="events__item__info">
					<h2 class="events__item__title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<span class="events__item__subinfo"><?php the_field('age_limit'); ?> | <?php the_field('event_location'); ?> | <?php the_field('event_date'); ?></span>
					<?php the_field('short_description'); ?>
					<a class="events__item__more button" href="<?php the_permalink(); ?>">Read More</a>
					<a class="events__item__tickets button <?php the_field('tickets_available'); ?>" href="<?php the_field('tickets_link'); ?>">Tickets</a>
				</div>
			</li>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</ul>
	</div>

<?php get_footer(); ?>