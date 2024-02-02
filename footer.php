<?php 
  $reg_number = get_field('reg_number', 'option');
  $company_name = get_field('company_name', 'option');
?>
  
    </main>

    <footer class="footer">
      <div class="container d-flex flex-column">
        <div class="d-flex flex-column flex-md-row justify-content-between gap-md-5">
          <?php
            wp_nav_menu([
              'theme_location' => 'footer_left',
              'container' => false,
              'menu_class' => '',
              'fallback_cb' => '__return_false',
              'items_wrap' => '<ul class="footer-nav list-unstyled d-flex flex-column m-md-0 %2$s">%3$s</ul>',
            ]);
          ?>
          <?php
            wp_nav_menu([
              'theme_location' => 'footer_center',
              'container' => false,
              'menu_class' => '',
              'fallback_cb' => '__return_false',
              'items_wrap' => '<ul class="footer-nav list-unstyled d-flex flex-column m-md-0 %2$s">%3$s</ul>',
            ]);
          ?>
          <div class="footer-nav d-flex flex-column gap-md-3">
            <?php
              wp_nav_menu([
                'theme_location' => 'footer_right',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul class="footer-nav list-unstyled d-flex flex-column m-0 %2$s">%3$s</ul>',
              ]);
            ?>
            <?php get_template_part(
              'partials/components/socials-list', 
              null, 
              [
                'class' => 'socials-list d-flex align-items-center gap-3 list-unstyled m-0', 
                'gradient' => true
              ]
            ) ?>
            <?php if ($reg_number): ?> 
              <p class="m-0"><?=$reg_number?></p>
            <?php endif; ?>  
            <?php if ($company_name): ?>
              <p class="m-0"><?=$company_name?></p>
            <?php endif; ?>
          </div>
        </div>
        <div class="d-flex flex-column gap-3">
          <?php
            wp_nav_menu([
              'theme_location'  => 'legal',
              'container' => false,
              'menu_class' => '',
              'fallback_cb' => '__return_false',
              'items_wrap' => '<ul class="legal-menu list-unstyled d-flex flex-column flex-md-row m-0 %2$s">%3$s</ul>',
            ]);
          ?>
          <p class="copyright m-0">© <?= date("Y"); ?> <?= get_bloginfo( 'name' ) ?></p>
        </div>
      </div>
    </footer>

    <?php get_template_part('partials/modals/mobile-nav') ?>
    <?php get_template_part('partials/modals/join-community') ?>

    <!-- TODO: add additional conditions -->
    <?php // if (is_front_page()) : ?>      
      <?php get_template_part('partials/modals/contact-specialist') ?>
    <?php // endif; ?>  

    <!-- wordpress footer includes -->
    <?php wp_footer(); ?>

  </body>
</html>