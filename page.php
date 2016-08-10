<?php
/*
Template Name: Single Page
*/
get_header(); ?>
<!--  I'M USING PAGEdotPHP -->
<?php while ( have_posts() ) : the_post(); ?>
<div class="row">
    <div class="col-md-9 col-left-outer">
        <div class="col-md-12 col-left">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12 col-right">
            <!-- Archive Side Navigation -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<!-- /.row -->
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
