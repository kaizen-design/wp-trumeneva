<?php
/**
 * The front-page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme
 */

get_header();
?>

  <?php get_template_part('partials/sections/hero', null, []) ?>
  <?php get_template_part('partials/sections/specialists-slider', null, []) ?>
  <?php get_template_part('partials/sections/content', null, []) ?>
  <?php get_template_part('partials/sections/blog-posts-slider') ?>
  <?php get_template_part('partials/sections/alter-ego', null, []) ?>
  <?php get_template_part('partials/sections/about-us', null, []) ?>
  <?php get_template_part('partials/sections/ai', null, []) ?>
  <?php get_template_part('partials/sections/know-yourself', null, []) ?>
  <?php get_template_part('partials/sections/cta', null, []) ?>
  <?php get_template_part('partials/sections/faq', null, []) ?>

<?php
get_footer();
