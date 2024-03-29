<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <title><?=get_the_title()?></title>

  <!-- meta tag header includes -->
  <meta name="author" content="Denis Bondarchuk" />
  <!-- <meta name="description" content="<?=get_the_excerpt()?>" /> 
  <meta name="keywords" content="<?=$metaTags?>"> -->
  <link rel="canonical" href="<?=wp_get_canonical_url()?>">
  <link rel="pingback" href="<?=esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
  <link rel="shortcut icon" href="<?=get_stylesheet_directory_uri(); ?>/assets/img/favicons/favicon.png" />
  <meta name="robots" content="index, follow">

  <!-- compatability header includes -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- open graph header includes -->
  <meta property="og:title" content="<?= get_the_title() ?>" />
  <meta property="og:url" content="<?= wp_get_canonical_url() ?>" />
  <meta property="og:description" content="<?= get_the_excerpt() ?>" />

  <!-- wordpress header includes -->
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  
  <?php get_template_part('partials/top-banner') ?>
  <?php get_template_part('partials/navbar') ?>

  <main>