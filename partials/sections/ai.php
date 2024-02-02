<?php 
  $ai_title = get_field('ai_title');
  $ai_text = get_field('ai_text');  
  $ai_img = get_field('ai_img');
?>

<section class="content-section bg-light">
  <div class="container d-flex flex-column">
    <div class="row g-5 row-cols-1 row-cols-md-2 align-items-center">
      <div class="text-col col d-flex flex-column gap-4 gap-lg-5">
        <?php if ($ai_title): ?>
          <h2 class="h2 mb-0"><?=$ai_title?></h2>
        <?php endif; ?>  
        <?php if ($ai_text): ?>
          <div class="d-flex flex-column gap-3 gap-lg-4">
            <?=$ai_text?>
          </div>
        <?php endif; ?>  
      </div>
      <div class="col d-flex flex-column align-items-center">
        <?php if ($ai_img): ?>
          <img src="<?=$ai_img?>" alt="<?=$ai_title?>" class="img-fluid" loading="lazy" />
        <?php endif; ?>  
      </div>
    </div>
  </div>
</section>