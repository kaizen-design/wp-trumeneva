<?php
get_header();

$posts = (new Specialists)->getSpecialists();

$menu = [
  [
    'title' => 'Психологи',
    'category' => 'psychologist'
  ],
  [
    'title' => 'Коучи',
    'category' => 'coach'
  ],
  [
    'title' => 'Энергопрактики',
    'category' => 'energy-practitioner'
  ]
];

?>
<section class="specialists-section">
  <div class="container-fluid d-flex flex-column">
    <div class="d-flex flex-column gap-4 mb-md-4">
      <h1 class="h2 mb-0">Специалисты</h1>
      <ul class="nav nav-pills mb-0 gap-2 gap-lg-3">
        <?php foreach ($menu as $item): ?>
          <?php $is_active = isset($_GET['category']) && $_GET['category'] === $item['category'] ? 'active' : ''; ?>
          <li class="nav-item">
            <a 
              class="nav-link rounded-pill <?=$is_active?>" 
              aria-current="page" 
              href="/specialists/?category=<?=$item['category']?>"
            >
              <?=$item['title']?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>          
    <div class="row row-cols-lg-3 row-cols-xxl-4 gy-4">
      <?php foreach ($posts as $post): ?>
        <div class="col">
          <?php get_template_part('partials/cards/specialist-card', null, ['post' => $post]) ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_template_part('partials/sections/cta', null, []) ?>
<?php get_template_part('partials/sections/alter-ego', null, []) ?>

<?php
get_footer();
