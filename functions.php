<?php

/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme
 */

/**
 * Enqueue scripts and styles.
 */
function theme_scripts() {

  if (is_front_page() || is_single()) {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], false);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], false, true);
  }

  wp_enqueue_style('theme-style', get_template_directory_uri() . '/dist/css/app.min.css', [], wp_get_theme()->get('Version'));
  wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/dist/js/app.min.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');

/**
 * Register includes.
 */
function register_includes() {
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
  require_once get_template_directory() . '/inc/class-wp-specialists.php';
  require_once get_template_directory() . '/inc/class-wp-blog.php';
  //require_once get_template_directory() . '/inc/class-wp-mobile-nav-walker.php';
}
add_action( 'after_setup_theme', 'register_includes' );

/**
 * Register nav menus.
 */
register_nav_menus([
  'primary' => __( 'Основное меню', 'TRUMENEVA' ),
  'mobile' => __( 'Мобильное меню', 'TRUMENEVA' ),
  'footer_left' => __( 'Подвал (левый)', 'TRUMENEVA' ),
  'footer_center' => __( 'Подвал (центр)', 'TRUMENEVA' ),
  'footer_right' => __( 'Подвал (правый)', 'TRUMENEVA' ),
  'legal' => __( 'Легал меню', 'TRUMENEVA' ),
]);

/**
 * Add theme supported features.
 */
add_theme_support('post-thumbnails');

add_action( 'wp_ajax_send_email', 'wpse_sendmail' );
add_action( 'wp_ajax_nopriv_send_email', 'wpse_sendmail' );

function wpse_sendmail() {
  $email = get_option('admin_email');
  $name = $_POST['name'];
  $message = $_POST['message'];
  $body = '<p>От кого: ' . $name . "</p>";
  $body .= '<p>Сообщение: ' . $message . "</p>";
  $headers = "Content-Type: text/html; charset=UTF-8\r\n";
  $subject = 'Присоединение специалиста';

  if (isset($_POST['email']) && $_POST['email']) {
    $subject = 'Запись к специалисту';
    $email .= ", " . $_POST['email'];
  }
    
  if(mail($email, $subject, $body, $headers)) {
    echo 'Message has been successfully sent';
  } else {
    echo 'Failed to send the message';
  }

  die();
}