<section id="search">
    <div class="container">
        <div class="blog-content search-result">
            <h1 class="like-h2">Search</h1>
            <div class="row">
                <div class="col-md-8 col-sm-8 wow slideInLeft" data-wow-delay="0.5s">
                    <?php if (!have_posts()) : ?>
                    <div class="alert alert-warning">
                        <?php _e('Sorry, no results were found.', 'sage'); ?>
                      </div>
                    <?php endif; ?>

                    <?php while (have_posts()) : the_post(); ?>
                      <?php get_template_part('templates/content', 'search'); ?>
                    <?php endwhile; ?>

                    <?php $args = array(
                    'prev_text'          => 'Previous Page',
                    'next_text'          => 'Next Page',
                    'screen_reader_text' => 'Post navigation'
                   );
                   the_posts_navigation($args); ?>
                </div>
                <div class="col-md-4 col-sm-4 wow slideInRight" data-wow-delay="0.5s">
                    <?php include_once(get_template_directory()."/blogsidebar.php"); ?>
                </div>
            </div>
        </div>
    </div>
</section>


