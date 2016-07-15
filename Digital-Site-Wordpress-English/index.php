<?php
/*
Template Name: Default Main Page
*/
get_header(); ?>
<?php query_posts('posts_per_page=12'); while(have_posts()) : the_post(); ?>
<div class="row">
    <div class="col-md-9">
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="...">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading"><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a></h4>
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
