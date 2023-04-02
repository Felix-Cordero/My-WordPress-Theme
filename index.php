<?php
/**
 * My WordPress Theme Project
 * Owner: Felix Frederick G. Cordero Jr. 
 */

 get_header(); ?>

 <div id="primary" class="site-content">
    <div id="content" role="main">

    <?php
    // Loop.
    while ( have_posts() ) :
        the_post();
        ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>

    <?php my_theme_nav( 'nav-below' ); ?>

<?php else : ?>

    <article id="post-0" class="post no-results not-found">

    <?php
    if ( current_user_can( 'edit_post' ) ) :
        // Display different message to a login user who can add post.
        ?>
        <header class="entry-header">
            <h1 class="entry-title">
                <?php _e( 'No posts to display', 'my theme' ); ?></h1>
    </header>

    <div class="entry-content">
        <p>
        <?php
        /* translator: %s: Post editor URL. */
        printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'my_theme' ), admin_url( 'post-new.php') );
        ?>
        </p>
    </div><!-- .entry-content -->

    <?php
else :
    // Show the default message to everyone else.
    ?>
    <header class="entry-header">
        <h1 class="entry-title"><?php _e( 'Nothing Found', 'my_theme' ); ?></h1>
</header>

<div class="entry-content">
    <p><?php _e( 'Apologies, but no result were found. Perhaps searching will help find a related post.', 'my_theme' ); ?></p>
    <?php get_search_form(); ?>
</div><!-- .entry-content -->
<?php endif; // End current_user_can() chek. ?>

</article><!-- #post-0 -->

<?php endif; // End have_posts() check. ?>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>