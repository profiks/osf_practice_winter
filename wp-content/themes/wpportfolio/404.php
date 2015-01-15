<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<center>
    <h1>404 Page not found</h1>
    <p>It seems you're looking for something that isn't here.</p>
    <p>Perhaps try the <a href="<?=home_url()?>">homepage</a></p>
</center>

<?php get_footer(); ?>