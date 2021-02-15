<?php
$contact = get_page_by_path('contacto');
$descriptionImage = get_field('logo_image', $contact->ID);
$description = get_field('description', $contact->ID);
$contactInfo = get_field('contact_info', $contact->ID);
$facebookLink = get_field('facebook_link', $contact->ID);
$instagramLink = get_field('instagram_link', $contact->ID);
?>

<div class="container">
  <div class="row site--footer__description align-items-center justify-content-center">
    <div class="col-md-5">
      <div class="row">
        <div class="col-12 description-logo">
          <img src="<?php echo $descriptionImage; ?>" alt="">
        </div>
        <div class="col-12 description">
          <?php echo $description; ?>
        </div>
      </div>
    </div>
    <div class="col-md-5 contact-info">
      <?php echo $contactInfo; ?>
      <ul class="social">
        <?php if($facebookLink): ?>
          <li>
            <a href="<?php echo $facebookLink; ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/images/fb.png" alt="">
            </a>
          </li>
        <?php endif; ?>
        <?php if($instagramLink): ?>
          <li>
            <a href="<?php echo $instagramLink; ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/ins.png" alt="">
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</div>
