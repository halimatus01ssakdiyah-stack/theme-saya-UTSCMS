<?php get_header(); ?>

<main class="site-content">
    <div class="container main-layout">
        
        <!-- Bagian Daftar Artikel / Konten Utama -->
        <div class="content-area">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    
                    <article class="post">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <div class="post-meta">
                            Dipublikasikan pada <?php echo get_the_date(); ?> oleh <?php the_author(); ?>
                        </div>

                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>

                        <a class="read-more" href="<?php the_permalink(); ?>">Baca Selengkapnya</a>
                    </article>

                <?php endwhile; ?>
            <?php else : ?>

                <article class="post">
                    <h2>Belum Ada Artikel</h2>
                    <p>Saat ini belum ada artikel yang dipublikasikan.</p>
                </article>

            <?php endif; ?>
        </div>

        <!-- Bagian Sidebar -->
        <?php get_sidebar(); ?>

    </div>
</main>

<?php get_footer(); ?>