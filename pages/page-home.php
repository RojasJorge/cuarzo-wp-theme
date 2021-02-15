<?php
/**
 * Template Name: Home
 */

get_header();
the_post(); 

$bannerTop = get_field('banner_top', 25);
?>

<div class="home--banner" style="background-image: url(<?php echo $bannerTop; ?>)">
<?php get_template_part('inc/contents/banner-form'); ?>
</div>

<div class="home--about">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <?php the_content(); ?>
        <div class="contact-link">
          <a href="#">Cotizar proyecto</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('inc/contents/gallery'); ?>
<?php get_template_part('inc/contents/features'); ?>
<?php get_template_part('inc/contents/location'); ?>
<?php get_template_part('inc/contents/quote'); ?>

<?php get_footer(); ?>