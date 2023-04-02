<?php
/**
 * My WordPress Theme Project
 * Owner: Felix Frederick 
 */

 get_header(); ?>

 <div id="primary" class="site-content">
    <div id="content" role="main">

    <?php
    // Loop.
    while ( have_posts() ) :
        the_post();
        ?>