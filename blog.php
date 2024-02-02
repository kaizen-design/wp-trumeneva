<?php

/**
 * Template Name: Blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme
 */

get_header();

$featured_post = (new Blog)->getPosts(1)[0];
$posts = (new Blog)->getPosts(-1, [$featured_post->ID]);

?>

<section class="blog-section">
  <div class="container-fluid d-flex flex-column">
    <h1 class="h2 mb-0"><?php single_post_title(); ?></h1>
    <?php get_template_part('partials/cards/featured-post-card', null, ['post' => $featured_post]) ?>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xxl-4 gy-4">
      <?php foreach ($posts as $post): ?>
        <div class="col">
          <?php get_template_part('partials/cards/post-card', null, ['post' => $post]) ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_template_part('partials/sections/alter-ego', null, []) ?>

<?php
get_footer();
