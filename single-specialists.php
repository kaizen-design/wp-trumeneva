<?php

/**
 * The specialist single template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme
 */

get_header();

$data = get_fields();
$border_color = (new Specialists)->getBorderColor($data['category']);
?>

<section class="single-specialist">
  <div class="container d-flex flex-column">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= esc_url( home_url( '/' ) ); ?>">Главная</a></li>
        <li class="breadcrumb-item"><a href="/specialists/">Специалисты</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php single_post_title(); ?></li>
      </ol>
    </nav>
    <div class="d-flex flex-column flex-lg-row justify-content-between gap-5 gap-lg-4">
      <aside class="specialist-sidebar card d-flex flex-column align-self-start d-none d-lg-flex">
        <div class="card-img rounded-circle overflow-hidden align-self-center <?=$border_color?>">
          <img 
            src="<?= esc_url(get_the_post_thumbnail_url()) ?>" 
            alt="<?php single_post_title(); ?>" 
            class="img-fluid" 
          />
        </div>
        <div class="d-flex flex-column gap-1 align-items-center">
          <h1 class="card-name fw-medium h3 mb-0 text-center"><?php single_post_title(); ?></h1>
          <?php if ($data['telegram']): ?>
            <p class="card-contact fw-medium mb-0"><?=$data['telegram']?></p>
          <?php endif; ?>  
        </div>
        <div class="d-flex justify-content-between align-items-center gap-3">
          <div class="d-flex flex-column gap-1">
            <?php if ($data['title']): ?>
              <h4 class="card-title fw-medium mb-0"><?=$data['title']?></h4>
            <?php endif; ?>  
            <?php if ($data['experience']): ?>
              <p class="card-experience fw-medium mb-0">Стаж <?=$data['experience']?></p>
            <?php endif; ?>   
          </div>
          <?php if ($data['price_value'] && $data['price_label']): ?>
            <span class="card-price d-flex align-items-center gap-1">
              <?php if ($data['price_value']): ?>
                <span class="price-value fw-medium"><?=$data['price_value']?></span>
              <?php endif; ?>
              <?php if ($data['price_label']): ?>
                <span class="price-label"><?=$data['price_label']?></span>
              <?php endif; ?>
            </span>
          <?php endif; ?> 
        </div>
        
        <button type="button" class="btn btn-gradient rounded-pill text-truncate" data-bs-toggle="modal" data-bs-target="#contactSpecialistModal" data-specialist="<?php single_post_title() ?>" data-email="<?=isset($data['email']) && $data['email'] ? $data['email'] : ''?>">Связаться со специалистом</button>
        
        <?php if ($data['docs'] || $data['education_place'] || $data['education_date_start'] || $data['education_date_end']): ?>
          <ul class="card-meta mb-0 list-unstyled d-flex flex-column">
            <?php if ($data['docs']): ?>
              <li class="d-flex flex-column">
                <span class="meta-label">Документы об образовании</span>
                <div class="row row-cols-2 g-3">
                  <?php 
                    foreach( $data['docs'] as $key => $doc ) {
                      $img = $doc['doc'];
                      echo '<div class="col">
                              <a href="#" class="card-document position-relative d-flex flex-column">
                                <span class="doc-icon">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11 18C15.1421 18 18.5 14.6421 18.5 10.5C18.5 6.35786 15.1421 3 11 3C6.85786 3 3.5 6.35786 3.5 10.5C3.5 14.6421 6.85786 18 11 18Z" stroke="#49A7EC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.5008 20.9998L16.3008 15.7998" stroke="#49A7EC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                </span>
                                <img src="' . $img . '" alt="" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy" />
                              </a>
                            </div>';
                    }
                  ?>
                </div>
              </li>
            <?php endif; ?>  
            <?php if ($data['education_place']): ?>
              <li class="d-flex flex-column">
                <span class="meta-label">Место обучения</span>
                <p class="meta-value mb-0"><?=$data['education_place']?></p>
              </li>
            <?php endif; ?>   
            <?php if ($data['education_date_start'] || $data['education_date_end']): ?>
              <li class="d-flex flex-column">
                <span class="meta-label">Время обучения</span>
                <p class="meta-value mb-0">
                  С <?=$data['education_date_start']?> по <?=$data['education_date_end']?>
                </p>
              </li>
            <?php endif; ?>  
          </ul>
        <?php endif; ?>  
      </aside>
      <div class="specialist-main d-flex flex-column">
        
        <?php if ($data['about_me'] || $data['interests'] || $data['methods'] || $data['questions']): ?>
          <ul class="info-nav nav mb-0">
            <?php if ($data['about_me']): ?>
              <li class="nav-item">
                <a class="nav-link smoothScroll active" aria-current="page" href="#about">Обо мне</a>
              </li>
            <?php endif; ?>  
            <?php if ($data['interests']): ?>
              <li class="nav-item">
                <a class="nav-link smoothScroll" href="#interests">Интересы</a>
              </li>
            <?php endif; ?>
            <?php if ($data['methods']): ?>
              <li class="nav-item">
                <a class="nav-link smoothScroll" href="#methods">Методы работы</a>
              </li>
            <?php endif; ?>   
            <?php if ($data['questions']): ?>
              <li class="nav-item">
                <a class="nav-link smoothScroll" href="#questions">Запросы на проработку</a>
              </li>
            <?php endif; ?>   
          </ul>
        <?php endif; ?>  
        
        <div class="d-lg-none d-flex gap-3">
          <div class="card-img rounded-circle overflow-hidden align-self-center <?=$border_color?>">
            <img 
              src="<?= esc_url(get_the_post_thumbnail_url()) ?>" 
              alt="<?php single_post_title(); ?>" 
              class="img-fluid" 
            />
          </div>
          <div class="d-flex flex-column gap-1 flex-grow-1">
            <h1 class="card-name fw-medium h3 mb-0"><?php single_post_title(); ?></h1>
            <?php if ($data['telegram']): ?>
              <p class="card-contact fw-medium mb-0"><?=$data['telegram']?></p>
            <?php endif; ?>
            <?php if ($data['price_value'] && $data['price_label']): ?>
              <span class="card-price d-flex align-items-center gap-1">
                <?php if ($data['price_value']): ?>
                  <span class="price-value fw-medium"><?=$data['price_value']?></span>
                <?php endif; ?>
                <?php if ($data['price_label']): ?>
                  <span class="price-label"><?=$data['price_label']?></span>
                <?php endif; ?>
              </span>
            <?php endif; ?> 
          </div>
        </div>
        
        <button type="button" class="btn btn-gradient rounded-pill text-truncate d-lg-none" data-bs-toggle="modal" data-bs-target="#contactSpecialistModal" data-specialist="<?php single_post_title(); ?>" data-email="<?=isset($data['email']) && $data['email'] ? $data['email'] : ''?>">Связаться со специалистом</button>
        
        <?php if ($data['about_me']): ?>
          <div id="about" class="scroll-margin-top-30 d-flex flex-column gap-3 gap-lg-4">
            <h3 class="mb-0">Обо мне</h3>
            <div class="content">
              <?=$data['about_me']?>
            </div>
          </div>
        <?php endif; ?>  

        <?php if ($data['video']): ?>
          <div class="embed-video">
            <div class="ratio ratio-16x9">
              <iframe src="<?=$data['video']?>" title="YouTube video" allowfullscreen loading="lazy"></iframe>
            </div>
          </div>
        <?php endif; ?>  

        <div class="profile-card d-lg-none d-flex flex-column gap-3 position-relative">
          <div class="d-flex flex-column gap-1">
            <?php if ($data['title']): ?>
              <span class="profile-title"><?=$data['title']?></span>
            <?php endif; ?>
            <?php if ($data['licence']): ?>
              <span class="profile-licence d-flex align-items-center gap-1">
                <img src="<?=get_stylesheet_directory_uri(); ?>/assets/img/icons/licence.svg" alt="" />
                <?=$data['licence']?>
              </span>
            <?php endif; ?>
            <?php if ($data['experience']): ?>
              <span>Стаж <?=$data['experience']?></span>
            <?php endif; ?>
          </div>
          <?php if ($data['docs']): ?>
            <ul class="card-meta mb-0 list-unstyled d-flex flex-column">
              <li class="d-flex flex-column">
                <span class="meta-label">Документы об образовании</span>
                <div class="row row-cols-2 g-3">
                  <?php 
                    foreach( $data['docs'] as $key => $doc ) {
                      $img = $doc['doc'];
                      echo '<div class="col">
                              <a href="#" class="card-document position-relative d-flex flex-column">
                                <span class="doc-icon">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11 18C15.1421 18 18.5 14.6421 18.5 10.5C18.5 6.35786 15.1421 3 11 3C6.85786 3 3.5 6.35786 3.5 10.5C3.5 14.6421 6.85786 18 11 18Z" stroke="#49A7EC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.5008 20.9998L16.3008 15.7998" stroke="#49A7EC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                </span>
                                <img src="' . $img . '" alt="" class="img-fluid w-100 h-100 object-fit-cover" loading="lazy" />
                              </a>
                            </div>';
                    }
                  ?>
                </div>
              </li>
            </ul>  
          <?php endif; ?>  
        </div>

        <?php if ($data['interests']): ?>
          <div id="interests" class="scroll-margin-top-30 meta-section d-flex flex-column">
            <h3 class="mb-0">Интересы</h3>
            <ul class="service-list list-unstyled mb-0 d-flex gap-2 flex-wrap">
              <?php 
                foreach($data['interests'] as $i) {
                  echo '<li class="rounded-pill text-truncate">' . $i['text'] . '</li>';
                }
              ?>
            </ul>
          </div>
        <?php endif; ?>  

        <?php if ($data['methods']): ?>
          <div id="methods" class="scroll-margin-top-30 meta-section d-flex flex-column">
            <h3 class="mb-0">Методы работы</h3>
            <ul class="service-list list-unstyled mb-0 d-flex gap-2 flex-wrap">
              <?php 
                foreach($data['methods'] as $i) {
                  echo '<li class="rounded-pill text-truncate">' . $i['text'] . '</li>';
                }
              ?>
            </ul>
          </div>
        <?php endif; ?>

        <?php if ($data['questions']): ?>
          <div id="questions" class="scroll-margin-top-30 meta-section d-flex flex-column">
            <h3 class="mb-0">Запросы на проработку</h3>
            <ul class="service-list list-unstyled mb-0 d-flex gap-2 flex-wrap">
              <?php 
                foreach($data['questions'] as $i) {
                  echo '<li class="rounded-pill text-truncate">' . $i['text'] . '</li>';
                }
              ?>
            </ul>
          </div>
        <?php endif; ?>  

      </div>
    </div>
  </div>
</section> 

<?php get_template_part('partials/sections/cta', null, []) ?>
<?php get_template_part('partials/sections/alter-ego', null, []) ?>

<?php
get_footer();
