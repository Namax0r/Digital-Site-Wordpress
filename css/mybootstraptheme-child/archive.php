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

            <div class="col-md-12 col-sm-12 news-text">
              <!-- Start the Loop. -->


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php static $count = 0;
if ($count == "50") { break; }
else { ?>


  <!-- First Blog Post -->
  <h4 class="news-title">
      <a href="<?php the_permalink();  ?>"><?php the_title(); ?></a>
  </h4>
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

<?php $count++; } ?>
<?php endwhile; ?>
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
                  <h4>Search:</h4>
              </div>
              <div class="panel-footer">
                  <ul>
                        <?php get_search_form(); ?>
                  </ul>
              </div>
          </div>
          <div class="panel panel-default">
              <div class="panel-body">
                  <h4>Archives by Month:</h4>
              </div>
              <div class="panel-footer">
                  <ul>
                        <?php wp_get_archives('type=monthly'); ?>
                  </ul>
              </div>
          </div>
          <div class="panel panel-default">
              <div class="panel-body">
                  <h4>Archives by Subject:</h4>
              </div>
              <div class="panel-footer">
                <ul>
                   <?php wp_list_categories(); ?>
                </ul>
              </div>
          </div>
          <div class="panel panel-default">
              <div class="panel-body">
                  <h4>Archives by Author:</h4>
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
