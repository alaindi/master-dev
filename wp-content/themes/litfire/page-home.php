<section id="book-review">
    <div class="container wow fadeIn">
        <div class="review-wrapper">
            <h2 class="text-center">Book Review Carousel</h2>
            <div id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <?php
                    $args = array(
                       'posts_per_page'   => 10,
                       'offset'           => 0,
                       'orderby'          => 'date',
                       'order'            => 'ASC',
                       'post_type'        => 'readersdiscussions',
                       'post_status'      => 'publish',
                       'suppress_filters' => true 
                     );
                     $posts_array = get_posts( $args ); 
                ?>
                
                <div class="carousel-inner" role="listbox">
                    <?php
                        /*  DISPLAY BOOK REVIEWS  */
                    $count = 0;
                    $status = '';
                    $carouIn = '<ol class="carousel-indicators">';
                     foreach ( $posts_array as $post_review ) : setup_postdata( $post );
                        $bookreview_perm= esc_url( get_permalink( $post_review->ID ) ); 
                        $address = get_post_meta( $post_review->ID, 'address', true ); 
                        if($count == 0)
                       {
                          $status = 'active';
                       }
                       else{
                          $status = '';
                       }

                       $carouIn.= '<li data-target="#myCarousel" data-slide-to="'.$count.'" class="'.$status.'"></li>';
                       echo '<div class="item '.$status.'">
                                <div class="review-cont">
                                    <p>
                                        '.  $post_review->post_content  .'
                                    </p>
                                    <h3>—'. $post_review->post_title ;
                                    if(!empty($address)) {
                                        echo '<span>, '.$address.'</span>';
                                    }
                       echo '</h3>
                                    
                                </div>
                            </div>';
                        $count++;
                        endforeach;
                        $carouIn.='</ol>';
                  
                   ?> 
                </div>
                <?php
                    echo $carouIn;
                ?>
            </div> 
        </div>
    </div>      
