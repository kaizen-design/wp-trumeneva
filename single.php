<?php

/**
 * The post single template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme
 */

get_header();

$related_posts = (new Blog)->getPosts(-1, [get_the_ID()]);
?>

<section class="single-post d-flex flex-column">
  <div class="container-fluid d-flex flex-column">
    <div class="d-flex flex-column gap-3 gap-lg-4">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= esc_url( home_url( '/' ) ); ?>">Главная</a></li>
          <li class="breadcrumb-item"><a href="/blog/">Блог</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php single_post_title(); ?></li>
        </ol>
      </nav>
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

<!-- Related Articles -->
<?php if ($related_posts): ?>
  <section class="blog-section pt-0">
    <div class="container-fluid d-flex flex-column gap-5 gap-lg-4">
      <div class="d-flex flex-column flex-lg-row justify-content-lg-between gap-2">
        <h2 class="h2 mb-0">Блог</h2>
        <a href="/blog/" class="read-more-btn d-flex align-items-center gap-2">
          Смотреть все
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M12.5625 5.25L19.3125 12L12.5625 18.75M18.375 12L4.6875 12" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>          
      <div class="posts-slider swiper">
        <div class="swiper-wrapper">
          <?php foreach ($related_posts as $post): ?>
            <div class="swiper-slide">
              <?php get_template_part('partials/cards/post-card', null, ['class' => 'my-md-3', 'post' => $post]) ?>
            </div>
          <?php endforeach; ?>
        </div>            
        <div class="swiper-button-prev d-none d-md-flex">
          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
            <path d="M8.5 14.8096L1.5 7.80957L8.5 0.80957" stroke="#9AA2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="swiper-button-next d-none d-md-flex">
          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
            <path d="M1.5 0.80957L8.5 7.80957L1.5 14.8096" stroke="#9AA2B3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="swiper-pagination position-static mt-3 d-md-none"></div>
      </div>
    </div>
  </section>
<?php endif; ?>  

<?php get_template_part('partials/sections/alter-ego', null, []) ?>

<?php
get_footer();
