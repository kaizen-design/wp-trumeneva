<?php

/**
 * The post single template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme
 */

get_header();
?>

<section class="single-post d-flex flex-column">
  <div class="container-fluid d-flex flex-column">
    <div class="d-flex flex-column gap-3 gap-lg-4">
      <h1 class="h2 post-title mb-0"><?php single_post_title(); ?></h1>
    </div>  
    <?php if (get_the_post_thumbnail_url()): ?>
      <div class="post-img">      
          <img 
            src="<?=get_the_post_thumbnail_url()?>" 
            class="img-fluid h-100 w-100 object-fit-cover" 
            alt="<?php single_post_title(); ?>"
          >
      </div>
    <?php endif; ?>
  </div>
  <div class="container d-flex flex-column gap-3">
    <span class="post-date"><?=get_the_date()?></span>
    <div class="post-content">
      <?php the_content() ?>
    </div>
  </div>
</section>

<?php
get_footer();
