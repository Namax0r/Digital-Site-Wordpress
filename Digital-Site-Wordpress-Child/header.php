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
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slimbox2.min.css" media="screen" type="text/css" />
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
							<a href="http://www.teipir.gr/index.php/el/">
							<img class="responsive" id="school-logo" src="<?php echo get_template_directory_uri(); ?>/img/TEI-logo_bw.png" alt="School Logo">
							</a>
						</div>
												<div class="col-sm-10">
																	<div id="school-title">
						<h4>Εργαστήριο Ψηφιακών Συστημάτων</h4>
						<hr id="title-divider">
						<h4>Α.Ε.Ι. Πειραιά Τ.Τ. Τμήμα Μηχανικών Αυτοματισμού Τ.Ε.</h4>
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
            <div class="container-fluid" id="middle-part">
			           <div class="container"  id="page-content">
