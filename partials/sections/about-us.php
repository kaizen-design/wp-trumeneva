<?php 
  $about_title = get_field('about_title');
  $about_cta_heading = get_field('about_cta_heading');
  $about_cta_text = get_field('about_cta_text');
  $about_cta_btn_text = get_field('about_cta_btn_text');
  $about_cta_btn_link = get_field('about_cta_btn_link');
  $about_second_title = get_field('about_second_title');
  $about_subtitle = get_field('about_subtitle');
  $about_text = get_field('about_text');  
  $about_img = get_field('about_img');
?>

<section id="about" class="content-section bg-light">
  <div class="container d-flex flex-column">
    <?php if ($about_title): ?>
      <h2 class="h1 mb-0 text-center"><?=$about_title?></h2>
    <?php endif; ?>
  
    <?php if ($about_cta_heading || $about_cta_text): ?>
        </div>
      </section>
      <?php get_template_part('partials/sections/cta', null, [
        'data' => [
          'heading' => $about_cta_heading,
          'text' => $about_cta_text,
          'btn_text' => $about_cta_btn_text,
          'btn_link' => $about_cta_btn_link
        ]
      ]) ?>
      <section class="content-section bg-light">    
        <div class="container d-flex flex-column">  
          <?php if ($about_second_title): ?>
            <h2 class="h1 mb-0 text-center"><?=$about_second_title?></h2>
          <?php endif; ?>
    <?php endif; ?>  

    <div class="row g-5 row-cols-1 row-cols-md-2 align-items-center">
      <div class="text-col col d-flex flex-column gap-4 gap-lg-5 order-md-last">
        <?php if ($about_subtitle): ?>
          <h3 class="h2 mb-0"><?=$about_subtitle?></h3>
        <?php endif; ?>
        <?php if ($about_text): ?>
          <div class="d-flex flex-column gap-3 gap-lg-4">
            <?=$about_text?>
          </div>
        <?php endif; ?>
      </div>
      <div class="col d-flex flex-column align-items-center">
        <?php if ($about_img): ?>
          <img src="<?=$about_img?>" alt="<?=$about_subtitle?>" class="img-fluid" loading="lazy" />
        <?php endif; ?>  
      </div>
    </div>
  </div>
</section>