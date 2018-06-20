<?php get_header(); ?>

<section class="pagina-interna">
  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <h2 class="display-4 jumbotron-title"><?php the_archive_title(); ?></h2>
      <h5><?php the_archive_description() ?></h5>
    </div>
  </div>
</section>

<div id="primary" class="pagina-inicial">
  <div class="container">
    <div class="row grid-row">
      <?php if ( have_posts() ) : ?>
        <?php
          /* Start the Loop */
          while ( have_posts() ) : the_post(); ?>
          <?php
            include(TEMPLATEPATH . '/assets/includes/card.php');
          endwhile;
        ?>
    </div>
    <?php
      the_posts_pagination( array(
        'mid_size' => 3,
        'prev_text' => __( 'Anterior', 'textdomain' ),
        'next_text' => __( 'Próximo', 'textdomain' ),
        'screen_reader_text' => __( '' )
      ) );
    ?>
    <?php endif; ?>
  </div>
</div><!-- #primary -->

<?php
get_footer();
