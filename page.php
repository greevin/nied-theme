<?php get_header(); ?>

<!-- verifica se existe texto nessa página -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
  <!-- verifica se existe imagem destacada -->
  <?php if ( has_post_thumbnail() ) { ?>
    <div class="jumbotron jumbotron-fluid text-center" style="background-repeat: no-repeat; background-image: url(<?php echo $featured_img_url; ?>); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 20;">
  <?php } else { ?>
      <div class="jumbotron jumbotron-fluid text-center">
  <?php } ?>
        <div class="container">
          <h2 class="display-4"><?php the_title(); ?></h2>
        </div>
      </div>

<div class="container">
  <div class="row">
      <?php the_content(); ?>
  </div>
</div>
<?php
  endwhile;
  endif;
?>
<?php get_footer(); ?>
