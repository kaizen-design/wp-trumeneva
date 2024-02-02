<?php 
  $splash_title = get_field('splash_title');
  $splash_subtitle = get_field('splash_subtitle');
  $splash_text = get_field('splash_text');
  $splash_btn_text = get_field('splash_btn_text');
  $splash_btn_link = get_field('splash_btn_link');
  $splash_video = get_field('splash_video');
?>

<section class="hero-section">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 align-items-center">
      <div class="hero-text col d-flex flex-column">
        <div class="hero-heading d-flex flex-column">
          <?php if ($splash_title): ?>
            <h1 class="mb-0"><?=$splash_title?></h1>
          <?php endif; ?>
          <?php if ($splash_subtitle): ?>  
            <h3 class="mb-0"><?=$splash_subtitle?></h3>
          <?php endif; ?>
        </div>
        <?php if ($splash_text): ?>
          <p class="mb-0"><?=$splash_text?></p>
        <?php endif; ?>
        <?php if ($splash_btn_text): ?>  
          <a href="#" data-bs-toggle="modal" data-bs-target="#joinCommunityModal" class="btn btn-lg btn-primary align-self-start rounded-pill d-none d-md-flex text-truncate"><?=$splash_btn_text?></a>
        <?php endif; ?>
      </div>
      <div class="hero-media col d-flex flex-column">
        <?php if ($splash_video): ?>
          <div class="media-card">
            <div class="ratio ratio-16x9">
              <iframe src="<?=$splash_video?>?autoplay=1&muted=1" allow='autoplay' title="YouTube video" allowfullscreen loading="lazy"></iframe>
            </div>
          </div>
        <?php endif; ?>
        <?php if ($splash_btn_text): ?>  
          <a href="#" data-bs-toggle="modal" data-bs-target="#joinCommunityModal" class="btn btn-lg btn-primary rounded-pill d-md-none text-truncate"><?=$splash_btn_text?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>