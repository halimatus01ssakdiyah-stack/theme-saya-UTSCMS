<aside class="site-sidebar">
    <div class="sidebar-widget">
        <h3>Pencarian</h3>
        <?php get_search_form(); ?>
    </div>

    <div class="sidebar-widget">
        <h3>Artikel Terbaru</h3>
        <ul>
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 5,
                'post_status' => 'publish'
            ));
            foreach($recent_posts as $post) {
                echo '<li><a href="' . get_permalink($post['ID']) . '">' . $post['post_title'] . '</a></li>';
            }
            wp_reset_query();
            ?>
        </ul>
    </div>
</aside>