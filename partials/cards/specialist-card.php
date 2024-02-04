<?php 
  $class = isset($args['class']) && $args['class'] ? $args['class'] : '';
  $post = $args['post'];
  $postID = $post->ID;
  $post_title = $post->post_title;
  $post_url = get_permalink($postID);
  $post_image = get_the_post_thumbnail_url($postID);
  $data = get_fields($postID);
  $border_color = (new Specialists)->getBorderColor($data['category']);
  wp_reset_query();
  wp_reset_postdata();
?>

<div class="specialist-card card d-flex flex-column position-relative <?=$class?>">
  <a class="card-link" href="<?=$post_url?>"></a>
  <?php if ($post_image): ?>
    <div class="card-img rounded-circle overflow-hidden align-self-center <?=$border_color?>">
      <a href="<?=$post_url?>">
        <img src="<?=esc_url($post_image)?>" alt="<?=$post_title?>" class="img-fluid" loading="lazy" />
      </a>
    </div>
  <?php endif; ?>    
  
  <div class="d-flex flex-column align-items-center gap-1">              
    <h4 class="h6 fw-medium mb-0"><?=$post_title?></h4>
    <?php if ($data['title'] || $data['experience']): ?>
      <ul class="card-meta list-unstyled d-flex align-items-center mb-0">
        <?php if ($data['title']): ?>
          <li><?=$data['title']?></li>
        <?php endif; ?>  
        <?php if ($data['experience']): ?>
          <li>Стаж <?=$data['experience']?></li>
        <?php endif; ?>  
      </ul>
    <?php endif; ?>   
  </div>
  
  <?php if ($data['price_value'] && $data['price_label']): ?>
    <div class="card-price d-flex gap-1 align-items-center">
      <?php if ($data['price_value']): ?>
        <span class="price-value fw-medium"><?=$data['price_value']?></span>
      <?php endif; ?>
      <?php if ($data['price_label']): ?>
        <span class="price-label"><?=$data['price_label']?></span>
      <?php endif; ?>
    </div>
  <?php endif; ?> 
  
  <?php if ($data['methods']): ?>
    <div class="card-services d-flex flex-column gap-2">
      <p class="service-label mb-0 ">Методы</p>
      <ul class="service-list list-unstyled mb-0 d-flex gap-1 flex-wrap">
        <?php 
          foreach($data['methods'] as $i) {
            echo '<li class="rounded-pill text-truncate">' . $i['text'] . '</li>';
          }
        ?>
      </ul>
    </div>
  <?php endif; ?> 

  <?php if ($data['questions']): ?>
    <div class="card-services d-flex flex-column gap-2">
      <p class="service-label mb-0 ">Запросы на проработку</p>
      <ul class="service-list list-unstyled mb-0 d-flex gap-1 flex-wrap">
        <?php 
          foreach($data['questions'] as $i) {
            echo '<li class="rounded-pill text-truncate">' . $i['text'] . '</li>';
          }
        ?>
      </ul>
    </div>
  <?php endif; ?> 

  <button type="button" class="btn btn-sm btn-gradient rounded-pill text-truncate position-relative z-1" data-bs-toggle="modal" data-bs-target="#contactSpecialistModal" data-specialist="<?=$post_title?>" data-email="<?=isset($data['email']) && $data['email'] ? $data['email'] : ''?>">Связаться со специалистом</button>
</div>