<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="row">
    <div class="col-md-9 col-left-outer">
        <div class="col-md-12 col-left">
            <!-- Blog Post -->

            <!-- Title -->
            <h1 class="news-title"><?php the_title(); ?></h1>
            <ul class="news-info">
              <li>
                <i class="fa fa-calendar" aria-hidden="true"></i>
                <?php the_time('F j, Y H:i');  ?>
              </li>
              <li>
                <i class="fa fa-user" aria-hidden="true"></i>
                <a href="/teacher/"><?php the_author();  ?></a>
              </li>
            </ul>

            <hr>
                       <div class="row news-row">
                         <div class="col-md-3 col-sm-3 news-img-container">
                           <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                             <?php if ( has_post_thumbnail() ) {
                             the_post_thumbnail('thumbnail', array('class' => 'img-responsive news-image'));
                           } else { ?>
                             <img src="<?php echo get_template_directory_uri(); ?>/img/PLACEHOLDER.jpg" class="img-responsive news-image" alt="...">
                           <?php } ?>
                         </a>
                         </div>
                         <div class="col-md-9 col-sm-9 news-text">
                       <?php the_content(); ?>
                         </div>
                                  </div>
                                  <!--/.row-->
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12 col-right">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>
