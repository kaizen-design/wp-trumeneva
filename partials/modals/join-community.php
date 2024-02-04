<?php 
  $title = get_field('join_form_title', 'option');
  $text = get_field('join_form_text', 'option');
  $success_message = get_field('join_form_sucess_message', 'option');
?>

<div class="modal fade" id="joinCommunityModal" tabindex="-1" aria-labelledby="joinCommunityModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
      
      <form class="contact-form">
        <fieldset class="form-main d-flex flex-column gap-4">
          <?php if ($title || $text): ?>
            <div class="d-flex flex-column gap-3">
              <?php if ($title): ?>
                <h3 class="mb-0 text-center"><?=$title?></h3> 
              <?php endif; ?>
              <?php if ($text): ?>
                <div class="alert alert-primary text-center mb-0 border-0" role="alert">
                  <?=$text?>
                </div> 
              <?php endif; ?>  
            </div>
          <?php endif; ?>  
          <div class="d-flex flex-column">
            <label for="contactNameInput" class="form-label">Номер телефона или ник в Telegram</label>
            <input type="text" name="name" class="form-control" id="contactNameInput" placeholder="Номер телефона или ник в Telegram" aria-describedby="emailHelp" required>
          </div>
          <div class="d-flex flex-column">
            <label for="contactMessageInput" class="form-label">Напишите пожалуйста несколько слов о себе</label>
            <textarea class="form-control" name="message" id="contactMessageInput" rows="3" placeholder="Введите здесь свое сообщение..." required></textarea>
          </div>
          <button type="submit" class="btn btn-gradient rounded-pill">Отправить</button>
        </fieldset>
        <fieldset class="form-result d-flex flex-column gap-4 align-items-center d-none">
          <img src="<?=get_stylesheet_directory_uri(); ?>/assets/img/icons/success.svg" alt="" />
          <?php if ($success_message): ?>
            <div class="d-flex flex-column gap-3">
              <h3 class="mb-0 text-center"><?=$success_message?></h3>
            </div>
          <?php endif; ?>   
        </fieldset>  
      </form>  

      <span class="close-btn" data-bs-dismiss="modal" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5.25 5.25L18.75 18.75M5.25 18.75L18.75 5.25" stroke="#848CA2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </span>

    </div>
  </div>
</div>