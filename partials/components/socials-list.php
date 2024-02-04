<?php 
  $class = isset($args['class']) && $args['class'] ? $args['class'] : '';
  $linkedin = get_field('linkedin', 'option');
  $telegram = get_field('telegram', 'option');
  $vk = get_field('vk', 'option');
  $ok = get_field('ok', 'option');
  $email = get_field('email', 'option');
?>

<?php if ($linkedin || $telegram || $vk || $ok || $email): ?>
  <ul class="<?=$class?>">
    <?php if ($linkedin): ?>
      <li>
        <a href="<?=$linkedin?>" target="_blank" class="d-inline-flex align-items-center">
          <img 
            src="<?=get_stylesheet_directory_uri(); ?>/assets/img/icons/linkedin<?=isset($args['gradient']) && $args['gradient'] ? '-g' : ''?>.svg" 
            alt="LinkedIn" 
          />
          <?=isset($args['text']) && $args['text'] ? 'LinkedIn' : ''?>
        </a>
      </li>
    <?php endif; ?>
    <?php if ($telegram): ?> 
      <li>
        <a href="<?=$telegram?>" target="_blank" class="d-inline-flex align-items-center">
          <img 
            src="<?=get_stylesheet_directory_uri(); ?>/assets/img/icons/telegram<?=isset($args['gradient']) && $args['gradient'] ? '-g' : ''?>.svg" 
            alt="Telegram" 
          />
          <?=isset($args['text']) && $args['text'] ? 'Telegram' : ''?>
        </a>
      </li>
    <?php endif; ?>
    <?php if ($vk): ?> 
      <li>
        <a href="<?=$vk?>" target="_blank" class="d-inline-flex align-items-center">
          <img 
            src="<?=get_stylesheet_directory_uri(); ?>/assets/img/icons/vk<?=isset($args['gradient']) && $args['gradient'] ? '-g' : ''?>.svg" 
            alt="vk" 
          />
          <?=isset($args['text']) && $args['text'] ? 'Vkontakte' : ''?>
        </a>
      </li>
    <?php endif; ?>  
    <?php if ($ok): ?> 
      <li>
        <a href="<?=$ok?>" target="_blank" class="d-inline-flex align-items-center">
          <img 
            src="<?=get_stylesheet_directory_uri(); ?>/assets/img/icons/ok<?=isset($args['gradient']) && $args['gradient'] ? '-g' : ''?>.svg" 
            alt="ok" 
          />
          <?=isset($args['text']) && $args['text'] ? 'Odnoklassniki' : ''?>
        </a>
      </li>
    <?php endif; ?>  
    <?php if ($email): ?>           
      <li>
        <a href="mailto:<?=$email?>" class="d-inline-flex align-items-center">
          <img 
            src="<?=get_stylesheet_directory_uri(); ?>/assets/img/icons/mail<?=isset($args['gradient']) && $args['gradient'] ? '-g' : ''?>.svg" 
            alt="Mail" 
          />
          <?=isset($args['text']) && $args['text'] ? 'Mail' : ''?>
        </a>
      </li>
    <?php endif; ?>  
  </ul>
<?php endif; ?> 