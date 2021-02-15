<?php
get_header();
the_post(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="col-md-12">
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>