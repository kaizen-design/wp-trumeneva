<?php 
  $posts = (new Blog)->getPosts(10);
?>

<section class="blog-section">
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
        <?php foreach ($posts as $post): ?>
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