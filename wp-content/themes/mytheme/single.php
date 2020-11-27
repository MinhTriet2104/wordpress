<?php get_header(); ?>

<div class="container mt-1">

  <div class="row">
    <div class="col-md-8">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>

    <div class="col-md-4">
      <?php dynamic_sidebar("Sidebar"); ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>