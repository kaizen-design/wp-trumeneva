<?php 
  $faq_heading = get_field('faq_heading', 'option');
  $faq_subheading = get_field('faq_subheading', 'option');
  $faq = get_field('faq', 'option');
  $support_chat = get_field('support_chat', 'option');
?>

<?php if ($faq): ?>
  <section class="faq-section">
    <div class="container d-flex flex-column">
      <div class="d-flex flex-column gap-3 align-items-center">
        <?php if ($faq_heading): ?>
          <h2 class="h2 mb-0"><?=$faq_heading?></h2>
        <?php endif; ?>  
        <?php if ($faq_subheading): ?>
          <p class="mb-0"><?=$faq_subheading?></p>
        <?php endif; ?>  
      </div>
      <div class="faq-list accordion d-flex flex-column" id="faqListAccordion">
        <?php 
          foreach( $faq as $key => $row ) {
            $title = $row['title'];
            $text = $row['text'];
            echo '<div class="accordion-item">
                    <h5 class="accordion-header" id="faqHeading-' . $key . '">
                      <button class="accordion-button collapsed fw-medium text-black px-0 rounded-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#faqPanel-' . $key . '" aria-expanded="false" aria-controls="faqPanel-' . $key . '">
                        ' . $title . '
                      </button>
                    </h5>
                    <div id="faqPanel-' . $key . '" class="accordion-collapse collapse" aria-labelledby="faqHeading-' . $key . '">
                      <div class="accordion-body">
                        ' . $text . '
                      </div>
                    </div>
                  </div>';
          }
        ?>
      </div>
      <?php if ($support_chat): ?>
        <div class="d-flex flex flex-column flex-sm-row justify-content-center">
          <a href="<?=$support_chat?>" target="_blank" class="btn btn-primary btn-lg rounded-pill">Чат поддержки</a>
        </div>
      <?php endif; ?>  
    </div>
  </section>
<?php endif; ?>  