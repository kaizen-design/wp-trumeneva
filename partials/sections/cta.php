<?php 
  $cta_heading = isset($args['data']['heading']) && $args['data']['heading'] 
    ? $args['data']['heading'] 
    : get_field('cta_heading', 'option');
  $cta_text = isset($args['data']['text']) && $args['data']['text'] 
    ? $args['data']['text'] 
    : get_field('cta_text', 'option');
  $btn_text = isset($args['data']['btn_text']) && $args['data']['btn_text'] 
    ? $args['data']['btn_text'] 
    : '';
  $btn_link = isset($args['data']['btn_link']) && $args['data']['btn_link'] 
    ? $args['data']['btn_link'] 
    : '';    
?>

<?php if ($cta_heading || $cta_text): ?>
  <section class="cta-section text-white">
    <div class="container">
      <div class="row g-4 g-lg-5 align-items-center">
        <div class="col-md-8 d-flex flex-column gap-3">
          <?php if ($cta_heading): ?>
            <h2 class="h3 mb-0 fw-bold"><?=$cta_heading?></h2>
          <?php endif; ?>  
          <?php if ($cta_text): ?>
            <p class="mb-0 text-white"><?=$cta_text?></p>
          <?php endif; ?>   
        </div>
        <div class="col-md-4 d-flex justify-content-md-end">
          <?php if($btn_text && $btn_link): ?>
            <a href="<?=$btn_link?>" class="btn btn-lg btn-light rounded-pill text-truncate"><span class="gradient-text"><?=$btn_text?></span></a>
          <?php else: ?>  
            <a href="#" data-bs-toggle="modal" data-bs-target="#joinCommunityModal" class="btn btn-lg btn-light rounded-pill text-truncate"><span class="gradient-text">Присоединиться</span></a>
          <?php endif; ?>  
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>  