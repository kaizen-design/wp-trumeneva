<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand p-0 m-0" href="<?= esc_url( home_url( '/' ) ); ?>">
      <img src="<?=get_stylesheet_directory_uri(); ?>/assets/img/navbar-brand.svg" alt="Trumeneva" width="146" height="45" />
    </a>
    <?php
      wp_nav_menu([
        'theme_location'  => 'primary',
        'container' => false,
        'menu_class' => '',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="%1$s" class="nav justify-content-center mx-lg-auto gap-2 d-none d-md-flex %2$s">%3$s</ul>',
        'depth' => 2,
        'walker' => new bootstrap_5_wp_nav_menu_walker()
    ]);
    ?>
    <?php get_template_part(
      'partials/components/socials-list', 
      null, 
      ['class' => 'socials-list d-none d-lg-flex align-items-center justify-content-end gap-3 list-unstyled m-0']
    ) ?>
    <button class="mobile-navbar-toggler d-md-none" type="button" data-bs-toggle="modal" data-bs-target="#mobileNavModal">
      <img src="<?=get_stylesheet_directory_uri(); ?>/assets/img/icons/hamburger.svg" alt="Menu" />
    </button>
  </div>
</nav>