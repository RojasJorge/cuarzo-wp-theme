<?php
$quoteDescription = get_field('quote_descripcion', get_the_id());
$quoteBanner = get_field('quote_banner', get_the_id());
?>

<div class="home--quote" style="background-image: url(<?php echo $quoteBanner; ?>)">
  <div class="home--quote__overlay"></div>
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6">
        <?php echo $quoteDescription; ?>
      </div>
    </div>
  </div>
</div>