</section>
<section id="book-review2">
    <div class="container wow fadeIn">
        <div class="review-wrapper">
            <h2 class="text-center">Book Review Columns</h2>
            <div class="wrap">
                <?php
                    $args = array(
                       'posts_per_page'   => 3,
                       'offset'           => 0,
                       'orderby'          => 'date',
                       'order'            => 'ASC',
                       'post_type'        => 'readersdiscussions',
                       'post_status'      => 'publish',
                       'suppress_filters' => true 
                     );
                     $posts_array = get_posts( $args ); 
                ?>
                <div class="row">
                    <?php
                    foreach ( $posts_array as $post_review ) : setup_postdata( $post );                      
                       $bookreview_perm= esc_url( get_permalink( $post_review->ID ) ); 
                       $address = get_post_meta( $post_review->ID, 'address', true ); 
                        echo '<div class="col-md-4 col-sm-4">
                            <div class="review-cont">
                                '.  wpautop($post_review->post_content)  .'
                                <h3>—'. $post_review->post_title .'';
                            if(!empty($address)) {
                                echo '<span>, '.$address.'</span>';
                            }
                        echo '</h3>
                             </div>
                             </div>';
                        
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="book">
    <div class="container">
        <?php 
            $book_pageID = 11;
        ?>
        <div class="row">
            <div class="col-md-4 col-sm-4 wow slideInLeft">
                <div class="img-cont">
                    <?php if (has_post_thumbnail( $book_pageID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $book_pageID ), 'single-post-thumbnail' ); ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo( 'description' ); ?>">
                    <?php endif; ?>       
                </div>
            </div>
            <div class="col-md-8 col-sm-8 wow slideInRight">
                <div class="text-cont">
                    <h2>About the Book</h2>
                    <?php
                        $query = new WP_Query('page_id='.$book_pageID.'');
                    ?>
                    <?php
                        while($query->have_posts()): $query->the_post();
                        the_content();
                    ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="author">
    <div class="container">
        <?php 
            $author_pageID = 13;
        ?>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-md-push-8 col-sm-push-8 wow slideInLeft">
                <div class="img-cont">
                    <?php if (has_post_thumbnail( $author_pageID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $author_pageID ), 'single-post-thumbnail' ); ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
                    <?php endif; ?>      
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-md-pull-4 col-sm-pull-4 wow slideInRight">
                <div class="text-cont">
                    <h2>About the Author</h2>
                    <?php
                        $query = new WP_Query('page_id='.$author_pageID.'');
                    ?>
                    <?php
                        while($query->have_posts()): $query->the_post();
                        the_content();
                    ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="order">
    <div class="container">
        <?php 
            $order_pageID = 15;
            $order_char_limit = 3500;
            $orderfields = get_post_meta( $order_pageID, 'orderfields', true ); 
        ?>  
        <div class="row">
            <div class="col-md-4 col-sm-4 wow slideInLeft">
                <div class="img-cont">
                    <?php if (has_post_thumbnail( $order_pageID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $order_pageID ), 'single-post-thumbnail' ); ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo( 'description' ); ?>">
                    <?php endif; ?>    
                </div>
            </div>
            <div class="col-md-8 col-sm-8 wow slideInRight">
                <div class="text-cont">
                    <h2>Excerpts</h2>
                    <?php
                        $query = new WP_Query('page_id='.$order_pageID.'');
                    ?>
                    <?php
                        while($query->have_posts()): $query->the_post();
                        the_content();
                    ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <div class="book-type">
                        <?php
                            if( $orderfields[0]['paperback-link'] != ""){
                              echo '<a href="'. $orderfields[0]['paperback-link'] .'" target="_blank" class="btn-style">Paperback | '. $orderfields[0]['paperback-price'] .'</a>';
                            }
                            if( $orderfields[0]['hardcover-link'] != ""){
                              echo '<a href="'. $orderfields[0]['hardcover-link'] .'" target="_blank" class="btn-style">Hardcover | '. $orderfields[0]['hardcover-price'] .'</a>';
                            }
                            if( $orderfields[0]['e-book-link'] != ""){
                              echo '<a href="'. $orderfields[0]['e-book-link'] .'" target="_blank" class="btn-style">E-Book | '. $orderfields[0]['e-book-price'] .'</a>'; 
                            }
                            if( $orderfields[0]['kindle-link'] != ""){
                              echo '<a href="'. $orderfields[0]['kindle-link'] .'" target="_blank" class="btn-style">Kindle | '. $orderfields[0]['kindle-price'] .'</a>'; 
                            }
                        ?>
                    </div>
                    <div class="book-store">
                        <p>Available at online retailers:</p>
                        <?php
                          if( $orderfields[0]['litfire-link'] != "" ){
                              $image = wp_get_attachment_image_src( $orderfields[0]['litfire-image'] , 'single-post-thumbnail' );
                              echo '<a href="'. $orderfields[0]['litfire-link'] .'" target="_blank">
                                    <img src="'. $image[0] .'" alt="">
                                  </a>';
                          }
                          if( $orderfields[0]['amazon-link'] != "" ){
                              $image = wp_get_attachment_image_src( $orderfields[0]['amazon-image'] , 'single-post-thumbnail' );
                              echo '<a href="'. $orderfields[0]['amazon-link'] .'" target="_blank">
                                    <img src="'. $image[0] .'" alt="">
                                  </a>';
                          }
                          if( $orderfields[0]['barnes-and-noble-link'] != "" ){
                              $image = wp_get_attachment_image_src( $orderfields[0]['barnes-and-noble-image'] , 'single-post-thumbnail' );
                              echo '<a href="'. $orderfields[0]['barnes-and-noble-link'] .'" target="_blank">
                                    <img src="'. $image[0] .'" alt="">
                                  </a>';
                          }
                          
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="otherbook">
    <div class="container">
        <?php 
          $args = array(
             'posts_per_page'   => 3,
             'offset'           => 0,
             'orderby'          => 'date',
             'order'            => 'ASC',
             'post_type'        => 'otherbooks',
             'post_status'      => 'publish',
             'suppress_filters' => true 
           );
           $posts = get_posts( $args ); 
           //print_r($posts);
                       
            foreach( $posts as $post ):           
              $otherbook_ID = $post->ID;
              $otherorderfields = get_post_meta( $otherbook_ID, 'otherbookfields', true );            
              $otherbook_imgID = $otherorderfields[0]["other-book-image"];
        ?>
                <div class="row">
                    <div class="col-md-5 col-sm-5 wow slideInRight">
                        <div class="img-cont">
                            <?php if ( $otherbook_imgID != "" ): ?>
                                <?php $image = wp_get_attachment_image_src( $otherbook_imgID, 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0]; ?>" alt="<?php echo $otherorderfields[0]['alt']; ?>">
                            <?php endif; ?>      
                        </div>
                        <div class="book-type">
                            <?php
                                if( $otherorderfields[0]['other-paperback-link'] != ""){
                                  echo '<a href="'. $otherorderfields[0]['other-paperback-link'] .'" target="_blank" class="btn-style">Paperback | '. $otherorderfields[0]['other-paperback-price'] .'</a>';
                                }
                                if( $otherorderfields[0]['other-hardcover-link'] != ""){
                                  echo '<a href="'. $otherorderfields[0]['other-hardcover-link'] .'" target="_blank" class="btn-style">Hardcover | '. $otherorderfields[0]['other-hardcover-price'] .'</a>';
                                }
                                if( $otherorderfields[0]['other-e-book-link'] != ""){
                                  echo '<a href="'. $otherorderfields[0]['other-e-book-link'] .'" target="_blank" class="btn-style">E-Book | '. $otherorderfields[0]['other-e-book-price'] .'</a>'; 
                                }
                                if( $otherorderfields[0]['other-kindle-link'] != ""){
                                  echo '<a href="'. $otherorderfields[0]['other-kindle-link'] .'" target="_blank" class="btn-style">Kindle | '. $otherorderfields[0]['other-kindle-price'] .'</a>'; 
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 wow slideInLeft">     
                        <div class="">                         
                            <div class="text-cont">                                                
                                <h2 class="book-title"><?php echo $post->post_title; ?></h2>

                                <p><?php echo $post->post_content; ?></p>
                            </div>
                            <div class="book-store">
                                <?php
                                  if( $otherorderfields[0]['other-litfire-link'] != "" ){
                                      $image = wp_get_attachment_image_src( $otherorderfields[0]['other-litfire-image'] , 'single-post-thumbnail' );
                                      echo '<a href="'. $otherorderfields[0]['other-litfire-link'] .'" target="_blank">
                                            <img src="'. $image[0] .'" alt="">
                                          </a>';
                                  }
                                  if( $otherorderfields[0]['other-amazon-link'] != "" ){
                                      $image = wp_get_attachment_image_src( $otherorderfields[0]['other-amazon-image'] , 'single-post-thumbnail' );
                                      echo '<a href="'. $otherorderfields[0]['other-amazon-link'] .'" target="_blank">
                                            <img src="'. $image[0] .'" alt="">
                                          </a>';
                                  }
                                  if( $otherorderfields[0]['other-barnes-and-noble-link'] != "" ){
                                      $image = wp_get_attachment_image_src( $otherorderfields[0]['other-barnes-and-noble-image'] , 'single-post-thumbnail' );
                                      echo '<a href="'. $otherorderfields[0]['other-barnes-and-noble-link'] .'" target="_blank">
                                            <img src="'. $image[0] .'" alt="">
                                          </a>';
                                  }
                                  
                                ?>
                            </div>       
                        </div>
                    </div>                        
                </div>
            <?php
              endforeach;
            ?>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 wow slideInLeft">
                <div class="text-social-cont">
                    <h2>Get In Touch</h2>
                    <?php
                        $query = new WP_Query('page_id=19');
                    ?>
                    <?php
                        while($query->have_posts()): $query->the_post();
                        the_content();
                    ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php  
                        wp_nav_menu(['menu' =>  'Footer Social Menu', 'menu_class' => 'footer-social']); 
                    ?>
                    <?php  
                        wp_nav_menu(['menu' =>  'Footer Social Menu', 'menu_class' => 'footer-social footer-social-circle']); 
                    ?>
                    <?php  
                        wp_nav_menu(['menu' =>  'Footer Social Menu', 'menu_class' => 'footer-social footer-social-square']); 
                    ?>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 wow slideInRight">
                <div class="form-cont">
                    <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>