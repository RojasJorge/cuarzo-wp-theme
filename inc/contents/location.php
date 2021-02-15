<?php
$locationDescription = get_field('location_description', get_the_id());
$locationMap = get_field('location_map', get_the_id());
?>

<div class="home--location container-fluid">
  <div class="row">
    <div class="col-lg-4 home--location__description">
      <div>
        <?php echo $locationDescription; ?>
      </div>
    </div>
    <div class="col-lg-8 home--location__map" style="background-image: url(<?php echo $locationMap; ?>);">

    </div>
  </div>

</div>