<?php get_header(); ?>

<div class="photo-grid">
    <h2><?php the_title(); ?> - <?php echo date("n/j/y",strtotime(get_field('date'))); ?></h2>
	<?php 

$images = get_field('gallery');

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a class="html5lightbox" data-group="mygroup" href="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>">
                     <img class="thumb" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
	</div> <!-- END OF PHOTO GRID -->
</div> 	<!-- END OF FIRST PAGE -->
<?php get_footer(); ?>