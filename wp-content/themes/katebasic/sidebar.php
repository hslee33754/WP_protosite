<!-- Start Aside -->
<aside class="col-25">

    <div class="inner pageid">
        <small>You're at...</small>
        <h3 class="side-nav-title">
            <?php if(is_page()) : echo get_the_title( $post->post_parent ); else : ?> Blog <?php endif; ?>
        </h3>
    </div><!-- End inner div --> 

    <!-- Start Sub Nav -->
    <?php if(is_page()) :?>
        <ul  id="side-nav" class="side-menu">
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
            <?php wp_list_categories(array('title_li' => __('')))?>
        </ul>
    <?php endif; ?>
    <!-- End Sub Nav -->

    <!-- Start inner div --> 
    <div class="inner">
        
        <!-- Start Quote -->
        <div class="widget">
        <?php if(get_post_meta($post->ID, 'Quote', true)) : ?>
        <block><?php echo get_post_meta($post->ID, 'Quote', true); ?>
        </block>
        <?php endif ?>
        </div>
        <!-- End Quote-->
        
        <!--Begin Dynamic Sidebar-->
        <?php dynamic_sidebar();?>
        <!-- End Dynamic Sidebar -->
        
    </div>
    <!-- End inner div --> 

</aside>
<!-- End Aside-->