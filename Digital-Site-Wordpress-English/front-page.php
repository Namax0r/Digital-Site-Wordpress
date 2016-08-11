<!doctype html>
<html class="no-js" lang="el">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Digital Systems</title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="Digital, Systems, Automation, University, Piraeus, Nikos, Kalokases, ikaros, daidalos, lab, laboratory,">
    <meta name="author" content="Eleni Kaisari, Patryk Futoma">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="345zGy4en2GAetdF68uoq2NTg2tcfPykRp7m6Tcauc0" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=greek' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed&subset=greek' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0d0909">
    <meta name="theme-color" content="#0d0909">
    <?php wp_head(); ?>
</head>

<body>
    <!--[if lt IE 8]> <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p> <![endif]-->
    <div class="container-fluid" id="wrapper">
      <div class="container-fluid" id="header-wrapper">
          <div class="row" id="header">
            <div class="container">
            <div class="col-sm-1">
                    <a href="http://www.teipir.gr/index.php/en/">
                        <img class="responsive" id="school-logo" src="<?php echo get_template_directory_uri(); ?>/img/TEI-logo_bw.png" alt="School Logo">
                    </a>
                  </div>
                  <div class="col-sm-10">
                        <div id="school-title">
                            <h4>Digital Systems Laboratory</h4>
                            <hr id="title-divider">
                            <h4>Piraeus University of Applied Sciences </h4>
                        </div>
                  </div>
                </div>
                </div>
                </div>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navigation-bar" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-logo" href="<?php echo home_url(); ?>">
                                <img alt="Teacher Logo" id="teacher-logo" src="<?php echo get_template_directory_uri(); ?>/img/TOCFra2.jpg">
                            </a>

                        </div>
                                <?php
                                    wp_nav_menu( array(
                                        'menu'              => 'primary',
                                        'theme_location'    => 'primary',
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse navigation-bar',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker'            => new wp_bootstrap_navwalker())
                                    );
                                ?>
                              </div>
                              <!-- /.container -->
                            </div>
                            <!-- /.container-fluid -->
                          </nav>
                <div class="container-fluid" id="showcase-wrapper">
                  <div class="container">
                <div class="row" id="front-showcase">

                <div class="col-md-9">
                    <div class="embed-responsive embed-responsive-16by9">
                           <iframe src="//content.jwplatform.com/players/oR0z4Op6-CmyefMSJ.html" width="480" height="270" frameborder="0" scrolling="auto" allowfullscreen></iframe>
                        </div>
                </div>
                        <div class="col-md-3" id="jumbotron-text">
                            <h4 id="welcome-msg">Welcome to the Digital Systems Laboratory !</h4>
                        </div>
                    </div>
                    <!-- /.row-->
                </div>
                <!-- /.container-->
            </div>
            <!-- /.container-fluid-->
            <div class="container-fluid" id="middle-part">
                <div class="container" id="page-content">
                                <article>
                        The digital techniques are used extensively today and it is impossible to imagine modern electronic devices without them. The development of digital methods has led to small size devices, of low manufacturing and operational cost, high reliability and
                        great potential. The integrated circuits technology, in only a few years has lead to the production of a new range of components, which has as a result the "age of the transistor", appear distant and to many "even romantic".
                    </article>
                    <div class="row" id="triple-photo-row">
                        <div class="col-md-4 col-sm-4">
                            <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/img/ujsintx4r3.png" alt="Lab Photo">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/img/9yn8a4p49e.png" alt="Lab Photo">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/img/ft5m4ql3k6.png" alt="Lab Photo">
                        </div>
                    </div>
                    <?php get_footer(); ?>
