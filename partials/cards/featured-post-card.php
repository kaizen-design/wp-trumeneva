<?php 
  $class = isset($args['class']) && $args['class'] ? $args['class'] : '';
  $post = $args['post'];
  $postID = $post->ID;
  $post_title = $post->post_title;
  $post_url = get_permalink($postID);
  $post_image = get_the_post_thumbnail_url($postID);
  $excerpt = (new Blog)->getExcerpt($post->post_content);
  wp_reset_query();
  wp_reset_postdata();
?>

<article class="featured-post post-card card <?= $class ?>">
  <a href="<?=$post_url?>" class="d-md-flex align-items-md-center">
    <div class="card-img card-img-top flex-md-shrink-0">
      <?php if ($post_image): ?>
        <img 
          src="<?=$post_image?>" 
          class="img-fluid h-100 w-100 object-fit-cover" 
          loading="lazy"
          alt="<?=$post_title?>"
        >  
      <?php endif; ?>  
    </div>
    <div class="card-body p-3 d-flex flex-column gap-2">
      <span><?=get_the_date('', $postID)?></span>
      <h2 class="h6 fw-medium text-black mb-0"><?=$post_title?></h2>
      <p class="mb-0"><?=$excerpt?></p>
    </div>
  </a>
</article>