<?php
get_header();
?>

<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-heading">
                    <h1>All Posts</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if (have_posts()) :
                /* Start the Loop */
                while (have_posts()) :
                    the_post(); ?>
                    <div class="col-md-4">
                        <div class="card card-post" style="width: 18rem;">
                            <?php the_post_thumbnail(); ?>
                            <div class="card-body">
                                <h5 class="card-title text-bold"><?= mb_strimwidth(get_the_title(), 0, 35, '...'); ?></h5>
                                <?php the_excerpt(null, '...'); ?>
                                <a href="<?= esc_url(get_permalink()) ?>" class="btn btn-secondary">Read more</a>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
                the_posts_navigation();
            endif;
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
?>