<?php get_header(); ?>

<!-- verifica se existe texto nessa página -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php include(TEMPLATEPATH . '/assets/includes/jumbotron.php'); ?>

<div class="container" style="margin-top: 30px; margin-bottom: 30px;">
  <div class="row">
      <?php the_content(); ?>
  </div>
</div>
<?php
  endwhile;
  endif;
?>
<?php get_footer(); ?>
