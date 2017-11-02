<div class="banner-menu-wrapper">    
    <?php if( is_front_page() ){ ?>
    <section id="banner" class="banner">
        <div class="container wow fadeIn">
            <div class="content-wrapper">
                  <?php $order_pageID = 15; 
                  $orderfields = get_post_meta( $order_pageID, 'orderfields', true ); ?>
                  <h1><?php echo get_bloginfo( 'description' ); ?></h1>
                  <h2>Written by: <?php echo get_bloginfo( 'name' ); ?></h2>
                  <a href="<?php echo $orderfields[0]['buy-the-book-link']; ?>" target="_blank" class="btn-style">Buy the Book</a>
                  <a href="#header" style="
                        display: inline-block;
                        width: 100%;
                        font-size: 50px;
                        color: #000;
                    "><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
              </div>    
        </div>        
    </section> 
    <?php } ?>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-9 logo-area">
                    <div class="logo-cont">
                        <a href="<?= esc_url(home_url('/')); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-3 menu-area">
                    <nav class="navbar fadeIn">
                        <div class="navbar-header">
                            <button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <?php
                        if (has_nav_menu('primary_navigation')) :
                          wp_nav_menu([
                            'theme_location' => 'primary_navigation', 
                            'menu_class' => 'nav navbar-nav',
                            'container_class' =>'collapse navbar-collapse',
                            'container_id' => 'navbar']);
                        endif;
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>  