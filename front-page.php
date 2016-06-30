<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Digital Systems</title>
    <meta name="description" content="The Digital Systems lesson at the University of Applied Sciences of Piraeus (Technological Education Institution of Piraeus). The site contains general information and services for current and new students.">
    <meta name="keywords" content="Digital, Automation, University, Piraeus, Kalokasis, ikaros">
    <meta name="author" content="Eleni Kaisari, Patryk Futoma">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
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
                            <a href="../../">Ελληνικά</a>
                        </li>
                        <li>
                            |
                        </li>
                        <li>
                            <a href="../home/">English</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="http://www.teipir.gr/index.php/en/">
                        <img class="responsive" id="school-logo" src="<?php echo get_template_directory_uri(); ?>/img/TEI-logo_bw.png" alt="School Logo">
                    </a>
                </div>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation-bar" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                                <img alt="Brand" id="teacher-logo" src="<?php echo get_template_directory_uri(); ?>/img/TOCFra2.jpg">
                            </a>

                        </div>
                        <div class="collapse navbar-collapse" id="navigation-bar">
                            <ul class="nav navbar-nav">
                                <?php
                                    wp_nav_menu( array(
                                        'menu'              => 'primary',
                                        'theme_location'    => 'primary',
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'navigation-bar',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker'            => new wp_bootstrap_navwalker())
                                    );
                                ?>

                            </ul>
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
                                <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/161740397" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-3" id="jumbotron-text">
                            <h4 id="welcome-msg">Welcome to Digital Systems Website!</h4>

                              <a href="../enlist/" id="enlist-button" class="btn btn-lg btn-block" >
                                <i class="fa fa-clipboard"></i> Lab
                                <br/> Registration
                              </a>

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
                            <img class="img-responsive center-block" src="../../img/ujsintx4r3.png" alt="Lab Photo">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img class="img-responsive center-block" src="../../img/9yn8a4p49e.png" alt="Lab Photo">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img class="img-responsive center-block" src="../../img/ft5m4ql3k6.png" alt="Lab Photo">
                        </div>
                    </div>
                  </div>
                    <?php get_footer(); ?>
