<?php
/*
Template Name: Archives
*/
get_header(); ?>
<div class="row">
    <div class="col-md-9 col-left-outer">
        <div class="col-md-12 col-left">
          <h1>Archives</h1>
          <p>
            Looking for something specific ? Why not to search through the content on our website through the archive links below, or simply using the search bar.
          </p>
          <!-- List of Archives -->
          <div class="row">

            <div class="col-md-9 col-sm-9 news-text">

                <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post();  ?>
          <div class="media">
<div class="media-body">
<a class="media-heading" href="<?php the_permalink();  ?>"><?php the_title(); ?></a>
<?php the_excerpt(); ?>
</div>
</div>
        <?php endwhile; ?>
        <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

            </div>
          </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12 col-right">
          <!-- Archive Side Navigation -->
          <div class="panel panel-default">
              <div class="panel-body">
                  Search:
              </div>
              <div class="panel-footer">
                  <ul>
                        <?php get_search_form(); ?>
                  </ul>
              </div>
          </div>
          <div class="panel panel-default">
              <div class="panel-body">
                  Archives by Month:
              </div>
              <div class="panel-footer">
                  <ul>
                        <?php wp_get_archives('type=monthly'); ?>
                  </ul>
              </div>
          </div>
          <div class="panel panel-default">
              <div class="panel-body">
                  Archives by Subject:
              </div>
              <div class="panel-footer">
                <ul>
                   <?php wp_list_categories(); ?>
                </ul>
              </div>
          </div>
          <div class="panel panel-default">
              <div class="panel-body">
                  Archives by Author:
              </div>
              <div class="panel-footer">
                <ul>
                   <?php wp_list_authors( 'optioncount=1' ); ?>
                </ul>
              </div>
          </div>
        </div>
    </div>

</div>

<!-- /.row -->
                           <!--   <div class="row">
                    <div class="col-md-9">
                     <div class="media">
							 <div class="media-left">
							   <a href="#">
							     <img class="media-object" src="http://placehold.it/64x64" alt="...">
							   </a>
							 </div>
							 <div class="media-body">
							   <h4 class="media-heading"><a href="</a></h4>

							 </div>
						</div>
                    </div>
                  </div>-->



            <!-- Blog Sidebar Widgets Column -->




        <?php get_footer(); ?>
