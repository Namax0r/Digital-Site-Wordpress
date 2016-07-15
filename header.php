<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php if (function_exists('is_tag') && is_tag()) { echo 'Tag Archive for &quot;'.$tag.'&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Αρχείο - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } if (is_home()) { echo 'Ανακοινώσεις'; echo ' - '; bloginfo('name'); } else { bloginfo('name'); } if ($paged>1) {echo '- page ', $paged;} ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="Ψηφιακά, Συστήματα, digital, systems, system, Αυτοματιμός, Α.Ε.Ι.Τ.Τ, Πειραιας, Καλοκάσης, ikaros, daidalos, Συνδιαστικής, Ακολουθιακής, Λογικής, Νίκος , Νικος , νίκος , νικος , νίκοσ , νικοσ , Nikos , nikos , Καλοκάσης , Καλοκασης , καλοκάσης , καλοκασης , καλοκάσησ , καλοκασησ , Kalokasis , kalokasis , Ν. , Καλοκάση , Kalokasi , Ψηφιακά , Ψηφιακα , ψηφιακά , ψηφιακα , Psifiaka , psifiaka , Συστήματα , Συστηματα , συστήματα , συστηματα , Systhmata , systhmata , Systimata , systimata , Sistimata , sistimata , Συστημάτων , Συστηματων , συστημάτων , συστηματων,  Εφαρμογές , Εφαρμογες , εφαρμογές , εφαρμογες , Efarmoges, efarmoges, Συνδιαστικά , Συνδιαστικα , συνδιαστικά , συνδιαστικα, Syndiastika , syndiastika ,  Συνδιαστικής, Συνδιαστικης , συνδιαστικής , συνδιαστικης , Ακολουθιακά , Ακολουθιακα , ακολουθιακά , ακολουθιακα , Akolouthiaka , akolouthika , akolou8iaka,  Ακολουθιακής , Ακολουθιακης , ακολουθιακής , ακολουθιακης , Λογικής , Λογικης , λογικής , λογικης , Κυκλώματα , Κυκλωματα , κυκλώματα , κυκλωματα , Α.Ε.Ι. , ΑΕΙ , α.ε.ι. , αει , Πειραιάς , Πειραιας , πειραιάς , πειραιας , Τ.Ε.Ι. ,ΤΕΙ , τ.ε.ι. , τει , Εργαστήριο , Εργαστηριο , εργαστήριο , εργαστηριο , Τμήμα , Τμημα , τμήμα , τμημα , Μηχανικών , Μηχανικων , μηχανικών , μηχανικων , Μηχανικοί , Μηχανικοι , μηχανικοί , μηχανικοι , Αυτοματισμού , Αυτοματισμου , αυτοματισμού , αυτοματισμου , Αυτοματισμός , Αυτοματισμος , αυτοματισμός , αυτοματισμος , Τεχνικού , Τεχνικου , τεχνικού , τεχνικου , Τομέα , Τομεα , τομέα , τομεα , Εφαρμογών , Εφαρμογων , εφαρμογών , εφαρμογων , Υπεύθυνος , Υπευθυνος , υπεύθυνος , υπευθυνος  , Καθηγητής , Καθηγητης , καθηγητής , καθηγητης , Ο.Κ. , ΟΚ , ο.κ. , οκ , Ι , 1 , ΙΙ , 2 , Εργασίες , Εργασιες , εργασίες , εργασιες , Σπουδαστών , Σπουδαστων , σπουδαστών , σπουδαστων , Δαίδαλος , Δαιδαλος , δαίδαλος , δαιδαλος , Ίκαρος , Ικαρος , ίκαρος , ικαρος ">
    <meta name="author" content="Eleni Kaisari, Patryk Futoma">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=greek' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed&subset=greek' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Fira+Sans:300&subset=greek' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Tinos&subset=greek-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slimbox2.css" media="screen" type="text/css" />

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
                    <a href="http://www.teipir.gr/index.php/el/">
                        <img class="responsive" id="school-logo" src="<?php echo get_template_directory_uri(); ?>/img/TEI-logo_bw.png" alt="School Logo">
                    </a>
                  </div>
                  <div class="col-sm-10">
                        <div id="school-title">
                          <h4>Α.Ε.Ι. Πειραιά Τ.Τ. Τμήμα Μηχανικών Αυτοματισμού Τ.Ε.</h4>
                          <h4>Εργαστήριο Ψηφιακών Συστημάτων</h4>
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
            </div>
            <!-- /.container-->
        </div>
        <!-- /.container-fluid-->
        <div class="container-fluid" id="middle-part">
            <div class="container">
