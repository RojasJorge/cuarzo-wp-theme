<?php
$bannerForm = get_field('banner_form', get_the_id());
?>

<div class="container">
  <div class="row banner-form-wrap justify-content-end align-items-center">
    <div class="col-lg-4">
      <?php echo $bannerForm; ?>
    </div>
  </div>
</div>