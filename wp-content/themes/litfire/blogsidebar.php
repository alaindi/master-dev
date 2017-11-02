<div class="blogside-wrap">  
    <div class="search-cont">
        <?php get_search_form(); ?>
    </div>                     
    <div class="form-cont">
        <h2>Contact Us</h2>
        <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form"]'); ?>
    </div>
    <div class="author-cont">
        <h3>About the Author</h3>
        <div class="img-cont">
            <div class="img-cont2">
            <?php
                $page_id = "13"; 
                if (has_post_thumbnail($page_id) ):
                $image = wp_get_attachment_image_src( get_post_thumbnail_id($page_id), 'single-post-thumbnail' );
                endif;
                $author_pageID = $page_id;
                $authorfields = get_post_meta( $author_pageID, 'authorfields', true ); 
                //print_r($authorfields);
                $image = wp_get_attachment_image_src( $authorfields[0]['blog-sidebar-author-profile'] , 'single-post-thumbnail' );


                $image_URI = $image[0];
            ?>
            <img src="<?php echo $image_URI; ?>" alt="author image"/>
            </div>
        </div>
        <div class="text-cont">            
            <?php
                $query = new WP_Query('page_id=13');
            ?>
            <?php
                while($query->have_posts()): $query->the_post();
                $content = get_the_content();
                $content = preg_replace("/\< *[img][^\>]*[.]*\>/i","",$content,1); 
                if(strlen($content) > 130)
                    
                     $content = substr($content, 0, 130).'... <a href="'.get_the_permalink().'" class="read-more">Read More</a>'; 
                echo wpautop(strip_shortcodes($content));
            ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>   
        </div>
    </div>
    <div class="post-cont">
        <?php
            dynamic_sidebar('sidebar-primary');
        ?>
    </div>
</div>
