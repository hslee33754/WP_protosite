<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
  
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
                    <div id="logo"> <a href="../wordpress "><h1>KATE LEE</h1> </a></div>
                        <div id="banner"> <h2>Banner</h2></div>
                </div>
                <nav>
                        <div id="nav-button"><a href="#"><i class="fa fa-bars"></i></a></div>
                        <ul id="main-menu" class="main-nav">
                                <li id="close"><a><i class="fa fa-times"></i></a></li>
                                <li><a href="home.html">Home</a></li>
                                <li><a href="page.html">About</a></li>
                                <li><a href="page.html">Portfolio</a>
                                        <ul  id="page.html" class="sub-nav">
                                                <li><a href="page.html">Logos</a></li>
                                                <li><a href="page.html">Print</a></li>
                                                <li><a href="page.html">Websites</a></li>
                                        </ul>
                                 </li>
                                <li><a href="page.html">Blog</a></li>
                                <li><a href="page.html">Contact</a></li>
                        </ul>
                </nav>
        </div>
</header>
<!-- End Header -->
    


    
<!-- Start Contetns -->
<div id="contents">
    <div class="site-width full-height">        
            
            <div class="col-100"><div class="inner">
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?> 
                <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
                <?php the_content('')?>
                <?php endwhile; endif; ?>
            </div></div>
                
            
            <!-- Start Colomn Home -->
            <div class="col-100">
                
                <!-- Start Column 1 -->
                <div class="col-33"><div class="inner">
                    <h1>LOOP 1</h1>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    
                </div></div>
                <!-- End Column 1-->
                
                <!-- Start Column 2 -->
                <div class="col-33"><div class="inner">
                    <h1>LOOP 2</h1>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>              
                </div></div>
                <!-- End Column 2 -->
                
                <!-- Start Column 3 -->
                <div class="col-33"><div class="inner">
                    <h1>LOOP 3</h1>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>              
                </div></div>
                <!-- End Column 3-->
           
            
        </div>
        <!-- End Column -->
        
    </div>    
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

    
<script defer src="<?php bloginfo('template_directory');?>/js/jquery.flexslider.js"></script>

    
<!-- Start Script for FlexSlider -->
<script type="text/javascript">
$(function(){
  SyntaxHighlighter.all();
});
$(window).load(function(){
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
<script>
$(function() { // Open and close responsive nav //
		$( "#nav-button" ).click(function(){
				$(".main-nav").slideToggle(600, "swing");
		});
	
		$( "#close" ).click(function(){
				$(".main-nav").slideUp(600, "swing");
		});	
});	
</script>
<!-- End Script for navigation button -->
    
<!-- Start WP_footer -->
<?php wp_footer();?>
<!-- End WP_footer-->
    
</body>
</html>
