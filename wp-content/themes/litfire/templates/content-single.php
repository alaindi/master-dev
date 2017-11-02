<section id="blog">
    <div class="container">
        <div class="blog-content">
            <h1 class="like-h2">Blog</h1>
            <div class="row">
                <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-8 col-sm-12">
                      <div class="blogpost-row blog-detail">
                            <div class="text-cont">
                              <h2><?php the_title(); ?></h2>
                              <div class="date-author">
                                 <span class="name"><i class="fa fa-user" aria-hidden="true"></i><?php the_author();?></span>
                                  <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date("F j, Y");?> </span>
                              </div>
                              <?php the_content(); ?>
                            </div>
                      </div>
                      <div class="blog-comment">
                          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                              
                                <?php comments_template('/templates/comments.php'); ?>
                      </div>
                </div>
                <?php endwhile; ?>
                <div class="col-md-4 col-sm-12 wow slideInRight" data-wow-delay="0.5s">
                    <?php include_once(get_template_directory()."/blogsidebar.php"); ?>
                </div>
            </div>
        </div>
    </div>
</section>
