<?php 
  $content_title = get_field('content_title');
  $content_text = get_field('content_text');
  $content_btn_text = get_field('content_btn_text');
  $content_btn_link = get_field('content_btn_link');
  $content_img = get_field('content_img');
?>

<section class="content-section bg-light">
  <div class="container d-flex flex-column">
    <div class="row g-5 row-cols-1 row-cols-md-2 align-items-center">
      <div class="text-col col d-flex flex-column gap-4 gap-lg-5 order-md-last">
        <?php if ($content_title): ?>
          <h2 class="h2 mb-0"><?=$content_title?></h2>
        <?php endif; ?>  
        <?php if ($content_text): ?>  
          <div class="d-flex flex-column gap-3 gap-lg-4">
            <?=$content_text?>
          </div>  
        <?php endif; ?>
        <?php if ($content_btn_text): ?>  
          <a href="#" data-bs-toggle="modal" data-bs-target="#joinCommunityModal" class="btn btn-lg btn-primary align-self-sm-start rounded-pill text-truncate"><?=$content_btn_text?></a>
        <?php endif; ?>  
      </div>
      <div class="col d-flex flex-column align-items-center">
        <?php if ($content_img): ?>
          <img src="<?=$content_img?>" alt="<?=$content_title?>" class="img-fluid" loading="lazy" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>