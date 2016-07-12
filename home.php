<?php
/*
Template Name: News Home
*/
get_header(); ?>

<div class="row">
    <div class="col-md-9 col-left-outer news-post">
        <div class="col-md-12 col-left">
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <h2 class="news-title">
                      <a href="<?php the_permalink();  ?>"><?php the_title(); ?></a>
                  </h2>
            <ul class="news-info">
                <li>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <?php the_time( 'F j, Y H:i'); ?>
                </li>
                <li>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <a href="/teacher/">
                        <?php the_author(); ?>
                    </a>
                </li>
            </ul>
            <?php the_category(); ?>
            <div class="row news-row">
                <div class="col-md-3 col-sm-3 news-img-container">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail', array( 'class'=> 'img-responsive news-image')); } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/PLACEHOLDER.jpg" class="img-responsive news-image" alt="...">
                        <?php } ?>
                    </a>
                </div>
                <div class="col-md-9 col-sm-9 news-text">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <!--/.row-->
            <?php endwhile; ?>
            <?php else : ?>
            <p>
                <?php _e( 'Sorry, no posts matched your criteria.'); ?>
            </p>
            <?php endif; ?>
            <?php if (function_exists( "pagination")) { pagination($additional_loop->max_num_pages); } ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12 col-right">
            <?php get_sidebar(); ?>
        </div>
    </div>
    <!-- Pager -->
</div>
<!-- /.row -->

<?php get_footer(); ?>
