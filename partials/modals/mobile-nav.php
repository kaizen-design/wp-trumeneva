<?php 
  $support_chat = get_field('support_chat', 'option');
?>

<div class="mobile-nav-modal modal d-md-none" id="mobileNavModal" tabindex="-1" aria-labelledby="mobileNavModalLabel" aria-hidden="true" data-bs-backdrop="false">
  <div class="modal-dialog modal-fullscreen-md-down modal-dialog-scrollable">
    <div class="modal-content flex flex-column">
      <img class="close-btn" data-bs-dismiss="modal" aria-label="Close" src="<?=get_stylesheet_directory_uri(); ?>/assets/img/icons/close.svg" alt="Close" />
      <div class="d-flex flex-column">
        
        <?php
          wp_nav_menu([
              'theme_location'  => 'mobile',
              'container' => false,
              'menu_class' => '',
              'fallback_cb' => '__return_false',
              'items_wrap' => '<ul class="mobile-nav-menu d-flex flex-column list-unstyled m-0 %2$s">%3$s</ul>',
              //'depth' => 2,
              //'walker' => new mobile_menu_walker()
          ]);
        ?>
        <!-- <ul class="mobile-nav-menu d-flex flex-column list-unstyled m-0">
          <li><a href="#" class="smoothScroll">О проекте</a></li>
          <li><a href="#">Специалисты</a></li>
          <li><a href="#">Психологи</a></li>
          <li><a href="#">Коучи</a></li>
          <li><a href="#">Энергопрактики</a></li>
          <li><a href="#">Блог</a></li>
          <li class="d-flex justify-content-between align-items-center gap-3">
            <a href="#">Контакты</a>
             ?>
          </li>
        </ul> -->
        
        <!-- TODO: add social media properly -->
        <?php /* get_template_part(
          'partials/components/socials-list', 
          null, 
          ['class' => 'socials-list d-flex align-items-center justify-content-end gap-3 list-unstyled m-0']
        ) */ ?>
      </div>
      <div class="modal-footer d-grid flex-column mt-auto p-0 border-0">
        <?php if($support_chat): ?>
          <a href="<?=$support_chat?>" target="_blank" class="btn btn-outline-primary rounded-pill m-0">Чат поддержки</a>
        <?php endif; ?>  
        <a href="#" data-bs-toggle="modal" data-bs-target="#joinCommunityModal" class="btn btn-primary rounded-pill m-0">Присоединиться к комьюнити</a>
      </div>
    </div>
  </div>
</div>