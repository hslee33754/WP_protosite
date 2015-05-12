<?php get_header(); ?>
            
<!-- Start Article -->
<article class="col-75">
    <div class="inner full-height">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
        <?php get_search_form();?>
        <small>404.php</small>
    </div>
</article>
<!-- End Article -->

<?php get_sidebar();?>

<?php get_footer();?>