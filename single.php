<?php get_header(); ?>

<main class="site-content">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article class="post">
                <h1 class="post-title"><?php the_title(); ?></h1>
                
                <div class="post-meta">
                    Dipublikasikan pada <?php echo get_the_date(); ?> oleh <?php the_author(); ?>
                </div>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>

                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>