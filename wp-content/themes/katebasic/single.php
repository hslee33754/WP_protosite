<?php get_header(); ?>
            
<!-- Start Article -->
<article class="col-75">
    <div class="inner full-height">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?> 
        <h1><?php the_title();?></h1>
        <small>By line goes here</small>
        <?php the_content('')?>
        <?php endwhile; endif; ?>
        <small>single.php</small>
    </div>
</article>
<!-- End Article -->

<?php get_sidebar();?>

<?php get_footer();?>