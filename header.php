<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
<div class="site--menu-trigger">
  <span class="ion-navicon-round"></span>
</div>
  <div class="site">
    <?php get_template_part('inc/structure/header'); ?>
    <div class="site--contents">

