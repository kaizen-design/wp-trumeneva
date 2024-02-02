<?php 
  $know_yourself_title = get_field('know_yourself_title');
  $know_yourself_text = get_field('know_yourself_text');
  $know_yourself_btn_text = get_field('know_yourself_btn_text');
  $know_yourself_btn_link = get_field('know_yourself_btn_link');
  $know_yourself_img = get_field('know_yourself_img');
?>

<section class="content-section bg-light">
  <div class="container d-flex flex-column">
    <div class="row g-5 row-cols-1 row-cols-md-2 align-items-center">
      <div class="text-col col d-flex flex-column gap-4 gap-lg-5 order-md-last">
        <?php if ($know_yourself_title): ?>
          <h2 class="h2 mb-0"><?=$know_yourself_title?></h2>
        <?php endif; ?>
        <?php if ($know_yourself_text): ?>  
          <div class="d-flex flex-column gap-3 gap-lg-4">
            <?=$know_yourself_text?>
          </div>  
        <?php endif; ?>
        <?php if ($know_yourself_btn_text): ?>  
          <a href="#" data-bs-toggle="modal" data-bs-target="#joinCommunityModal" class="btn btn-lg btn-primary align-self-sm-start rounded-pill text-truncate"><?=$know_yourself_btn_text?></a>
        <?php endif; ?>
      </div>
      <div class="col d-flex flex-column align-items-center">
        <?php if ($know_yourself_img): ?>
          <img src="<?=$know_yourself_img?>" alt="<?=$know_yourself_title?>" class="img-fluid" loading="lazy" />
        <?php endif; ?>  
      </div>
    </div>
  </div>
</section>