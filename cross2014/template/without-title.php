<?php 
/*
Template Name: タイトルなし
Template Post Type: post, page
*/
?>
<?php get_header() ?>

<?php while (have_posts()): the_post() ?>
<?php the_content() ?>
<?php endwhile ?>

<?php get_footer() ?>
