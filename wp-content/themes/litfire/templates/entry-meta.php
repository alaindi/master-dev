<span class="name"><i class="fa fa-user" aria-hidden="true"></i><a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></span>
<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date("F j, Y");?> </span>
