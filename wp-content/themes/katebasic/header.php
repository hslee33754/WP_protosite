<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/jquery.flexslider.js"></script>
  
 <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" >
 <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' >
 <link rel="stylesheet"  href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 <link rel="icon" type="image/ico" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/flexslider.css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" />

<title><?php bloginfo('description');?> | <?php bloginfo('name');?> </title>

<!--Start WP Head -->
<?php wp_head(); ?>
<!-- End WP Head -->

</head>

<body <?php body_class(); ?>>

<!-- Start Containter -->
<div id="container">


<!-- Start Header -->
<header>
    <div class="site-width">
        <div id="title-wrapper">
            <div id="logo"> <a href="../"><h1><?php bloginfo( 'name' ) ?></h1> </a></div>
                <div id="banner"> <h4><?php bloginfo('description') ?></h4></div>
        </div>
        
        <!-- Start WP Nav -->
        <?php wp_nav_menu(array(
            'theme_location' => 'main-menu', 
            'container' =>'nav', 
            'menu_id' => 'main-nav',
            'menu_class' => 'main-menu',
            'items_wrap' => '
                <div id="nav-button"><a href="#"><i class="fa fa-bars"></i></a></div>
                <ul id="%1$s" class="%2$s">
                    <li id="close"><a><i class="fa fa-times"></i></a></li>
                    %3$s
                </ul>'
        )); ?>
        <!-- End WP NAV -->
    
    </div><!-- End Site Width div -->
</header>
<!-- End Header -->

    
<!-- Start Contetns -->
<div id="contents">
    <div class="site-width full-height">        
        <div class="col-100">