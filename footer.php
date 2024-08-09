<?php
/**
 * The footer for our theme.
 */
?>
    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="site-info">
            <a href="<?php echo esc_url(__('https://wordpress.org/', 'airbnb-child-theme')); ?>">
                <?php printf(esc_html__('Proudly powered by %s', 'airbnb-child-theme'), 'WordPress'); ?>
            </a>
            <span class="sep"> | </span>
            <?php
            printf(esc_html__('Theme: %1$s by %2$s.', 'airbnb-child-theme'), 'airbnb-child-theme', '<a href="https://yoursite.com">Your Name</a>');
            ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->

    <?php wp_footer(); ?>
</body>
</html>
