<?php
$featureDescription = get_field('feature_description', get_the_id());
$featureImage = get_field('feature_image', get_the_id());
?>

<div class="home--features">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-5 home--features__description">
            <?php echo $featureDescription; ?>
          </div>
          <div class="col"></div>
          <div class="col-lg-6 home--features__image">
            <img src="<?php echo $featureImage; ?>" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>