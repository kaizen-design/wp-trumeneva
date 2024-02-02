<?php 
  $text = get_field('top_banner_text', 'option');
  $date = get_field('top_banner_date', 'option');
?>

<?php if ($text && $date): ?>
  <div class="site-alert bg-primary d-flex flex-column justify-content-center">
    <div class="container-fluid d-flex flex-column flex-md-row justify-content-between align-items-center text-white gap-2">
      <?php if ($text): ?>
        <p class="mb-0 fw-medium text-center"><?=$text?></p>
      <?php endif; ?>  
      <?php if ($date): ?>
        <div class="d-flex align-items-center gap-3">
          <span class="fw-medium">Осталось</span>
          <span class="fw-semibold counter" data-time="<?=$date?>">...</span>
        </div>
      <?php endif; ?>    
    </div>
  </div>
<?php endif; ?>  