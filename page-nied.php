<?php
// Template Name: NIED
get_header();
?>

<?php $nied = get_page_by_title('o-nied') ?>
<!-- verifica se existe texto nessa página -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php include(TEMPLATEPATH . '/assets/includes/jumbotron.php'); ?>

<div class="container" style="margin-top: 30px;">
  <div class="row">
      <?php the_content(); ?>

      <div class="row" style="margin: 20px 0;">
        <div class="col-lg-4">
          <h5>Missão</h5>
          <div class="divider" style="width: 100px;border-bottom: 3px solid;color: #007AB8;margin-bottom: 20px;"></div>
    			<?php the_field('nied_missao', $nied); ?>
        </div>
        <div class="col-lg-4" style="border-left: 1px solid;border-right: 1px solid;">
          <h5>Objetivo</h5>
          <div class="divider" style="width: 100px;border-bottom: 3px solid;color: #007AB8;margin-bottom: 20px;"></div>
    			<?php the_field('nied_objetivo'); ?>
        </div>
        <div class="col-lg-4">
          <h5>Visão</h5>
          <div class="divider" style="width: 100px;border-bottom: 3px solid;color: #007AB8;margin-bottom: 20px;"></div>
    			<?php the_field('nied_visao'); ?>
        </div>
      </div>
  </div>
</div>
<?php
  endwhile;
  endif;
?>
<?php get_footer(); ?>
