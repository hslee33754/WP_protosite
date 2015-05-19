<?php get_header(); ?>
            
<!-- Start Article -->
<article class="col-75">
    <div class="inner full-height">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?> 
        <article class="excerpt">
            <a href="<?php the_permalink(); ?>" t><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
            <small>Posted on <?php the_time('F j, Y'); ?> in <?php the_category(', '); ?></small>
            <p>
                <?php echo strip_tags(get_the_excerpt()); ?>
                <a href="<?php the_permalink(); ?>"> Read More &raquo;</a> 
            </p>
        </article>
        <?php endwhile; endif; ?>
        <small>index.php</small>
    </div>
</article>
<!-- End Article -->

<?php get_sidebar();?>

<?php get_footer();?>