<?php
/*
Template Name: Archives
*/
get_header(); ?>
<div class="row">
    <div class="col-md-9 col-left-outer">
        <div class="col-md-12 col-left">
            <div class="row">
                <div class="col-md-12 col-sm-12 news-text">
                    <!-- Start the Loop. -->
                    <h1>Αποτελέσματα αναζήτησης:</h1>
                    <hr />
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php static $count=0 ; if ($count=="20" ) { break; } else { ?>
                    <div class="search-results-wrapper">
                    <h4 class="news-title">
                      <a href="<?php the_permalink();  ?>"><?php the_title(); ?></a>
                    </h4>
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
                    </div>
                    <?php $count++; } ?>
                  <?php endwhile; ?>
                  <?php else : ?>
                  <p>
                      <?php _e( '<h1>Η αναζήτησή σας δεν έδωσε αποτελέσματα</h1>
                                  <ul>
                                    <li>
                                      Ελέγξτε ότι η ορθογραφία σας είναι σωστή.
                                    </li>
                                    <li>
                                      Αφαιρέστε εισαγωγικά γύρω από φράσεις για να γίνει αναζήτηση για κάθε λέξη ξεχωριστά
                                    </li>
                                  </ul>
                                  <hr />'); ?>
                  </p>
                  <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12 col-right">
          <!-- Side Navigation -->
          <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<!-- /.row -->

<?php get_footer(); ?>
