<?php get_header(); ?>
            
<!-- Start Flexslider -->
<div class="flexslider">
  <ul class="slides">
    <li data-thumb="<?php bloginfo('template_directory');?>/images/slider1.png">
      <img src="<?php bloginfo('template_directory');?>/images/slider1.png" alt="slider1" />
    </li>
    <li data-thumb="<?php bloginfo('template_directory');?>/images/slider2.png">
      <img src="<?php bloginfo('template_directory');?>/images/slider2.png" alt="slider2"/>
    </li>
    <li data-thumb="<?php bloginfo('template_directory');?>/images/slider3.png">
      <img src="<?php bloginfo('template_directory');?>/images/slider3.png" alt="slider3"/>
    </li>
    <li data-thumb="<?php bloginfo('template_directory');?>/images/slider4.png">
      <img src="<?php bloginfo('template_directory');?>/images/slider4.png" alt="slider4" />
    </li>
    <li data-thumb="<?php bloginfo('template_directory');?>/images/slider5.png">
      <img src="<?php bloginfo('template_directory');?>/images/slider5.png" alt="slider5" />
    </li>
  </ul>
</div>
<!-- End Flexslider -->
            
<!-- Start Colomn Home -->
<div class="col-100">

    <!-- Start Column 1 -->
    <div class="col-33"><div class="inner">
        <h1>About Kate</h1>
        <?php while(have_posts()): the_post(); //loop one ?>
        <?php the_content()?>
        <?php endwhile; ?>         
    </div></div>
    <!-- End Column 1-->

    <!-- Start Column 2 -->
    <div class="col-33"><div class="inner">
        <h1>Latest Posts</h1>
        <?php rewind_posts(); //stops the previous loop ?>
        <?php query_posts('showposts=5&cat=5')?>
        <ul>
        <?php while(have_posts()): the_post(); // loop two ?>
            <li><a href="<?php the_permalink() ?>"><?php the_title()?></a></li>
        <?php endwhile; ?>
        </ul>
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

<?php get_footer();?>