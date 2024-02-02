<?php
/**
 * Template Name: Contacts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme
 */

get_header();
?>

<?php 
  $reg_number = get_field('reg_number', 'option');
  $company_name = get_field('company_name', 'option');
  $title = get_field('title');
  $text = get_field('text');
?>

<section class="contact-section">
  <div class="container-fluid d-flex flex-column">
    <h1 class="h2 mb-0"><?php single_post_title(); ?></h1>
    <div class="contact-card d-flex flex-column">
      <div class="d-flex flex-column">
        <?php if ($title || $text): ?>
          <div class="d-flex flex-column gap-1">
            <?php if ($title): ?>
              <h3 class="mb-0"><?=$title?></h3>
            <?php endif; ?>
            <?php if ($text): ?>
              <p class="mb-0"><?=$text?></p>
            <?php endif; ?>  
          </div>
        <?php endif; ?>   
        <?php get_template_part(
          'partials/components/socials-list', 
          null, 
          [
            'class' => 'contact-list list-unstyled mb-0 d-flex flex-column gap-3', 
            'gradient' => true,
            'text' => true
          ]
        ) ?>
      </div>
      <?php if ($reg_number || $company_name): ?>
        <div class="d-flex flex-column flex-md-row gap-3 gap-md-5">
          <?php if ($reg_number): ?> 
            <p class="mb-0 fw-medium"><?=$reg_number?></p>
          <?php endif; ?>  
          <?php if ($company_name): ?>
            <p class="mb-0 fw-medium"><?=$company_name?></p>
          <?php endif; ?>
        </div>
      <?php endif; ?>  
    </div>
  </div>
</section>

<?php
get_footer();
