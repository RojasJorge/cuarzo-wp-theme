<?php
  $topLeft = get_field('top_left', get_the_id());
  $bottomLeft = get_field('bottom_left', get_the_id());
  $center = get_field('center', get_the_id());
  $topRight = get_field('top_right', get_the_id());
  $bottomRight = get_field('bottom_right', get_the_id());
?>

<div class="home--gallery">
  <div class="column">
    <div class="box box--top-left" style="background-image: url(<?php echo $topLeft; ?>);"></div>
    <div class="box box--bottom-left" style="background-image: url(<?php echo $bottomRight; ?>);"></div>
  </div>
  <div class="column">
    <div class="box box--center" style="background-image: url(<?php echo $center; ?>);"></div>
  </div>
  <div class="column">
    <div class="box box--top-right" style="background-image: url(<?php echo $topRight; ?>);"></div>
    <div class="box box--bottom-right" style="background-image: url(<?php echo $bottomRight; ?>);"></div>
  </div>
</div>