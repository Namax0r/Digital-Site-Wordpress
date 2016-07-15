<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Digital Systems</title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="Digital, Systems, Automation, University, Piraeus, Nikos, Kalokases, ikaros, daidalos, lab, laboratory,">
    <meta name="author" content="Eleni Kaisari, Patryk Futoma">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=greek' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed&subset=greek' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:300&subset=greek' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <!--[if lt IE 8]> <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p> <![endif]-->
    <div class="container-fluid" id="wrapper">
        <div class="container-fluid" id="top-part">
            <div class="container">
                <div id="language-selector">
                    <ul>
                        <li>
                            <a href="https://digitalsystems.daidalos.teipir.gr/">Ελληνικά</a>
                        </li>
                        <li>
                            |
                        </li>
                        <li>
                            <a href="https://digitalsystems.daidalos.teipir.gr/en/">English</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                  <div class="col-xs-1">
                    <a href="http://www.teipir.gr/index.php/en/">
                        <img class="responsive" id="school-logo" src="<?php echo get_template_directory_uri(); ?>/img/TEI-logo_bw.png" alt="School Logo">
                    </a>
                  </div>
                  <div class="col-sm-10">
                        <div id="school-title">
                          <h4>Department of Automation Engineering</h4>
                          <h4>Digital Systems Laboratory</h4>
                        </div>
                  </div>
                </div>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
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

                           <!--
                           <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="../contact/" class="nav-shadow">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
                 <div class="jumbotron">
                    <div class="row">
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
                <!-- /.jumbotron-->
            </div>
            <!-- /.container-->
        </div>
        <!-- /.container-fluid-->
        <div class="container-fluid" id="middle-part">
            <div class="container">
                <div id="page-content">
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
                  </div>

                    <?php get_footer(); ?>
