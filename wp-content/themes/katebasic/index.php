<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/jquery.flexslider.js"></script>
  
 <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" >
 <link rel="stylesheet"  href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
            <div id="logo"> <a href="../wordpress "><h1><?php bloginfo( 'name' ) ?></h1> </a></div>
                <div id="banner"> <h4><?php bloginfo('description') ?></h4></div>
        </div>

        <!-- Start Nav 
        <nav>
            <div id="nav-button"><a href="#"><i class="fa fa-bars"></i></a></div>
            <ul id="main-nav" class="main-menu">
                <li id="close"><a><i class="fa fa-times"></i></a></li>
                <li><a href="home.html">Home</a></li>
                <li><a href="page.html">About</a></li>
                <li><a href="page.html">Portfolio</a>
                    <ul  id="page.html" class="sub-menu">
                        <li><a href="page.html">Logos</a></li>
                        <li><a href="page.html">Print</a></li>
                        <li><a href="page.html">Websites</a></li>
                    </ul>
                 </li>
                <li><a href="page.html">Blog</a></li>
                <li><a href="page.html">Contact</a></li>
            </ul>
        </nav>
         End Nav -->
        
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
            
<!-- Start Article -->
<article class="col-75">
    <div class="inner full-height">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?> 
        <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
        <?php the_content('')?>
        <?php endwhile; endif; ?>
    </div>
</article>
<!-- End Article -->
            
<!-- Start Aside -->
<aside class="col-25">
    <div class="inner">
        <h3 class="side-nav-title"><?php echo get_the_title($post->post_parent) ?></h3>
    </div><!-- End inner div --> 
    <!-- Start Sub Nav -->
    <?php if(is_page()) :?>
        <ul  id="side-nav" class="side-menu">
            <!-- Start sub list
            <li><a href="#">Logos</a></li>
            <li><a href="#">Print</a></li>
            <li><a href="#">Websites</a></li>
            -->
            <?php 
            if($post->post_parent){
                wp_list_pages(array(
                    'title_li' => __(''),
                    'child_of' => $post->post_parent,
                ));
            }else{
                wp_list_pages(array(
                    'title_li' => __(''),
                    'child_of' => $post->ID,
                ));
            } ?>
        </ul>
    <?php else : ?>
        <ul class="side-menu">
        <?php wp_list_categories(array(
            'title_li' => __('')
        ))?>
        </ul>
    <?php endif; ?>
    <!-- End Sub Nav -->
    
    <div class="inner">
    </div><!-- End inner div --> 
</aside>
<!-- End Aside-->

        </div> <!-- End Columns -->
    </div><!-- End Site Width -->   
</div>
<!-- End Contetns -->
    
    
<!-- Start Clear Float -->
<div class="clearfloat"></div>
<!-- End Clear Float-->
    
    
<!-- Start Footer -->
<footer>
        <div class="site-width">
                <div id="footer-text">
                    	<p><a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a> and <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML5</a> | Copyright &copy; 2015 Kate Lee. All rights reserved. <?php wp_loginout(); ?></p>
                </div>
        </div>
</footer>
<!-- End Footer -->
    
    
</div>
<!-- End Contatiner -->

    
<!-- Start Script for FlexSlider -->
<script type="text/javascript">
$(document).ready(function(){
  $('.flexslider').flexslider({
    animation: "slide",
    start: function(slider){
      $('body').removeClass('loading');
    }
  });
});
</script>
<!-- End Script for FlexSlider -->

    <!-- Start Script for navigation button -->
<script type="text/javascript">
$(document).ready(function(){ // Open and close responsive nav //
		$( "#nav-button" ).click(function(){
				$(".main-menu").slideToggle(600, "swing");
		});
	
		$( "#close" ).click(function(){
				$(".main-menu").slideUp(600, "swing");
		});	
});	
</script>
<!-- End Script for navigation button -->
    

    
<!-- Start WP_footer -->
<?php wp_footer();?>
<!-- End WP_footer-->
    
</body>
</html>
