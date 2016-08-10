<?php
/*
Template Name: Single Page
*/
get_header(); ?>
<!--  I'M USING PAGEdotPHP -->
<?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
<!-- /.row -->
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
