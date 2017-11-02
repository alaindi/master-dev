<section id="blog">
    <div class="container">
        <div class="blog-content">
            <h1 class="like-h2">Blog</h1>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 wow slideInLeft" data-wow-delay="0.5s">
                    <div class="blogpost-wrap">
                        <?php if (!have_posts()) : ?>
                          <div class="alert alert-warning">
                            <?php _e('Sorry, no results were found.', 'sage'); ?>
                          </div>
                        <?php endif; ?>
                        <?php while (have_posts()) : the_post(); ?>
                          <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
                        <?php endwhile; ?>
                        <div class="blog-pagination clearfix">
                            <?php the_posts_navigation(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 wow slideInRight" data-wow-delay="0.5s">
                    <?php include_once(get_template_directory()."/blogsidebar.php"); ?>
                </div>
            </div>
        </div>
    </div>
</section>

