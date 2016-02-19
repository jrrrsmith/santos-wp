<?php get_header();?>
<?php
$background = get_field( 'event_image' );
$background_style = $background ? "background-image:  linear-gradient(to bottom, rgba(0,0,0,0) 40%, rgba(0, 0, 0, 1) 100%)
   ,  url($background)" : '';
?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="post-hero" style="<?php echo $background_style; ?>">
  <div class="post-title">
    <h2><?php the_title(); ?></h2>
    <span><?php  the_time('F jS, Y'); ?></span>
  </div> <!-- END OF POST TITLE -->
</div> <!-- END OF POST HERO -->
<div class="news">
  <div class="post-content">
    <?php the_content(); ?>          
  </div> <!-- END OF POST CONTENT -->
</div> <!-- END OF NEWS -->
<?php endwhile; ?>
<?php get_footer();?>